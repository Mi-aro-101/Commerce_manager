<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column]
    private ?int $id_service = null;

    #[ORM\Column(length: 50)]
    private ?string $des_service = null;

    public function getId(): ?int
    {
        return $this->id_service;
    }

    public function getDesService(): ?string
    {
        return $this->des_service;
    }

    public function setDesService(string $des_service): static
    {
        $this->des_service = $des_service;

        return $this;
    }
}
