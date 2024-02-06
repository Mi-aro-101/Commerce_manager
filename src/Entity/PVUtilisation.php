<?php

namespace App\Entity;

use App\Repository\PVUtilisationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PVUtilisationRepository::class)]
class PVUtilisation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Immobilisation $immobilisation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $firstUtilisation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImmobilisation(): ?Immobilisation
    {
        return $this->immobilisation;
    }

    public function setImmobilisation(?Immobilisation $immobilisation): static
    {
        $this->immobilisation = $immobilisation;

        return $this;
    }

    public function getFirstUtilisation(): ?\DateTimeInterface
    {
        return $this->firstUtilisation;
    }

    public function setFirstUtilisation(\DateTimeInterface $firstUtilisation): static
    {
        $this->firstUtilisation = $firstUtilisation;

        return $this;
    }
}
