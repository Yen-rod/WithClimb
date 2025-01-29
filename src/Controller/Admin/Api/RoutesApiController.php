<?php

namespace App\Controller\Admin\Api;

use App\Entity\Bloques;
use App\Entity\Vias;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/api/routes')]
class RoutesApiController extends AbstractController
{
    #[Route('/create', name: 'routes_create', methods: ['POST'])]
    public function create(
        Request $request,
        EntityManagerInterface $entityManager,
        FileUploader $fileUploader,
        ValidatorInterface $validator
    ): JsonResponse {
        try {
            // Obtener el nombre del archivo temporal que fue subido previamente
            $imagenTemp = trim($request->request->get('fotoPrincipal'), '"');

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
                $nombreArchivo = $fileUploader->moveFromTemp(trim($imagenTemp,'"'), 'routes');
            } catch (\Exception $e) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'Error al procesar la imagen: ' . $e->getMessage()
                ], Response::HTTP_BAD_REQUEST);
            }

            // Crear y configurar la nueva vía
            $via = new Vias();
            $via->setNombre($request->request->get('nombre'));
            $via->setGradoDificultad($request->request->get('gradoDificultad'));
            $via->setDescripcion($request->request->get('descripcion'));
            $via->setTotalAscensos(0);
            $via->setFotoPrincipal($nombreArchivo);

            // Obtener y setear el bloque
            $bloque = $entityManager->getRepository(Bloques::class)->find($request->request->get('idBloque'));
            if (!$bloque) {
                // Si hay error, eliminar la imagen que acabamos de mover
                $fileUploader->removeFile('routes/' . $nombreArchivo);
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'El bloque especificado no existe'
                ], Response::HTTP_BAD_REQUEST);
            }
            $via->setIdBloque($bloque);

            // Validar la entidad
            $errors = $validator->validate($via);
            if (count($errors) > 0) {
                // Si hay error de validación, eliminar la imagen
                $fileUploader->removeFile('routes/' . $nombreArchivo);
                return new JsonResponse([
                    'status' => 'error',
                    'message' => (string) $errors
                ], Response::HTTP_BAD_REQUEST);
            }

            // Persistir la vía
            $entityManager->persist($via);
            $entityManager->flush();

            return new JsonResponse([
                'status' => 'success',
                'id' => $via->getId()
            ], Response::HTTP_CREATED);

        } catch (\Exception $e) {
            // Si hay cualquier error, intentar limpiar archivos temporales
            if (isset($nombreArchivo)) {
                $fileUploader->removeFile('routes/' . $nombreArchivo);
            }

            return new JsonResponse([
                'status' => 'error',
                'message' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    #[Route('/list', name: 'routes_list', methods: ['GET'])]
    public function list(EntityManagerInterface $em): JsonResponse
    {
        $vias = $em->getRepository(Vias::class)->createQueryBuilder('v')
            ->select('v', 'b', 'z')
            ->leftJoin('v.idBloque', 'b')
            ->leftJoin('b.idZona', 'z')
            ->getQuery()
            ->getResult();

        $data = array_map(function(Vias $via) {
            return [
                'id' => $via->getId(),
                'nombre' => $via->getNombre(),
                'gradoDificultad' => $via->getGradoDificultad(),
                'totalAscensos' => $via->getTotalAscensos() ?? 0,
                'bloque' => $via->getIdBloque() ? $via->getIdBloque()->getNombre() : 'Sin bloque',
                'zona' => $via->getIdBloque() && $via->getIdBloque()->getIdZona()
                    ? $via->getIdBloque()->getIdZona()->getNombre()
                    : 'Sin zona',
                'fotoPrincipal' => $via->getFotoPrincipal(),
            ];
        }, $vias);

        return new JsonResponse([
            'data' => $data,
            'recordsTotal' => count($data),
            'recordsFiltered' => count($data),
            'draw' => intval(Request::createFromGlobals()->query->get('draw'))
        ]);
    }

    #[Route('/{id}', name: 'routes_delete', methods: ['DELETE'])]
    public function delete(Vias $via, EntityManagerInterface $em, FileUploader $fileUploader): JsonResponse
    {
        try {
            // Verificar si tiene ascensos asociados
            if (!$via->getAscensos()->isEmpty()) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'No se puede eliminar la vía porque tiene ascensos registrados'
                ], Response::HTTP_BAD_REQUEST);
            }

            // Verificar si tiene comentarios asociados
            if (!$via->getComentarios()->isEmpty()) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'No se puede eliminar la vía porque tiene comentarios asociados'
                ], Response::HTTP_BAD_REQUEST);
            }

            // Eliminar la foto asociada
            if ($via->getFotoPrincipal()) {
                $fileUploader->removeFile('routes/' . $via->getFotoPrincipal());
            }

            // Eliminar la vía
            $em->remove($via);
            $em->flush();

            return new JsonResponse(['status' => 'success']);
        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    #[Route('/details/{id}', name: 'api_route_detail', methods: ['GET'])]
    public function getRouteDetail(Vias $via): JsonResponse
    {
        try {
            $data = [
                'id' => $via->getId(),
                'nombre' => $via->getNombre(),
                'gradoDificultad' => $via->getGradoDificultad(),
                'descripcion' => $via->getDescripcion(),
                'totalAscensos' => $via->getTotalAscensos(),
                'fotoPrincipal' => '/uploads/' . $via->getFotoPrincipal(),
                'bloque' => [
                    'id' => $via->getIdBloque()->getId(),
                    'nombre' => $via->getIdBloque()->getNombre(),
                    'zona' => [
                        'id' => $via->getIdBloque()->getIdZona()->getId(),
                        'nombre' => $via->getIdBloque()->getIdZona()->getNombre()
                    ]
                ],
                'ascensos' => array_map(function($ascenso) {
                    return [
                        'id' => $ascenso->getId(),
                        'fecha' => $ascenso->getFecha()->format('d/m/Y'),
                        'usuario' => [
                            'id' => $ascenso->getIdUsuario()->getId(),
                            'nombre' => $ascenso->getIdUsuario()->getNombre()
                        ]
                    ];
                }, $via->getAscensos()->toArray()),
                'comentarios' => array_map(function($comentario) {
                    return [
                        'id' => $comentario->getId(),
                        'texto' => $comentario->getComentario(),
                        'fecha' => $comentario->getFecha()->format('d/m/Y'),
                        'usuario' => [
                            'id' => $comentario->getIdUsuario()->getId(),
                            'nombre' => $comentario->getIdUsuario()->getNombre()
                        ]
                    ];
                }, $via->getComentarios()->toArray())
            ];

            return new JsonResponse([
                'status' => 'success',
                'data' => $data
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Error al obtener los detalles de la vía: ' . $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/{id}', name: 'routes_update', methods: ['PUT'])]
    public function update(
        Request $request,
        Vias $via,
        EntityManagerInterface $entityManager,
        FileUploader $fileUploader,
        ValidatorInterface $validator
    ): JsonResponse {
        try {
            // Obtener datos del request
            $data = json_decode($request->getContent(), true);

            // Actualizar campos básicos
            $via->setNombre($data['nombre']);
            $via->setGradoDificultad($data['gradoDificultad']);
            $via->setDescripcion($data['descripcion']);

            // Actualizar bloque si se proporciona
            if (isset($data['idBloque'])) {
                $bloque = $entityManager->getRepository(Bloques::class)->find($data['idBloque']);
                if (!$bloque) {
                    return new JsonResponse([
                        'status' => 'error',
                        'message' => 'El bloque especificado no existe'
                    ], Response::HTTP_BAD_REQUEST);
                }
                $via->setIdBloque($bloque);
            }

            // Procesar nueva foto si se proporciona
            if (isset($data['fotoPrincipal']) && !empty($data['fotoPrincipal'])) {
                // Eliminar foto anterior
                if ($via->getFotoPrincipal()) {
                    $fileUploader->removeFile('routes/' . $via->getFotoPrincipal());
                }

                // Mover nueva foto desde temp
                $nombreArchivo = $fileUploader->moveFromTemp(trim($data['fotoPrincipal'],'"'), 'routes');
                $via->setFotoPrincipal($nombreArchivo);
            }

            // Validar entidad
            $errors = $validator->validate($via);
            if (count($errors) > 0) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => (string) $errors
                ], Response::HTTP_BAD_REQUEST);
            }

            $entityManager->flush();

            return new JsonResponse([
                'status' => 'success',
                'message' => 'Vía actualizada correctamente'
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}