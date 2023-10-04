<?php

namespace App\Entity;

use App\Repository\SexeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SexeRepository::class)]
class Sexe
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $des_sexe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesSexe(): ?string
    {
        return $this->des_sexe;
    }

    public function setDesSexe(string $des_sexe): static
    {
        $this->des_sexe = $des_sexe;
        return $this;
    }
}
