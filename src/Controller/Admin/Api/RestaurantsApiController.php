<?php

namespace App\Controller\Admin\Api;


use App\Entity\Restaurantes;
use App\Entity\Zonas;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/api/restaurants')]
class RestaurantsApiController extends AbstractController{

    public function __construct(private EntityManagerInterface $entityManager){}

    #[Route('/list', name: 'restaurants_list', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $restaurantes = $this->entityManager->getRepository(Restaurantes::class)->findAll();

        $data = array_map(function($restaurante) {
            return [
                'id' => $restaurante->getId(),
                'nombre' => $restaurante->getNombre(),
                'ubicacion' => $restaurante->getUbicacion(),
                'contacto' => $restaurante->getContacto(),
                'zonaRestaurante' => $restaurante->getZonaRestaurante() ?
                    $restaurante->getZonaRestaurante()->getNombre() : 'Sin zona asignada'
            ];
        }, $restaurantes);

        return new JsonResponse([
            'data' => $data,
            'recordsTotal' => count($data),
            'recordsFiltered' => count($data),
            'draw' => intval(Request::createFromGlobals()->query->get('draw'))
        ]);
    }

    #[Route('/create', name: 'restaurants_create', methods: ['POST'])]
    public function create(
        Request $request,
        EntityManagerInterface $entityManager,
        FileUploader $fileUploader,
        ValidatorInterface $validator
    ): JsonResponse {
        try {
            // Obtener el nombre del archivo temporal
            $imagenTemp = trim($request->request->get('fotoPrincipal'),'"');

            if (!$imagenTemp) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'La foto principal es obligatoria'
                ], Response::HTTP_BAD_REQUEST);
            }

            // Validar que el archivo temporal existe
            $tempPath = $fileUploader->getTempPath($imagenTemp);
            if (!file_exists($tempPath)) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'No se encontró la imagen temporal'
                ], Response::HTTP_BAD_REQUEST);
            }

            // Mover el archivo desde temp a la ubicación final
            try {
                $nombreArchivo = $fileUploader->moveFromTemp($imagenTemp, 'restaurants');
            } catch (\Exception $e) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'Error al procesar la imagen: ' . $e->getMessage()
                ], Response::HTTP_BAD_REQUEST);
            }

            // Crear y configurar el nuevo restaurante
            $restaurante = new Restaurantes();
            $restaurante->setNombre($request->request->get('nombre'));
            $restaurante->setUbicacion($request->request->get('ubicacion'));
            $restaurante->setContacto($request->request->get('contacto'));
            $restaurante->setDescripcion($request->request->get('descripcion'));
            $restaurante->setFotoPrincipal($nombreArchivo);

            // Buscar y setear la zona
            if ($request->request->get('idZona')) {
                $zona = $entityManager->getRepository(Zonas::class)->find($request->request->get('idZona'));
                if (!$zona) {
                    $fileUploader->removeFile('restaurants/' . $nombreArchivo);
                    return new JsonResponse([
                        'status' => 'error',
                        'message' => 'La zona especificada no existe'
                    ], Response::HTTP_BAD_REQUEST);
                }
                $restaurante->setZonaRestaurante($zona);
            }

            // Validar la entidad
            $errors = $validator->validate($restaurante);
            if (count($errors) > 0) {
                $fileUploader->removeFile('restaurants/' . $nombreArchivo);
                return new JsonResponse([
                    'status' => 'error',
                    'message' => (string) $errors
                ], Response::HTTP_BAD_REQUEST);
            }

            $entityManager->persist($restaurante);
            $entityManager->flush();

            return new JsonResponse([
                'status' => 'success',
                'id' => $restaurante->getId()
            ], Response::HTTP_CREATED);

        } catch (\Exception $e) {
            if (isset($nombreArchivo)) {
                $fileUploader->removeFile('restaurants/' . $nombreArchivo);
            }

            return new JsonResponse([
                'status' => 'error',
                'message' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    #[Route('/{id}', name: 'restaurants_update', methods: ['PUT'])]
    public function update(
        Request $request,
        Restaurantes $restaurante,
        EntityManagerInterface $entityManager,
        FileUploader $fileUploader,
        ValidatorInterface $validator
    ): JsonResponse {
        try {
            $data = json_decode($request->getContent(), true);

            if (!$data) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'Datos inválidos'
                ], Response::HTTP_BAD_REQUEST);
            }

            // Actualizar campos básicos
            if (isset($data['nombre'])) {
                $restaurante->setNombre($data['nombre']);
            }
            if (isset($data['ubicacion'])) {
                $restaurante->setUbicacion($data['ubicacion']);
            }
            if (isset($data['contacto'])) {
                $restaurante->setContacto($data['contacto']);
            }
            if (isset($data['descripcion'])) {
                $restaurante->setDescripcion($data['descripcion']);
            }

            // Actualizar zona si se proporciona
            if (isset($data['idZona'])) {
                $zona = $entityManager->getRepository(Zonas::class)->find($data['idZona']);
                if ($zona) {
                    $restaurante->setZonaRestaurante($zona);
                }
            }

            // Procesar nueva foto si se proporciona
            if (isset($data['fotoPrincipal']) && !empty($data['fotoPrincipal'])) {
                // Eliminar foto anterior
                if ($restaurante->getFotoPrincipal()) {
                    $fileUploader->removeFile('restaurants/' . $restaurante->getFotoPrincipal());
                }

                // Mover nueva foto desde temp
                $nombreArchivo = $fileUploader->moveFromTemp(trim($data['fotoPrincipal'], '"'), 'restaurants');
                $restaurante->setFotoPrincipal($nombreArchivo);
            }

            // Validar entidad
            $errors = $validator->validate($restaurante);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'Error de validación',
                    'errors' => $errorMessages
                ], Response::HTTP_BAD_REQUEST);
            }

            $entityManager->flush();

            return new JsonResponse([
                'status' => 'success',
                'message' => 'Restaurante actualizado correctamente'
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    #[Route('/{id}', name: 'restaurants_delete', methods: ['DELETE'])]
    public function delete(Restaurantes $restaurante, EntityManagerInterface $em): JsonResponse
    {
        try {
            // Comprobar si tiene comentarios o fotos antes de eliminar
            if (!$restaurante->getComentarios()->isEmpty()) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'No se puede eliminar el restaurante porque tiene comentarios asociados'
                ], Response::HTTP_BAD_REQUEST);
            }

            if (!$restaurante->getFotos()->isEmpty()) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'No se puede eliminar el restaurante porque tiene fotos asociadas'
                ], Response::HTTP_BAD_REQUEST);
            }

            $em->remove($restaurante);
            $em->flush();

            return new JsonResponse(['status' => 'success']);
        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }


    }

    #[Route('/details/{id}', name: 'api_restaurant_detail', methods: ['GET'])]
    public function getRestaurantDetail(Restaurantes $restaurante): JsonResponse
    {
        // Preparar los datos de la restaurante

        $restaurante = [
            'id' => $restaurante->getId(),
            'nombre' => $restaurante->getNombre(),
            'ubicacion' => $restaurante->getUbicacion(),
            'descripcion' => $restaurante->getDescripcion(),
            'contacto' => $restaurante->getContacto(),
            'zonaRestaurante' => $restaurante->getZonaRestaurante() ?
                $restaurante->getZonaRestaurante()->getNombre() : 'Sin zona asignada',
            'fotoPrincipal' => '/uploads/' . $restaurante->getFotoPrincipal(),
        ];

        return new JsonResponse($restaurante);
    }
}