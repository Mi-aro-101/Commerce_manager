<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[UniqueEntity(fields: ['mail'], message: 'There is already an account with this mail')]
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $mail = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $mot_de_passe = null;

    #[ORM\Column(length: 30)]
    private ?string $nom_utilisateur = null;

    #[ORM\Column(length: 30)]
    private ?string $prenom_utilisateur = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_de_naissance = null;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: CVCandidat::class)]
    private Collection $cVCandidats;

    #[ORM\ManyToOne(inversedBy: 'utilisateur')]
    private ?CvCandidatNote $cvCandidatNote = null;

    #[ORM\OneToOne(mappedBy: 'utilisateur', cascade: ['persist', 'remove'])]
    private ?Employe $employe = null;

    public function __construct()
    {
        $this->cVCandidats = new ArrayCollection();
    }

    #[ORM\ManyToMany(targetEntity: CVCandidat::class, mappedBy: 'utilisateur')]
   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->mail;
    }

    /**
     * @see UserInterface
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
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->mot_de_passe;
    }

    public function setPassword(string $password): static
    {
        $this->mot_de_passe = $password;

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

    public function getNomUtilisateur(): ?string
    {
        return $this->nom_utilisateur;
    }

    public function setNomUtilisateur(string $nom_utilisateur): static
    {
        $this->nom_utilisateur = $nom_utilisateur;

        return $this;
    }

    public function getPrenomUtilisateur(): ?string
    {
        return $this->prenom_utilisateur;
    }

    public function setPrenomUtilisateur(string $prenom_utilisateur): static
    {
        $this->prenom_utilisateur = $prenom_utilisateur;

        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->date_de_naissance;
    }

    public function setDateDeNaissance(\DateTimeInterface $date_de_naissance): static
    {
        $this->date_de_naissance = $date_de_naissance;

        return $this;
    }

    /**
     * @return Collection<int, CVCandidat>
     */
    public function getCVCandidats(): Collection
    {
        return $this->cVCandidats;
    }

    public function addCVCandidat(CVCandidat $cVCandidat): static
    {
        if (!$this->cVCandidats->contains($cVCandidat)) {
            $this->cVCandidats->add($cVCandidat);
            $cVCandidat->setUtilisateur($this);
        }

        return $this;
    }

    public function removeCVCandidat(CVCandidat $cVCandidat): static
    {
        if ($this->cVCandidats->removeElement($cVCandidat)) {
            // set the owning side to null (unless already changed)
            if ($cVCandidat->getUtilisateur() === $this) {
                $cVCandidat->setUtilisateur(null);
            }
        }

        return $this;
    }

    public function getCvCandidatNote(): ?CvCandidatNote
    {
        return $this->cvCandidatNote;
    }

    public function setCvCandidatNote(?CvCandidatNote $cvCandidatNote): static
    {
        $this->cvCandidatNote = $cvCandidatNote;

        return $this;
    }

    public function getEmploye(): ?Employe
    {
        return $this->employe;
    }

    public function setEmploye(Employe $employe): static
    {
        // set the owning side of the relation if necessary
        if ($employe->getUtilisateur() !== $this) {
            $employe->setUtilisateur($this);
        }

        $this->employe = $employe;

        return $this;
    }

}
