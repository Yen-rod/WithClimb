<?php

namespace App\Controller\Admin\Api;

use App\Entity\Bloques;
use App\Entity\Vias;
use App\Entity\Zonas;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/api/zones')]
class ZonesApiController extends AbstractController
{
    #[Route('/create', name: 'zones_create', methods: ['POST'])]
    public function createZone(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        try {

            $data = json_decode($request->getContent(), true);
            // Al inicio del método, después de decodificar el JSON
            if (empty(trim($data['nombre']))) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'El nombre de la zona es requerido'
                ], Response::HTTP_BAD_REQUEST);
            }

            if (empty(trim($data['ubicacion']))) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'La ubicación es requerida'
                ], Response::HTTP_BAD_REQUEST);
            }

            // Validación de bloques
            if (isset($data['bloques'])) {
                foreach ($data['bloques'] as $index => $bloqueData) {
                    if (empty(trim($bloqueData['nombre']))) {
                        $blockIndex = $index + 1;
                        return new JsonResponse([
                            'status' => 'error',
                            'message' => "El nombre del bloque #{$blockIndex} es requerido"
                        ], Response::HTTP_BAD_REQUEST);
                    }
                }
            }

            // Crear y configurar la zona
            $zona = new Zonas();
            $zona->setNombre($data['nombre']);
            $zona->setUbicacion($data['ubicacion']);
            $zona->setDescripcion($data['descripcion']);
            $zona->setTotalAscensos(0);


            // Persistir la zona primero para tener el ID
            $entityManager->persist($zona);

            // Procesar los bloques si existen
            if (isset($data['bloques']) && is_array($data['bloques'])) {
                foreach ($data['bloques'] as $bloqueData) {
                    $bloque = new Bloques();
                    $bloque->setNombre($bloqueData['nombre']);
                    $bloque->setDescripcion($bloqueData['descripcion']);
                    $bloque->setTotalAscensos(0);
                    $bloque->setIdZona($zona);

                    $entityManager->persist($bloque);

                    // Añadir el bloque a la colección de bloques de la zona
                    $zona->addBloque($bloque);
                }
            }

            // Guardar todo en la base de datos
            $entityManager->flush();

            return new JsonResponse([
                'status' => 'success',
                'id' => $zona->getId()
            ], Response::HTTP_CREATED);

        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    #[Route('/list', name: 'zones_list', methods: ['GET'])]
    public function list(EntityManagerInterface $em): JsonResponse
    {
        $zonas = $em->getRepository(Zonas::class)->findAll();

        $data = array_map(function($zona) {
            $totalAscensos = array_sum(
                array_merge(...$zona->getBloques()->map(function($bloque) {
                    /** @var Bloques $bloque */
                    return $bloque->getVias()->map(function($via) {
                        /** @var Vias $via */
                        return $via->getAscensos()->count();
                    })->toArray();
                })->toArray())
            );

            return [
                'id' => $zona->getId(),
                'nombre' => $zona->getNombre(),
                'ubicacion' => $zona->getUbicacion(),
                'bloques' => count($zona->getBloques()),
                'totalAscensos' => $totalAscensos ?? 0,
                'acciones' => $zona->getId(), // Se utilizará para generar los botones
            ];
        }, $zonas);

        return new JsonResponse([
            'data' => $data,
            'recordsTotal' => count($data),
            'recordsFiltered' => count($data),
            'draw' => intval(Request::createFromGlobals()->query->get('draw'))
        ]);
    }

    #[Route('/{id}', name: 'zones_delete', methods: ['DELETE'])]
    public function delete(Zonas $zona, EntityManagerInterface $em): JsonResponse
    {
        try {
            $em->remove($zona);
            $em->flush();

            return new JsonResponse(['status' => 'success']);
        } catch (\Exception $e) {
            return new JsonResponse(['status' => 'error', 'message' => $e->getMessage()], 400);
        }
    }

    #[Route('/details/{id}', name: 'api_zona_detail', methods: ['GET'])]
    public function getZonaDetail(Zonas $zona): JsonResponse
    {
        // Preparar los datos de la zona con sus relaciones

        $totalAscensos = array_sum(
            array_merge(...$zona->getBloques()->map(function($bloque) {
                /** @var Bloques $bloque */
                return $bloque->getVias()->map(function($via) {
                    /** @var Vias $via */
                    return $via->getAscensos()->count();
                })->toArray();
            })->toArray())
        );

        $zonaData = [
            'id' => $zona->getId(),
            'nombre' => $zona->getNombre(),
            'ubicacion' => $zona->getUbicacion(),
            'descripcion' => $zona->getDescripcion(),
            'totalAscensos' => $totalAscensos,
            'bloques' => array_map(function($bloque) {
                return [
                    'id' => $bloque->getId(),
                    'nombre' => $bloque->getNombre(),
                    'descripcion' => $bloque->getDescripcion(),
                    'totalAscensos' => $bloque->getTotalAscensos(),
                    'vias' => array_map(function($via) {
                        return [
                            'id' => $via->getId(),
                            'nombre' => $via->getNombre(),
                            'gradoDificultad' => $via->getGradoDificultad(),
                            'totalAscensos' => $via->getTotalAscensos()
                        ];
                    }, $bloque->getVias()->toArray())
                ];
            }, $zona->getBloques()->toArray()),
            'restaurantes' => array_map(function($restaurante) {
                return [
                    'id' => $restaurante->getId(),
                    'nombre' => $restaurante->getNombre(),
                    'ubicacion' => $restaurante->getUbicacion(),
                    'contacto' => $restaurante->getContacto()
                ];
            }, $zona->getRestaurantes()->toArray())
        ];

        return new JsonResponse($zonaData);
    }

    #[Route('/{id}', name: 'update', methods: ['PUT'])]
    public function update(
        Request $request,
        Zonas $zona,
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);

        if (!$data) {
            return $this->json([
                'status' => 'error',
                'message' => 'Invalid JSON data'
            ], 400);
        }


        // Actualizar campos
        if (isset($data['nombre'])) {
            $zona->setNombre($data['nombre']);
        }
        if (isset($data['ubicacion'])) {
            $zona->setUbicacion($data['ubicacion']);
        }
        if (isset($data['descripcion'])) {
            $zona->setDescripcion($data['descripcion']);
        }

        // Actualizar bloques existentes
        if (isset($data['bloques']) && is_array($data['bloques'])) {
            foreach ($data['bloques'] as $bloqueId => $bloqueData) {
                /** @var Bloques|null $bloque */
                $bloque = $entityManager->getRepository(Bloques::class)->find($bloqueId);

                if ($bloque && $bloque->getIdZona()->getId() === $zona->getId()) {
                    $bloque->setNombre($bloqueData['nombre']);
                    $bloque->setDescripcion($bloqueData['descripcion']);
                }
            }
        }

        // Añadir nuevos bloques
        if (isset($data['nuevosBloques']) && is_array($data['nuevosBloques'])) {
            foreach ($data['nuevosBloques'] as $bloqueData) {
                $bloque = new Bloques();
                $bloque->setNombre($bloqueData['nombre']);
                $bloque->setDescripcion($bloqueData['descripcion']);
                $bloque->setTotalAscensos(0);
                $bloque->setIdZona($zona);

                $entityManager->persist($bloque);
            }
        }

        $entityManager->flush();

        // Validar entidad
        $errors = $validator->validate($zona);
        if (count($errors) > 0) {
            $errorMessages = [];
            foreach ($errors as $error) {
                $errorMessages[] = $error->getMessage();
            }
            return $this->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $errorMessages
            ], 400);
        }

        try {
            $entityManager->persist($zona);
            $entityManager->flush();
            return $this->json([
                'status' => 'success',
                'message' => 'Zone updated successfully'
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'status' => 'error',
                'message' => 'Database error'
            ], 500);
        }
    }

    #[Route('/bloque/{id}', name: 'bloque_delete', methods: ['DELETE'])]
    public function deleteBloque(
        int $id,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        try {
            $bloque = $entityManager->getRepository(Bloques::class)->find($id);

            if (!$bloque) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'Bloque no encontrado'
                ], Response::HTTP_NOT_FOUND);
            }

            // Verificar si tiene vías asociadas
            if ($bloque->getVias()->count() > 0) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'No se puede eliminar el bloque porque tiene vías asociadas'
                ], Response::HTTP_BAD_REQUEST);
            }

            $entityManager->remove($bloque);
            $entityManager->flush();

            return new JsonResponse([
                'status' => 'success',
                'message' => 'Bloque eliminado correctamente'
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    #[Route('/search', name: 'zones_search', methods: ['GET'])]
    public function search(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $searchTerm = $request->query->get('q', '');
        $page = $request->query->get('page', 1);
        $limit = 30;
        $offset = ($page - 1) * $limit;

        $qb = $em->createQueryBuilder();
        $qb->select('z')
            ->from(Zonas::class, 'z')
            ->where('z.nombre LIKE :term')
            ->setParameter('term', '%' . $searchTerm . '%')
            ->setMaxResults($limit)
            ->setFirstResult($offset);

        $zonas = $qb->getQuery()->getResult();

        // Contar total
        $qbCount = $em->createQueryBuilder();
        $total = $qbCount->select('COUNT(z.id)')
            ->from(Zonas::class, 'z')
            ->where('z.nombre LIKE :term')
            ->setParameter('term', '%' . $searchTerm . '%')
            ->getQuery()
            ->getSingleScalarResult();

        return new JsonResponse([
            'items' => array_map(function($zona) {
                return [
                    'id' => $zona->getId(),
                    'nombre' => $zona->getNombre()
                ];
            }, $zonas),
            'total_count' => $total
        ]);
    }

    #[Route('/blocks/list', name: 'blocks_list', methods: ['GET'])]
    public function listBlocks(EntityManagerInterface $em): JsonResponse
    {
        try {
            $bloques = $em->getRepository(Bloques::class)->createQueryBuilder('b')
                ->select('b.id', 'b.nombre', 'z.nombre as zonaNombre')
                ->leftJoin('b.idZona', 'z')
                ->getQuery()
                ->getResult();

            $formattedBloques = array_map(function($bloque) {
                return [
                    'id' => $bloque['id'],
                    'nombre' => sprintf('%s (%s)', $bloque['nombre'], $bloque['zonaNombre']),
                    'nombreBloque' => $bloque['nombre'],
                    'nombreZona' => $bloque['zonaNombre']
                ];
            }, $bloques);

            return new JsonResponse([
                'status' => 'success',
                'data' => $formattedBloques
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Error al obtener la lista de bloques: ' . $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
