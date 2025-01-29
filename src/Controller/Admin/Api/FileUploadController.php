<?php
// src/Controller/Admin/Api/FileUploadController.php
namespace App\Controller\Admin\Api;

use App\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/upload')]
class FileUploadController extends AbstractController
{
    public function __construct(
        private readonly FileUploader $fileUploader,
    ) {}

    #[Route('/temp', name: 'upload_temp', methods: ['POST'])]
    public function uploadTemp(Request $request): JsonResponse
    {
        try {
            if ($request->files->count() === 0) {
                throw new \Exception('No se ha enviado ningún archivo');
            }

            /** @var UploadedFile $file */
            $file = $request->files->get('fotoPrincipal');

            if (!$file) {
                throw new \Exception('Error al procesar el archivo');
            }

            // Verificar el error de subida
            if ($file->getError() === UPLOAD_ERR_INI_SIZE) {
                throw new \Exception('El archivo excede el tamaño máximo permitido');
            }

            if ($file->getError() !== UPLOAD_ERR_OK) {
                throw new \Exception('Error en la subida del archivo: ' . $file->getErrorMessage());
            }

            // Validar tipo MIME real usando FileInfo
            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $mimeType = $finfo->file($file->getPathname());

            if (!in_array($mimeType, ['image/png','image/jpeg','image/jpg'])) {
                throw new \Exception('El archivo debe ser una imagen PNG válida');
            }
            // Validar dimensiones
            $imageSize = getimagesize($file->getPathname());
            if ($imageSize[0] !== 1920 || $imageSize[1] !== 1080) {
                throw new \Exception('La imagen debe ser de 1920x1080 píxeles');
            }

            // Subir a directorio temporal
            $tempFilename = $this->fileUploader->uploadTemp($file);

            return new JsonResponse($tempFilename);

        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    #[Route('/temp/revert', name: 'revert_upload', methods: ['DELETE'])]
    public function revertUpload(Request $request): JsonResponse
    {
        try {
            $filename = $request->getContent();
            $this->fileUploader->removeTemp($filename);

            return new JsonResponse(['status' => 'success']);
        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}