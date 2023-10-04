<?php

namespace App\Entity;

use App\Repository\DiplomeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DiplomeRepository::class)]
class Diplome
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column]
    private ?int $id_diplome = null;

    #[ORM\Column(length: 30)]
    private ?string $des_diplome = null;

    #[ORM\Column]
    private ?int $niv_diplome = null;

    public function getId(): ?int
    {
        return $this->id_diplome;
    }

    public function getDesDiplome(): ?string
    {
        return $this->des_diplome;
    }

    public function setDesDiplome(string $des_diplome): static
    {
        $this->des_diplome = $des_diplome;

        return $this;
    }

    public function getNivDiplome(): ?int
    {
        return $this->niv_diplome;
    }

    public function setNivDiplome(int $niv_diplome): static
    {
        $this->niv_diplome = $niv_diplome;

        return $this;
    }
}
