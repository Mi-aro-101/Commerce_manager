<?php

namespace App\Entity;

use App\Repository\TestCandidatNoteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestCandidatNoteRepository::class)]
class TestCandidatNote
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'testCandidatNotes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?TestResultat $testResultat = null;

    #[ORM\Column]
    private ?int $note = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTestResultat(): ?TestResultat
    {
        return $this->testResultat;
    }

    public function setTestResultat(?TestResultat $testResultat): static
    {
        $this->testResultat = $testResultat;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): static
    {
        $this->note = $note;

        return $this;
    }
}
