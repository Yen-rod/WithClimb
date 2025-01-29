<?php

namespace App\Entity;

use App\Repository\FotoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FotoRepository::class)]
class Fotos
{
    public const TYPE_PHOTO_RESTAURANT = 1;
    public const TYPE_PHOTO_VIA = 2;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $url = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descripcion = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fechaSubida = null;

    #[ORM\ManyToOne(inversedBy: 'fotos')]
    private ?Usuarios $idUsuario = null;

    #[ORM\ManyToOne(inversedBy: 'fotos')]
    private ?Vias $vias = null;

    #[ORM\ManyToOne(inversedBy: 'fotos')]
    private ?Restaurantes $restaurantes = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getFechaSubida(): ?\DateTimeInterface
    {
        return $this->fechaSubida;
    }

    public function setFechaSubida(\DateTimeInterface $fechaSubida): static
    {
        $this->fechaSubida = $fechaSubida;

        return $this;
    }

    public function getIdUsuario(): ?Usuarios
    {
        return $this->idUsuario;
    }

    public function setIdUsuario(?Usuarios $idUsuario): static
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    public function getVias(): ?Vias
    {
        return $this->vias;
    }

    public function setVias(?Vias $vias): static
    {
        $this->vias = $vias;

        return $this;
    }

    public function getRestaurantes(): ?Restaurantes
    {
        return $this->restaurantes;
    }

    public function setRestaurantes(?Restaurantes $restaurantes): static
    {
        $this->restaurantes = $restaurantes;

        return $this;
    }
}
