<?php

namespace App\Entity;

use App\Repository\SexeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SexeRepository::class)]
class Sexe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_sexe = null;

    #[ORM\Column(length: 10)]
    private ?string $des_sexe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSexe(): ?int
    {
        return $this->id_sexe;
    }

    public function setIdSexe(int $id_sexe): static
    {
        $this->id_sexe = $id_sexe;

        return $this;
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
