<?php

namespace App\Entity;

use App\Repository\AdresseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdresseRepository::class)]
class Adresse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_adresse = null;

    #[ORM\Column(length: 40)]
    private ?string $des_adresse = null;

    #[ORM\Column]
    private ?int $niv_adresse = null;

    public function getId(): ?int
    {
        return $this->id_adresse;
    }

    public function getDesAdresse(): ?string
    {
        return $this->des_adresse;
    }

    public function setDesAdresse(string $des_adresse): static
    {
        $this->des_adresse = $des_adresse;

        return $this;
    }

    public function getNivAdresse(): ?int
    {
        return $this->niv_adresse;
    }

    public function setNivAdresse(int $niv_adresse): static
    {
        $this->niv_adresse = $niv_adresse;

        return $this;
    }
}
