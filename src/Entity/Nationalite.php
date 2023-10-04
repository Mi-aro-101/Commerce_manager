<?php

namespace App\Entity;

use App\Repository\NationaliteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NationaliteRepository::class)]
class Nationalite
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $des_nationalite = null;

    public function getId(): ?int
    {
        return $this->id;
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
