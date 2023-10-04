<?php

namespace App\Entity;

use App\Repository\CVRequirementsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CVRequirementsRepository::class)]
class CVRequirements
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'cVRequirements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Service $service = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_envoie = null;

    #[ORM\Column(length: 50)]
    private ?string $poste_description = null;

    #[ORM\ManyToOne(inversedBy: 'cVRequirements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Domaine $domaine = null;

    #[ORM\ManyToOne(inversedBy: 'cVRequirements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Diplome $diplome = null;

    #[ORM\Column]
    private ?int $coef_diplome = null;

    #[ORM\ManyToOne(inversedBy: 'cVRequirements')]
    #[ORM\JoinColumn(nullable: false)]

    private ?Experience $experience = null;

    #[ORM\Column]
    private ?int $coef_xp = null;

    #[ORM\ManyToOne(inversedBy: 'cVRequirements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Sexe $sexe = null;

    #[ORM\ManyToOne(inversedBy: 'cVRequirements')]
    #[ORM\JoinColumn(nullable: false)]

    private ?Nationalite $nationalite = null;

    #[ORM\ManyToOne(inversedBy: 'cVRequirements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Adresse $adresse = null;

    #[ORM\Column]
    private ?int $coef_adresse = null;

    #[ORM\ManyToOne(inversedBy: 'cVRequirements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Matrimoniale $matrimoniale = null;

    #[ORM\OneToMany(mappedBy: 'cvrequirements', targetEntity: CVCandidat::class)]
    private Collection $cVCandidats;

    public function __construct()
    {
        $this->cVCandidats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): static
    {
        $this->service = $service;

        return $this;
    }

    public function getDateEnvoie(): ?\DateTimeInterface
    {
        return $this->date_envoie;
    }

    public function setDateEnvoie(\DateTimeInterface $date_envoie): static
    {
        $this->date_envoie = $date_envoie;

        return $this;
    }

    public function getPosteDescription(): ?string
    {
        return $this->poste_description;
    }

    public function setPosteDescription(string $poste_description): static
    {
        $this->poste_description = $poste_description;

        return $this;
    }

    public function getDomaine(): ?Domaine
    {
        return $this->domaine;
    }

    public function setDomaine(?Domaine $domaine): static
    {
        $this->domaine = $domaine;

        return $this;
    }

    public function getDiplome(): ?Diplome
    {
        return $this->diplome;
    }

    public function setDiplome(?Diplome $diplome): static
    {
        $this->diplome = $diplome;

        return $this;
    }

    public function getCoefDiplome(): ?int
    {
        return $this->coef_diplome;
    }

    public function setCoefDiplome(int $coef_diplome): static
    {
        $this->coef_diplome = $coef_diplome;

        return $this;
    }

    public function getExperience(): ?Experience
    {
        return $this->experience;
    }

    public function setExperience(?Experience $experience): static
    {
        $this->experience = $experience;

        return $this;
    }

    public function getCoefXp(): ?int
    {
        return $this->coef_xp;
    }

    public function setCoefXp(int $coef_xp): static
    {
        $this->coef_xp = $coef_xp;

        return $this;
    }

    public function getSexe(): ?Sexe
    {
        return $this->sexe;
    }

    public function setSexe(?Sexe $sexe): static
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getNationalite(): ?Nationalite
    {
        return $this->nationalite;
    }

    public function setNationalite(?Nationalite $nationalite): static
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getAdresse(): ?Adresse
    {
        return $this->adresse;
    }

    public function setAdresse(?Adresse $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCoefAdresse(): ?int
    {
        return $this->coef_adresse;
    }

    public function setCoefAdresse(int $coef_adresse): static
    {
        $this->coef_adresse = $coef_adresse;

        return $this;
    }

    public function getMatrimoniale(): ?Matrimoniale
    {
        return $this->matrimoniale;
    }

    public function setMatrimoniale(?Matrimoniale $matrimoniale): static
    {
        $this->matrimoniale = $matrimoniale;

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
            $cVCandidat->setCvrequirements($this);
        }

        return $this;
    }

    public function removeCVCandidat(CVCandidat $cVCandidat): static
    {
        if ($this->cVCandidats->removeElement($cVCandidat)) {
            // set the owning side to null (unless already changed)
            if ($cVCandidat->getCvrequirements() === $this) {
                $cVCandidat->setCvrequirements(null);
            }
        }

        return $this;
    }
}
