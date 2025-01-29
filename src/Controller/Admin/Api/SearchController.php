<?php

namespace App\Controller\Admin\Api;

use App\Entity\Vias;
use App\Entity\Restaurantes;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/search')]
class SearchController extends AbstractController
{
    #[Route('/global', name: 'api_global_search', methods: ['GET'])]
    public function globalSearch(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $query = $request->query->get('query', '');
        $limit = $request->query->get('limit', 5);

        if (strlen($query) < 2) {
            return new JsonResponse([
                'vias' => [],
                'restaurantes' => []
            ]);
        }

        // Buscar vías
        $viasQuery = $em->createQueryBuilder()
            ->select('v')
            ->from(Vias::class, 'v')
            ->where('v.nombre LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->setMaxResults($limit)
            ->getQuery();

        // Buscar restaurantes
        $restaurantesQuery = $em->createQueryBuilder()
            ->select('r')
            ->from(Restaurantes::class, 'r')
            ->where('r.nombre LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->setMaxResults($limit)
            ->getQuery();

        $vias = array_map(function($via) {
            return [
                'id' => $via->getId(),
                'nombre' => $via->getNombre(),
                'tipo' => 'via',
                'gradoDificultad' => $via->getGradoDificultad(),
                'bloque' => $via->getIdBloque() ? $via->getIdBloque()->getNombre() : null,
                'zona' => $via->getIdBloque() && $via->getIdBloque()->getIdZona() ?
                    $via->getIdBloque()->getIdZona()->getNombre() : null
            ];
        }, $viasQuery->getResult());

        $restaurantes = array_map(function($restaurante) {
            return [
                'id' => $restaurante->getId(),
                'nombre' => $restaurante->getNombre(),
                'tipo' => 'restaurante',
                'ubicacion' => $restaurante->getUbicacion(),
                'zona' => $restaurante->getZonaRestaurante() ?
                    $restaurante->getZonaRestaurante()->getNombre() : null
            ];
        }, $restaurantesQuery->getResult());

        return new JsonResponse([
            'vias' => $vias,
            'restaurantes' => $restaurantes
        ]);
    }
}