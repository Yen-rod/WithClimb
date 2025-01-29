<?php

namespace App\Entity;

use App\Repository\AscensosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AscensosRepository::class)]
class Ascensos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\ManyToOne(inversedBy: 'ascensos')]
    private ?Usuarios $idUsuario = null;


    #[ORM\ManyToOne(inversedBy: 'ascensos')]
    private ?Vias $idVia = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }


    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): static
    {
        $this->fecha = $fecha;

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



    public function getIdVia(): ?Vias
    {
        return $this->idVia;
    }

    public function setIdVia(?Vias $idVia): static
    {
        $this->idVia = $idVia;

        return $this;
    }
}
