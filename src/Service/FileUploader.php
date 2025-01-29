<?php

// src/Service/FileUploader.php
namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class FileUploader
{
    private string $tempDirectory;

    public function __construct(
        private readonly string           $targetDirectory,
        private readonly SluggerInterface $slugger,
    ) {
        $this->tempDirectory = $targetDirectory . '/temp';
        if (!file_exists($this->tempDirectory)) {
            mkdir($this->tempDirectory, 0777, true);
        }
    }

    /**
     * @throws \Exception
     */
    public function uploadTemp(UploadedFile $file): string
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

        try {
            $file->move($this->tempDirectory, $fileName);
        } catch (FileException $e) {
            throw new \Exception('Error al subir el archivo temporal');
        }

        return $fileName;
    }

    public function removeTemp(string $filename): void
    {
        $filepath = $this->tempDirectory . '/' . $filename;
        if (file_exists($filepath)) {
            unlink($filepath);
        }
    }

    /**
     * @throws \Exception
     */
    public function moveFromTemp(string $filename, string $subdirectory = ''): string
    {
        $sourcePath = $this->tempDirectory . '/' . trim($filename,'"');

        if (!file_exists($sourcePath)) {
            throw new \Exception('Archivo temporal no encontrado');
        }

        $targetPath = $this->targetDirectory;
        if ($subdirectory) {
            $targetPath .= '/' . $subdirectory;
            if (!file_exists($targetPath)) {
                mkdir($targetPath, 0777, true);
            }
        }

        $targetFile = $targetPath . '/' . $filename;
        rename($sourcePath, $targetFile);

        return $subdirectory ? $subdirectory . '/' . $filename : $filename;
    }

    public function getTempPath(string $filename): string
    {
        return $this->tempDirectory . '/' . $filename;
    }

    public function removeFile(string $path): void
    {
        $fullPath = $this->targetDirectory . '/' . $path;
        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
    }
}