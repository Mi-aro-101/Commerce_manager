<?php

namespace App\Entity;

use App\Repository\DomaineRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DomaineRepository::class)]
class Domaine
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_domaine = null;

    #[ORM\Column(length: 30)]
    private ?string $des_domaine = null;

    #[ORM\OneToMany(mappedBy: 'domaine', targetEntity: CVRequirements::class)]
    private Collection $cVRequirements;

    #[ORM\OneToMany(mappedBy: 'domaine', targetEntity: CVCandidat::class)]
    private Collection $cVCandidats;

    public function __construct()
    {
        $this->cVRequirements = new ArrayCollection();
        $this->cVCandidats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdDomaine(): ?int
    {
        return $this->id_domaine;
    }

    public function setIdDomaine(int $id_domaine): static
    {
        $this->id_domaine = $id_domaine;

        return $this;
    }

    public function getDesDomaine(): ?string
    {
        return $this->des_domaine;
    }

    public function setDesDomaine(string $des_domaine): static
    {
        $this->des_domaine = $des_domaine;

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
            $cVRequirement->setDomaine($this);
        }

        return $this;
    }

    public function removeCVRequirement(CVRequirements $cVRequirement): static
    {
        if ($this->cVRequirements->removeElement($cVRequirement)) {
            // set the owning side to null (unless already changed)
            if ($cVRequirement->getDomaine() === $this) {
                $cVRequirement->setDomaine(null);
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
            $cVCandidat->setDomaine($this);
        }

        return $this;
    }

    public function removeCVCandidat(CVCandidat $cVCandidat): static
    {
        if ($this->cVCandidats->removeElement($cVCandidat)) {
            // set the owning side to null (unless already changed)
            if ($cVCandidat->getDomaine() === $this) {
                $cVCandidat->setDomaine(null);
            }
        }

        return $this;
    }
}
