<?php

namespace App\Entity;

use App\Repository\UsuariosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UsuariosRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
class Usuarios implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 55)]
    private ?string $nombre = null;
    #[ORM\Column(length: 1)]
    private string $genero = '';
    #[ORM\Column(length: 255)]
    private string $email = '';
    #[ORM\Column(length: 255)]
    private string $password = '';
    #[ORM\Column]
    private array $roles = [];

    #[ORM\Column(nullable: true)]
    private ?string $avatar = '';
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fechaRegistro = null;

    #[ORM\Column(nullable: true)]
    private ?int $totalAscensos = null;

    /**
     * @var Collection<int, Ascensos>
     */
    #[ORM\OneToMany(targetEntity: Ascensos::class, mappedBy: 'idUsuario')]
    private Collection $ascensos;

    /**
     * @var Collection<int, Comentarios>
     */
    #[ORM\OneToMany(targetEntity: Comentarios::class, mappedBy: 'idUsuario')]
    private Collection $comentarios;

    /**
     * @var Collection<int, Fotos>
     */
    #[ORM\OneToMany(targetEntity: Fotos::class, mappedBy: 'idUsuario')]
    private Collection $fotos;

    #[ORM\Column]
    private ?bool $verificado;


    public function __construct()
    {
        $this->ascensos = new ArrayCollection();
        $this->comentarios = new ArrayCollection();
        $this->fotos = new ArrayCollection();

        $this->fechaRegistro = new \DateTime();
        $this->verificado = false;

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

    
    public function getGenero(): string
    {
        return $this->genero;
    }

    public function setGenero(string $genero): static
    {
        $this->genero = $genero;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    
    public function getFechaRegistro(): ?\DateTimeInterface
    {
        return $this->fechaRegistro;
    }

    public function setFechaRegistro(\DateTimeInterface $fechaRegistro): static
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }


    public function getTotalAscensos(): int
    {
        return $this->totalAscensos ?? 0;
    }

    public function setTotalAscensos(int $totalAscensos): static
    {
        $this->totalAscensos = $totalAscensos;

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
            $ascenso->setIdUsuario($this);
            

        }

        return $this;
    }

    public function removeAscenso(Ascensos $ascenso): static
    {
        if ($this->ascensos->removeElement($ascenso)) {
            // set the owning side to null (unless already changed)
            if ($ascenso->getIdUsuario() === $this) {
                $ascenso->setIdUsuario(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Comentarios>
     */
    public function getComentarios(): Collection
    {
        return $this->comentarios;
    }

    /**
     * @return Collection<int, Fotos>
     */
    public function getFotos(): Collection
    {
        return $this->fotos;
    }

    public function addFoto(Fotos $foto): static
    {
        if (!$this->fotos->contains($foto)) {
            $this->fotos->add($foto);
            $foto->setIdUsuario($this);
        }

        return $this;
    }

    public function removeFoto(Fotos $foto): static
    {
        if ($this->fotos->removeElement($foto)) {
            // set the owning side to null (unless already changed)
            if ($foto->getIdUsuario() === $this) {
                $foto->setIdUsuario(null);
            }
        }

        return $this;
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }
      
    
    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function verificado(): ?bool
    {
        return $this->verificado;
    }

    public function setVerificado(bool $verificado): static
    {
        $this->verificado = $verificado;

        return $this;
    }

    public function getAvatar(): string
    {
        return $this->avatar ?? 'default.png';
    }

    public function setAvatar(?string $avatar): void
    {
        $this->avatar = $avatar ?? 'default.png';
    }

    public function hasAvatar(): bool
    {
        return !empty($this->avatar);
    }


}
