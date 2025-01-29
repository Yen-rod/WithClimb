<?php

namespace App\Entity;

use App\Repository\ViasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ViasRepository::class)]
class Vias
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $gradoDificultad = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descripcion = null;

    #[ORM\Column(length: 100)]
    private string $fotoPrincipal;

    #[ORM\Column(nullable: true)]
    private ?int $totalAscensos = null;


    #[ORM\ManyToOne(inversedBy: 'vias')]
    private ?Bloques $idBloque = null;

    /**
     * @var Collection<int, Ascensos>
     */
    #[ORM\OneToMany(targetEntity: Ascensos::class, mappedBy: 'idVia')]
    private Collection $ascensos;

    /**
     * @var Collection<int, Comentarios>
     */
    #[ORM\OneToMany(targetEntity: Comentarios::class, mappedBy: 'vias')]
    private Collection $comentarios;

    /**
     * @var Collection<int, Fotos>
     */
    #[ORM\OneToMany(targetEntity: Fotos::class, mappedBy: 'vias')]
    private Collection $fotos;


    public function __construct()
    {
        $this->comentarios = new ArrayCollection();
        $this->fotos = new ArrayCollection();
        $this->ascensos = new ArrayCollection();
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

    public function getGradoDificultad(): ?string
    {
        return $this->gradoDificultad;
    }

    public function setGradoDificultad(?string $gradoDificultad): static
    {
        $this->gradoDificultad = $gradoDificultad;

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
        return $this->ascensos->count();
    }

    public function setTotalAscensos(?int $totalAscensos): static
    {
        $this->totalAscensos = $totalAscensos;

        return $this;
    }



    public function getIdBloque(): ?Bloques
    {
        return $this->idBloque;
    }

    public function setIdBloque(?Bloques $idBloque): static
    {
        $this->idBloque = $idBloque;

        return $this;
    }

    /**
     * @return Collection<int, Comentarios>
     */
    public function getComentarios(): Collection
    {
        return $this->comentarios;
    }

    public function addComentario(Comentarios $comentario): static
    {
        if (!$this->comentarios->contains($comentario)) {
            $this->comentarios->add($comentario);
            $comentario->setVias($this);
        }

        return $this;
    }

    public function removeComentario(Comentarios $comentario): static
    {
        if ($this->comentarios->removeElement($comentario)) {
            // set the owning side to null (unless already changed)
            if ($comentario->getVias() === $this) {
                $comentario->setVias(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Fotos>
     */
    public function getFotos(): Collection
    {
        return $this->fotos;
    }

    public function addFoto(Fotos $fotos): static
    {
        if (!$this->fotos->contains($fotos)) {
            $this->fotos->add($fotos);
            $fotos->setVias($this);
        }

        return $this;
    }

    public function removeFoto(Fotos $fotos): static
    {
        if ($this->fotos->removeElement($fotos)) {
            // set the owning side to null (unless already changed)
            if ($fotos->getVias() === $this) {
                $fotos->setVias(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Ascensos>
     */
    public function getAscensos(): Collection
    {
        return $this->ascensos;
    }

    public function addAscenso(Ascensos $ascenso): static
    {
        if (!$this->ascensos->contains($ascenso)) {
            $this->ascensos->add($ascenso);
            $ascenso->setIdVia($this);
        }

        return $this;
    }

    public function removeAscenso(Ascensos $ascenso): static
    {
        if ($this->ascensos->removeElement($ascenso)) {
            // set the owning side to null (unless already changed)
            if ($ascenso->getIdVia() === $this) {
                $ascenso->setIdVia(null);
            }
        }

        return $this;
    }

    public function getFotoPrincipal(): string
    {
        return $this->fotoPrincipal;
    }

    public function setFotoPrincipal(string $fotoPrincipal): void
    {
        $this->fotoPrincipal = $fotoPrincipal;
    }
}
