<?php

namespace App\Controller\Admin\Api;

use App\Entity\Ascensos;
use App\Entity\Vias;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/api/ascensos')]
#[IsGranted('ROLE_USER')]
class ClimbsApiController extends AbstractController
{
    #[Route('/register/{id}', name: 'api_ascenso_register', methods: ['POST'])]
    public function register(
        Vias $via,
        Request $request,
        EntityManagerInterface $em
    ): JsonResponse {
        try {
            $data = json_decode($request->getContent(), true);

            // Crear nuevo ascenso
            $ascenso = new Ascensos();
            $ascenso->setFecha(new \DateTimeImmutable());
            $ascenso->setIdUsuario($this->getUser());
            $ascenso->setIdVia($via);

            // Actualizar contador de ascensos del usuario
            $usuario = $this->getUser();
            $usuario->setTotalAscensos($usuario->getTotalAscensos() + 1);

            $em->persist($ascenso);
            $em->flush();

            return new JsonResponse([
                'status' => 'success',
                'message' => 'Ascenso registrado correctamente'
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Error al registrar el ascenso'
            ], 400);
        }
    }

    #[Route('/user/list', name: 'api_ascensos_user', methods: ['GET'])]
    public function getUserAscensos(EntityManagerInterface $em): JsonResponse
    {
        try {
            $ascensos = $em->getRepository(Ascensos::class)
                ->findBy(['idUsuario' => $this->getUser()], ['fecha' => 'DESC']);

            $data = array_map(function($ascenso) {
                return [
                    'id' => $ascenso->getId(),
                    'fecha' => $ascenso->getFecha()->format('Y-m-d'),
                    'via' => [
                        'id' => $ascenso->getIdVia()->getId(),
                        'nombre' => $ascenso->getIdVia()->getNombre(),
                        'grado' => $ascenso->getIdVia()->getGradoDificultad(),
                    ]
                ];
            }, $ascensos);

            return new JsonResponse([
                'status' => 'success',
                'data' => $data
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Error al obtener los ascensos'
            ], 400);
        }
    }
}