<?php

namespace App\Entity;

use App\Repository\ImmobilisationDetailsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImmobilisationDetailsRepository::class)]
class ImmobilisationDetails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Immobilisation $immobilisation = null;

    // #[ORM\ManyToOne]
    // #[ORM\JoinColumn(nullable: false)]
    // private ?Service $service = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_sortie = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?EtatReception $etatReception = null;

  

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

    // public function getService(): ?Service
    // {
    //     return $this->service;
    // }

    // public function setService(?Service $service): static
    // {
    //     $this->service = $service;

    //     return $this;
    // }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->date_sortie;
    }

    public function setDateSortie(\DateTimeInterface $date_sortie): static
    {
        $this->date_sortie = $date_sortie;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getEtatReception(): ?EtatReception
    {
        return $this->etatReception;
    }

    public function setEtatReception(?EtatReception $etatReception): static
    {
        $this->etatReception = $etatReception;

        return $this;
    }

  
}
