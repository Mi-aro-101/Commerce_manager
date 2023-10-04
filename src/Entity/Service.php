<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column]
    private ?int $id_service = null;

    #[ORM\Column(length: 50)]
    private ?string $des_service = null;

    #[ORM\OneToMany(mappedBy: 'service', targetEntity: CVRequirements::class)]
    private Collection $cVRequirements;

    public function __construct()
    {
        $this->cVRequirements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id_service;
    }

    public function getDesService(): ?string
    {
        return $this->des_service;
    }

    public function setDesService(string $des_service): static
    {
        $this->des_service = $des_service;

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
            $cVRequirement->setService($this);
        }

        return $this;
    }

    public function removeCVRequirement(CVRequirements $cVRequirement): static
    {
        if ($this->cVRequirements->removeElement($cVRequirement)) {
            // set the owning side to null (unless already changed)
            if ($cVRequirement->getService() === $this) {
                $cVRequirement->setService(null);
            }
        }

        return $this;
    }
}
