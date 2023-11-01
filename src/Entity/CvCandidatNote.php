<?php

namespace App\Entity;

use App\Repository\CvCandidatNoteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Cascade;

#[ORM\Entity(repositoryClass: CvCandidatNoteRepository::class)]
class CvCandidatNote
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?CVRequirements $cvrequirements = null;

    #[ORM\Column]
    private ?float $Note = null;

    #[ORM\ManyToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: true)]
    private ?Utilisateur $utilisateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCvrequirements(): ?CVRequirements
    {
        return $this->cvrequirements;
    }

    public function setCvrequirements(CVRequirements $cvrequirements): static
    {
        $this->cvrequirements = $cvrequirements;

        return $this;
    }

    public function getNote(): ?float
    {
        return $this->Note;
    }

    public function setNote(float $Note): static
    {
        $this->Note = $Note;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
}
