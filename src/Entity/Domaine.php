<?php

namespace App\Entity;

use App\Repository\DomaineRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DomaineRepository::class)]
class Domaine
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column]
    private ?int $id_domaine = null;

    #[ORM\Column(length: 30)]
    private ?string $des_domaine = null;

    public function getId(): ?int
    {
        return $this->id_domaine;
    }

    public function getDesDomaine(): ?string
    {
        return $this->des_domaine;
    }

    public function setDesDomaine(string $des_domaine): static
    {
        $this->des_domaine = $des_domaine;

        return $this;
    }
}
