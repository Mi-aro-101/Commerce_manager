<?php

namespace App\Entity;

use App\Repository\NationaliteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NationaliteRepository::class)]
class Nationalite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $des_nationalite = null;

    #[ORM\OneToMany(mappedBy: 'nationalite', targetEntity: CVRequirements::class)]
    private Collection $cVRequirements;

    #[ORM\OneToMany(mappedBy: 'Nationalite', targetEntity: CVCandidat::class)]
    private Collection $cVCandidats;

    #[ORM\Column(length: 2, nullable:true)]
    private ?string $code_nationalite = null;

    public function __construct()
    {
        $this->cVRequirements = new ArrayCollection();
        $this->cVCandidats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesNationalite(): ?string
    {
        return $this->des_nationalite;
    }

    public function setDesNationalite(string $des_nationalite): static
    {
        $this->des_nationalite = $des_nationalite;

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
            $cVRequirement->setNationalite($this);
        }

        return $this;
    }

    public function removeCVRequirement(CVRequirements $cVRequirement): static
    {
        if ($this->cVRequirements->removeElement($cVRequirement)) {
            // set the owning side to null (unless already changed)
            if ($cVRequirement->getNationalite() === $this) {
                $cVRequirement->setNationalite(null);
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
            $cVCandidat->setNationalite($this);
        }

        return $this;
    }

    public function removeCVCandidat(CVCandidat $cVCandidat): static
    {
        if ($this->cVCandidats->removeElement($cVCandidat)) {
            // set the owning side to null (unless already changed)
            if ($cVCandidat->getNationalite() === $this) {
                $cVCandidat->setNationalite(null);
            }
        }

        return $this;
    }

    public function getCodeNationalite(): ?string
    {
        return $this->code_nationalite;
    }

    public function setCodeNationalite(string $code_nationalite): static
    {
        $this->code_nationalite = $code_nationalite;

        return $this;
    }
}
