<?php

namespace App\Controller\Admin\Api;

use App\Entity\Fotos;
use App\Entity\Restaurantes;
use App\Entity\Vias;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/api/photos')]
class PhotosApiController extends AbstractController
{
    public function __construct(readonly string $photosDirectory)
    {}

    #[Route('/upload', name: 'api_photo_upload', methods: ['POST'])]
    public function upload(
        Request $request,
        EntityManagerInterface $em,
        SluggerInterface $slugger
    ): JsonResponse {
        try {
            /** @var UploadedFile $file */
            $file = $request->files->get('photo');
            $description = $request->request->get('description');
            $viaId = $request->request->get('viaId');
            $restaurantId = $request->request->get('restauranteId');

            if (!$file) {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => 'No se ha proporcionado ninguna imagen'
                ], 400);
            }

            if(!empty($viaId)) {
                $via = $em->getRepository(Vias::class)->find($viaId);
                if (!$via) {
                    return new JsonResponse([
                        'status' => 'error',
                        'message' => 'Vía no encontrada'
                    ], 404);
                }
            } else if(!empty($restaurantId)){
                $restaurante = $em->getRepository(Restaurantes::class)->find($restaurantId);
                if (!$restaurante) {
                    return new JsonResponse([
                        'status' => 'error',
                        'message' => 'Restaurante no encontrada'
                    ], 404);
                }
            }


            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename)->lower();
            $newFilename = $safeFilename->toString().'-'.uniqid().'.'.$file->getClientOriginalExtension();

            // Mover el archivo al directorio de fotos
            $file->move(
                $this->photosDirectory,
                $newFilename
            );

            // Crear registro en la base de datos
            $photo = new Fotos();
            $photo->setUrl($newFilename);
            $photo->setDescripcion($description);
            $photo->setFechaSubida(new DateTime());
            $photo->setIdUsuario($this->getUser());
            if(!empty($via)){
                $photo->setVias($via);
            }
            if(!empty($restaurante)){
                $photo->setRestaurantes($restaurante);
            }

            $em->persist($photo);
            $em->flush();

            return new JsonResponse([
                'status' => 'success',
                'message' => 'Foto subida correctamente',
                'photo' => [
                    'id' => $photo->getId(),
                    'url' => $newFilename
                ]
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Error al subir la foto: ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/via/{id}', name: 'api_photos_via', methods: ['GET'])]
    public function getRoutePhotos(Vias $via): JsonResponse
    {
        $photos = $via->getFotos()->map(function($foto) {
            return [
                'id' => $foto->getId(),
                'url' => $foto->getUrl(),
                'descripcion' => $foto->getDescripcion(),
                'fechaSubida' => $foto->getFechaSubida()->format('Y-m-d H:i:s'),
                'usuario' => [
                    'id' => $foto->getIdUsuario()->getId(),
                    'nombre' => $foto->getIdUsuario()->getNombre(),
                    'avatar' => $foto->getIdUsuario()->getAvatar() ?: 'default-avatar.jpg'
                ]
            ];
        })->toArray();

        return new JsonResponse($photos);
    }

    #[Route('/restaurant/{id}', name: 'api_photos_restaurant', methods: ['GET'])]
    public function getRestaurantPhotos(Restaurantes $restaurante): JsonResponse
    {
        $photos = $restaurante->getFotos()->map(function($foto) {
            return [
                'id' => $foto->getId(),
                'url' => $foto->getUrl(),
                'descripcion' => $foto->getDescripcion(),
                'fechaSubida' => $foto->getFechaSubida()->format('Y-m-d H:i:s'),
                'usuario' => [
                    'id' => $foto->getIdUsuario()->getId(),
                    'nombre' => $foto->getIdUsuario()->getNombre(),
                    'avatar' => $foto->getIdUsuario()->getAvatar() ?: 'default-avatar.jpg'
                ]
            ];
        })->toArray();

        return new JsonResponse($photos);
    }
}