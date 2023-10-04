<?php

namespace App\Entity;

use App\Repository\MatrimonialeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatrimonialeRepository::class)]
class Matrimoniale
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_matrimoniale = null;

    #[ORM\Column(length: 20)]
    private ?string $des_matrimoniale = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMatrimoniale(): ?int
    {
        return $this->id_matrimoniale;
    }

    public function setIdMatrimoniale(int $id_matrimoniale): static
    {
        $this->id_matrimoniale = $id_matrimoniale;

        return $this;
    }

    public function getDesMatrimoniale(): ?string
    {
        return $this->des_matrimoniale;
    }

    public function setDesMatrimoniale(string $des_matrimoniale): static
    {
        $this->des_matrimoniale = $des_matrimoniale;

        return $this;
    }
}
