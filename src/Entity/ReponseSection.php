<?php

namespace App\Entity;

use App\Repository\ReponseSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReponseSectionRepository::class)]
class ReponseSection
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'reponseSections')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Section $section = null;

    #[ORM\Column(length: 200)]
    private ?string $des_reponse = null;

    #[ORM\Column]
    private ?bool $is_true = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSection(): ?Section
    {
        return $this->section;
    }

    public function setSection(?Section $section): static
    {
        $this->section = $section;

        return $this;
    }

    public function getDesReponse(): ?string
    {
        return $this->des_reponse;
    }

    public function setDesReponse(string $des_reponse): static
    {
        $this->des_reponse = $des_reponse;

        return $this;
    }

    public function isIsTrue(): ?bool
    {
        return $this->is_true;
    }

    public function setIsTrue(bool $is_true): static
    {
        $this->is_true = $is_true;

        return $this;
    }
}
