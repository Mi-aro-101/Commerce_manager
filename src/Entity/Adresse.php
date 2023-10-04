<?php

namespace App\Entity;

use App\Repository\AdresseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdresseRepository::class)]
class Adresse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_adresse = null;

    #[ORM\Column(length: 40)]
    private ?string $des_adresse = null;

    #[ORM\Column]
    private ?int $niv_adresse = null;

    #[ORM\OneToMany(mappedBy: 'adresse', targetEntity: CVRequirements::class)]
    private Collection $cVRequirements;

    #[ORM\OneToMany(mappedBy: 'adresse', targetEntity: CVCandidat::class)]
    private Collection $cVCandidats;

    public function __construct()
    {
        $this->cVRequirements = new ArrayCollection();
        $this->cVCandidats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id_adresse;
    }

    public function getDesAdresse(): ?string
    {
        return $this->des_adresse;
    }

    public function setDesAdresse(string $des_adresse): static
    {
        $this->des_adresse = $des_adresse;

        return $this;
    }

    public function getNivAdresse(): ?int
    {
        return $this->niv_adresse;
    }

    public function setNivAdresse(int $niv_adresse): static
    {
        $this->niv_adresse = $niv_adresse;

        return $this;
    }

    /**
     * @return Collection<int, CVRequirements>
     */
    public function getCVRequirements(): Collection
    {
        return $this->cVRequirements;
    }

    public function addCVRequirement(CVRequirements $cVRequirement): static
    {
        if (!$this->cVRequirements->contains($cVRequirement)) {
            $this->cVRequirements->add($cVRequirement);
            $cVRequirement->setAdresse($this);
        }

        return $this;
    }

    public function removeCVRequirement(CVRequirements $cVRequirement): static
    {
        if ($this->cVRequirements->removeElement($cVRequirement)) {
            // set the owning side to null (unless already changed)
            if ($cVRequirement->getAdresse() === $this) {
                $cVRequirement->setAdresse(null);
            }
        }

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
            $cVCandidat->setAdresse($this);
        }

        return $this;
    }

    public function removeCVCandidat(CVCandidat $cVCandidat): static
    {
        if ($this->cVCandidats->removeElement($cVCandidat)) {
            // set the owning side to null (unless already changed)
            if ($cVCandidat->getAdresse() === $this) {
                $cVCandidat->setAdresse(null);
            }
        }

        return $this;
    }
}
