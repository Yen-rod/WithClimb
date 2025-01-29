<?php

namespace App\Controller\Admin\Api;

use App\Entity\Usuarios;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/api/users')]
class UserApiController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly ValidatorInterface $validator,
        private readonly UserPasswordHasherInterface $passwordHasher,
        private readonly FileUploader $fileUploader,
    ){}

    #[Route('/profile', name: 'api_user_profile', methods: ['GET'])]
    public function getProfile(): JsonResponse
    {
        $user = $this->getUser();

        if (!$user instanceof Usuarios) {
            return new JsonResponse(['error' => 'Usuario no encontrado'], Response::HTTP_NOT_FOUND);
        }

        return new JsonResponse([
            'id' => $user->getId(),
            'nombre' => $user->getNombre(),
            'email' => $user->getEmail(),
            'avatar' => $user->getAvatar(),
            'genero' => $user->getGenero(),
            'fechaRegistro' => $user->getFechaRegistro()?->format('Y-m-d'),
            'totalAscensos' => $user->getTotalAscensos()
        ]);
    }

    #[Route('/profile', name: 'api_user_profile_update', methods: ['POST'])]
    public function updateProfile(Request $request): JsonResponse
    {
        $user = $this->getUser();

        if (!$user instanceof Usuarios) {
            return new JsonResponse(['error' => 'Usuario no encontrado'], Response::HTTP_NOT_FOUND);
        }

        try {
            $data = json_decode($request->getContent(), true);

            // Actualizar datos básicos
            if (isset($data['nombre'])) {
                $user->setNombre($data['nombre']);
            }

            if (isset($data['genero'])) {
                $user->setGenero($data['genero']);
            }


            // Si se proporciona nueva contraseña
            if (!empty($data['password'])) {
                $hashedPassword = $this->passwordHasher->hashPassword($user, $data['password']);
                $user->setPassword($hashedPassword);
            }

            // Validar entidad
            $errors = $this->validator->validate($user);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return new JsonResponse(['errors' => $errorMessages], Response::HTTP_BAD_REQUEST);
            }

            $this->entityManager->flush();

            return new JsonResponse([
                'message' => 'Perfil actualizado correctamente',
                'user' => [
                    'nombre' => $user->getNombre(),
                    'email' => $user->getEmail(),
                    'genero' => $user->getGenero()
                ]
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'error' => 'Error al actualizar el perfil: ' . $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/profile/avatar', name: 'api_user_avatar_update', methods: ['POST'])]
    public function updateAvatar(Request $request): JsonResponse
    {
        /** @var Usuarios $user */
        $user = $this->getUser();

        if (!$user instanceof Usuarios) {
            return new JsonResponse(['error' => 'Usuario no encontrado'], Response::HTTP_NOT_FOUND);
        }

        try {
            /** @var UploadedFile $file */
            $file = $request->files->get('avatar');
            if (!$file) {
                throw new \Exception('Error al procesar el archivo');
            }

            // Mover el archivo desde temp a la ubicación final
            $avatarPath = "users/{$user->getId()}";
            $finalPath = $this->fileUploader->uploadTemp(
                $file
            );

            // Si existe un avatar anterior, lo eliminamos
            if ($user->getAvatar()) {
                $this->fileUploader->removeFile($user->getAvatar());
            }

            // Mover nueva foto desde temp
            $nombreArchivo = $this->fileUploader->moveFromTemp($finalPath, 'users/' . $user->getId());

            // Actualizar ruta del avatar en el usuario
            $user->setAvatar($nombreArchivo);
            $this->entityManager->flush();

            return new JsonResponse([
                'status' => 'success',
                'message' => 'Avatar actualizado correctamente',
                'avatar' => '/uploads/' . $user->getAvatar()
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'error' => 'Error al actualizar el avatar: ' . $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}