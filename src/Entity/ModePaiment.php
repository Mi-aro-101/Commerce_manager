<?php

namespace App\Entity;

use App\Repository\ModePaimentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModePaimentRepository::class)]
class ModePaiment
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $des_modepaiment = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesModepaiment(): ?string
    {
        return $this->des_modepaiment;
    }

    public function setDesModepaiment(string $des_modepaiment): static
    {
        $this->des_modepaiment = $des_modepaiment;

        return $this;
    }
}
