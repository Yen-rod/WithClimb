<?php

namespace App\Entity;

use App\Repository\BloquesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BloquesRepository::class)]
class Bloques
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descripcion = null;

    #[ORM\Column(nullable: true)]
    private ?int $totalAscensos = null;


    #[ORM\ManyToOne(inversedBy: 'bloques')]
    #[ORM\JoinColumn(onDelete: 'CASCADE')]
    private ?Zonas $idZona = null;

    /**
     * @var Collection<int, Vias>
     */
    #[ORM\OneToMany(targetEntity: Vias::class, mappedBy: 'idBloque')]
    private Collection $vias;

    public function __construct()
    {
        $this->vias = new ArrayCollection();
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


    public function getIdZona(): ?Zonas
    {
        return $this->idZona;
    }

    public function setIdZona(?Zonas $idZona): static
    {
        $this->idZona = $idZona;

        return $this;
    }


    /**
     * @return Collection<int, Vias>
     */
    public function getVias(): Collection
    {
        return $this->vias;
    }

    public function addVia(Vias $via): static
    {
        if (!$this->vias->contains($via)) {
            $this->vias->add($via);
            $via->setIdBloque($this);
        }

        return $this;
    }

    public function removeVia(Vias $via): static
    {
        if ($this->vias->removeElement($via)) {
            // set the owning side to null (unless already changed)
            if ($via->getIdBloque() === $this) {
                $via->setIdBloque(null);
            }
        }

        return $this;
    }
}
