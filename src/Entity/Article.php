<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $des_article = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesArticle(): ?string
    {
        return $this->des_article;
    }

    public function setDesArticle(string $des_article): static
    {
        $this->des_article = $des_article;

        return $this;
    }
}
