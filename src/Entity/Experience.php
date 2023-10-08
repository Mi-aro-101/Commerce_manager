<?php

namespace App\Entity;

use App\Repository\ExperienceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExperienceRepository::class)]
class Experience
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $des_xp = null;

    #[ORM\Column]
    private ?int $niv_xp = null;

    #[ORM\OneToMany(mappedBy: 'experience', targetEntity: CVRequirements::class)]
    private Collection $cVRequirements;

    #[ORM\OneToMany(mappedBy: 'experience', targetEntity: CVCandidat::class)]
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

    public function getDesXp(): ?string
    {
        return $this->des_xp;
    }

    public function setDesXp(string $des_xp): static
    {
        $this->des_xp = $des_xp;

        return $this;
    }

    public function getNivXp(): ?int
    {
        return $this->niv_xp;
    }

    public function setNivXp(int $niv_xp): static
    {
        $this->niv_xp = $niv_xp;

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
            $cVRequirement->setExperience($this);
        }

        return $this;
    }

    public function removeCVRequirement(CVRequirements $cVRequirement): static
    {
        if ($this->cVRequirements->removeElement($cVRequirement)) {
            // set the owning side to null (unless already changed)
            if ($cVRequirement->getExperience() === $this) {
                $cVRequirement->setExperience(null);
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
            $cVCandidat->setExperience($this);
        }

        return $this;
    }

    public function removeCVCandidat(CVCandidat $cVCandidat): static
    {
        if ($this->cVCandidats->removeElement($cVCandidat)) {
            // set the owning side to null (unless already changed)
            if ($cVCandidat->getExperience() === $this) {
                $cVCandidat->setExperience(null);
            }
        }

        return $this;
    }
}
