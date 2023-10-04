<?php

namespace App\Entity;

use App\Repository\MatrimonialeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatrimonialeRepository::class)]
class Matrimoniale
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_matrimoniale = null;

    #[ORM\Column(length: 20)]
    private ?string $des_matrimoniale = null;

    #[ORM\OneToMany(mappedBy: 'matrimoniale', targetEntity: CVRequirements::class)]
    private Collection $cVRequirements;

    #[ORM\OneToMany(mappedBy: 'Matrimoniale', targetEntity: CVCandidat::class)]
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

    public function getIdMatrimoniale(): ?int
    {
        return $this->id_matrimoniale;
    }

    public function setIdMatrimoniale(int $id_matrimoniale): static
    {
        $this->id_matrimoniale = $id_matrimoniale;

        return $this;
    }

    public function getDesMatrimoniale(): ?string
    {
        return $this->des_matrimoniale;
    }

    public function setDesMatrimoniale(string $des_matrimoniale): static
    {
        $this->des_matrimoniale = $des_matrimoniale;

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
            $cVRequirement->setMatrimoniale($this);
        }

        return $this;
    }

    public function removeCVRequirement(CVRequirements $cVRequirement): static
    {
        if ($this->cVRequirements->removeElement($cVRequirement)) {
            // set the owning side to null (unless already changed)
            if ($cVRequirement->getMatrimoniale() === $this) {
                $cVRequirement->setMatrimoniale(null);
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
            $cVCandidat->setMatrimoniale($this);
        }

        return $this;
    }

    public function removeCVCandidat(CVCandidat $cVCandidat): static
    {
        if ($this->cVCandidats->removeElement($cVCandidat)) {
            // set the owning side to null (unless already changed)
            if ($cVCandidat->getMatrimoniale() === $this) {
                $cVCandidat->setMatrimoniale(null);
            }
        }

        return $this;
    }
}
