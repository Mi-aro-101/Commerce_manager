<?php

namespace App\Entity;

use App\Repository\ExperienceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExperienceRepository::class)]
class Experience
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column]
    private ?int $id_xp = null;

    #[ORM\Column(length: 30)]
    private ?string $des_xp = null;

    #[ORM\Column]
    private ?int $niv_xp = null;

    public function getId(): ?int
    {
        return $this->id_xp;
    }

    public function getDesXp(): ?string
    {
        return $this->des_xp;
    }

    public function setDesXp(string $des_xp): static
    {
        $this->des_xp = $des_xp;

        return $this;
    }

    public function getNivXp(): ?int
    {
        return $this->niv_xp;
    }

    public function setNivXp(int $niv_xp): static
    {
        $this->niv_xp = $niv_xp;

        return $this;
    }
}
