<?php

namespace App\Entity;

use App\Repository\ZonasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ZonasRepository::class)]
class Zonas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $ubicacion = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $descripcion = null;

    #[ORM\Column(nullable: true)]
    private ?int $totalAscensos = null;

    /**
     * @var Collection<int, Bloques>
     */
    #[ORM\OneToMany(targetEntity: Bloques::class, mappedBy: 'idZona')]
    private Collection $bloques;
    /**
     * @var Collection<int, Restaurantes>
     */
    #[ORM\OneToMany(targetEntity: Restaurantes::class, mappedBy: 'zonaRestaurante')]
    private Collection $restaurantes;





    public function __construct()
    {
        $this->bloques = new ArrayCollection();
        $this->restaurantes = new ArrayCollection();
        $this->bloques = new ArrayCollection();

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getUbicacion(): ?string
    {
        return $this->ubicacion;
    }

    public function setUbicacion(string $ubicacion): static
    {
        $this->ubicacion = $ubicacion;

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

    public function getTotalAscensos(): ?int
    {
        return $this->totalAscensos;
    }

    public function setTotalAscensos(?int $totalAscensos): static
    {
        $this->totalAscensos = $totalAscensos;

        return $this;
    }


    /**
     * @return Collection<int, Bloques>
     */
    public function getBloques(): Collection
    {
        return $this->bloques;
    }

    public function addBloque(Bloques $bloque): static
    {
        if (!$this->bloques->contains($bloque)) {
            $this->bloques->add($bloque);
            $bloque->setIdZona($this);
        }

        return $this;
    }

    public function removeBloque(Bloques $bloque): static
    {
        if ($this->bloques->removeElement($bloque)) {
            // set the owning side to null (unless already changed)
            if ($bloque->getIdZona() === $this) {
                $bloque->setIdZona(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Restaurantes>
     */
    public function getRestaurantes(): Collection
    {
        return $this->restaurantes;
    }

    public function addRestaurantes(Restaurantes $restaurante): static
    {
        if (!$this->restaurantes->contains($restaurante)) {
            $this->restaurantes->add($restaurante);
            $restaurante->setZonaRestaurante($this);
        }

        return $this;
    }

    public function removeRestaurante(Restaurantes $restaurante): static
    {
        if ($this->restaurantes->removeElement($restaurante)) {
            // set the owning side to null (unless already changed)
            if ($restaurante->getZonaRestaurante() === $this) {
                $restaurante->setZonaRestaurante(null);
            }
        }

        return $this;
    }
}
