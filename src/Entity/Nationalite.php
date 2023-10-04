<?php

namespace App\Entity;

use App\Repository\NationaliteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NationaliteRepository::class)]
class Nationalite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_nationalite = null;

    #[ORM\Column(length: 20)]
    private ?string $des_nationalite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdNationalite(): ?int
    {
        return $this->id_nationalite;
    }

    public function setIdNationalite(int $id_nationalite): static
    {
        $this->id_nationalite = $id_nationalite;

        return $this;
    }

    public function getDesNationalite(): ?string
    {
        return $this->des_nationalite;
    }

    public function setDesNationalite(string $des_nationalite): static
    {
        $this->des_nationalite = $des_nationalite;

        return $this;
    }
}
