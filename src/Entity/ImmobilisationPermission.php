<?php

namespace App\Entity;

use App\Repository\ImmobilisationPermissionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImmobilisationPermissionRepository::class)]
class ImmobilisationPermission
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'immobilisationPermissions')]
    private ?Immobilisation $immobilisation = null;

    #[ORM\ManyToOne(inversedBy: 'immobilisationPermissions')]
    private ?Employe $employe = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private $dateFin = null;

    #[ORM\Column]
    private ?int $etat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id) : static
    {
        $this->id = $id;

        return $this;
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

    public function getEmploye(): ?Employe
    {
        return $this->employe;
    }

    public function setEmploye(?Employe $employe): static
    {
        $this->employe = $employe;

        return $this;
    }

    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    public function setDateDebut($dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function setDateFin($dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(int $etat): static
    {
        $this->etat = $etat;

        return $this;
    }
}
