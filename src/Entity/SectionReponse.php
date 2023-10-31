<?php

namespace App\Entity;

use App\Repository\SectionReponseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SectionReponseRepository::class)]
class SectionReponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?ReponseSection $reponse = null;

    #[ORM\ManyToOne(inversedBy: 'sectionReponses', cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?TestResultat $test_resultat = null;

    // #[ORM\ManyToOne(inversedBy: 'sectionReponses', targetEntity: Section::class)]
    // #[ORM\JoinColumn(nullable: false)]
    // private ?Section $section = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReponse(): ?ReponseSection
    {
        return $this->reponse;
    }

    public function setReponse(?ReponseSection $reponse): static
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function getTestResultat(): ?TestResultat
    {
        return $this->test_resultat;
    }

    public function setTestResultat(?TestResultat $test_resultat): static
    {
        $this->test_resultat = $test_resultat;

        return $this;
    }

    // public function getSection(): ?Section
    // {
    //     return $this->section;
    // }

    // public function setSection(?Section $section): static
    // {
    //     $this->section = $section;

    //     return $this;
    // }

}
