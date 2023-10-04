<?php

namespace App\Entity;

use App\Repository\MatrimonialeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatrimonialeRepository::class)]
class Matrimoniale
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column]
    private ?int $id_matrimoniale = null;

    #[ORM\Column(length: 20)]
    private ?string $des_matrimoniale = null;

    public function getId(): ?int
    {
        return $this->id_matrimoniale;
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
