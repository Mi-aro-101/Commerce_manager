<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $des_fournisseur = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?ModePaiment $mode_paiment = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesFournisseur(): ?string
    {
        return $this->des_fournisseur;
    }

    public function setDesFournisseur(string $des_fournisseur): static
    {
        $this->des_fournisseur = $des_fournisseur;

        return $this;
    }

    public function getModePaiment(): ?ModePaiment
    {
        return $this->mode_paiment;
    }

    public function setModePaiment(?ModePaiment $mode_paiment): static
    {
        $this->mode_paiment = $mode_paiment;

        return $this;
    }
}
