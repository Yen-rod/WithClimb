<?php

namespace App\Controller\Admin\Api;

use App\Entity\Comentarios;
use App\Entity\Restaurantes;
use App\Entity\Vias;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/comments')]
class CommentsApiController extends AbstractController
{
    #[Route('/create', name: 'api_comment_create', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $em): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);

            // Validaciones básicas
            if (empty(trim($data['comentario']))) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'El comentario no puede estar vacío'
                ], 400);
            }

            $via = $em->getRepository(Vias::class)->find($data['idVia']);
            if (!$via) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'Vía no encontrada'
                ], 404);
            }

            $comment = new Comentarios();
            $comment->setComentario($data['comentario']);
            $comment->setFecha(new DateTime());
            $comment->setIdUsuario($this->getUser());
            $comment->setVias($via);

            $em->persist($comment);
            $em->flush();

            return new JsonResponse([
                'status' => 'success',
                'comment' => [
                    'id' => $comment->getId(),
                    'comentario' => $comment->getComentario(),
                    'fecha' => $comment->getFecha()->format('d/m/Y H:i'),
                    'usuario' => [
                        'id' => $comment->getIdUsuario()->getId(),
                        'nombre' => $comment->getIdUsuario()->getNombre(),
                        'avatar' => $comment->getIdUsuario()->getAvatar()
                    ]
                ]
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Error al crear el comentario'
            ], 500);
        }

    }

    #[Route('/via/{id}', name: 'api_comments_via', methods: ['GET'])]
    public function getViaComments(Vias $via): JsonResponse
    {
        $comments = $via->getComentarios();

        $formattedComments = array_map(function($comment) {
            return [
                'id' => $comment->getId(),
                'texto' => $comment->getComentario(),
                'fecha' => $comment->getFecha()->format('d/m/Y H:i'),
                'usuario' => [
                    'id' => $comment->getIdUsuario()->getId(),
                    'nombre' => $comment->getIdUsuario()->getNombre(),
                    'avatar' => $comment->getIdUsuario()->getAvatar()
                ]
            ];
        }, $comments->toArray());

        return new JsonResponse($formattedComments);
    }

    #[Route('/restaurant/{id}', name: 'api_comments_restaurant', methods: ['GET'])]
    public function getRestaurantComments(Restaurantes $restaurante): JsonResponse
    {
        $comments = $restaurante->getComentarios();

        $formattedComments = array_map(function($comment) {
            return [
                'id' => $comment->getId(),
                'texto' => $comment->getComentario(),
                'fecha' => $comment->getFecha()->format('d/m/Y H:i'),
                'usuario' => [
                    'id' => $comment->getIdUsuario()->getId(),
                    'nombre' => $comment->getIdUsuario()->getNombre(),
                    'avatar' => $comment->getIdUsuario()->getAvatar()
                ]
            ];
        }, $comments->toArray());

        return new JsonResponse($formattedComments);
    }

    #[Route('/restaurant/create', name: 'api_restaurant_comment_create', methods: ['POST'])]
    public function createRestaurantComment(Request $request, EntityManagerInterface $em): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);

            // Validaciones básicas
            if (empty(trim($data['comentario']))) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'El comentario no puede estar vacío'
                ], 400);
            }

            $restaurante = $em->getRepository(Restaurantes::class)->find($data['idRestaurante']);
            if (!$restaurante) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'Restaurante no encontrado'
                ], 404);
            }

            $comment = new Comentarios();
            $comment->setComentario($data['comentario']);
            $comment->setFecha(new DateTime());
            $comment->setIdUsuario($this->getUser());
            $comment->setRestaurantes($restaurante);

            $em->persist($comment);
            $em->flush();

            return new JsonResponse([
                'status' => 'success',
                'comment' => [
                    'id' => $comment->getId(),
                    'comentario' => $comment->getComentario(),
                    'fecha' => $comment->getFecha()->format('d/m/Y H:i'),
                    'usuario' => [
                        'id' => $comment->getIdUsuario()->getId(),
                        'nombre' => $comment->getIdUsuario()->getNombre(),
                        'avatar' => $comment->getIdUsuario()->getAvatar()
                    ]
                ]
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Error al crear el comentario'
            ], 500);
        }
    }
}