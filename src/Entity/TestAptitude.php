<?php

namespace App\Entity;

use App\Repository\TestAptitudeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestAptitudeRepository::class)]
class TestAptitude
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'testAptitude', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?CVRequirements $cv_requirements = null;

    #[ORM\OneToMany(mappedBy: 'test_aptitude', targetEntity: Section::class, cascade:["persist", "remove"])]
    private Collection $sections;

    #[ORM\OneToMany(mappedBy: 'test_aptitude', targetEntity: TestResultat::class)]
    private Collection $testResultats;

    public function __construct()
    {
        $this->sections = new ArrayCollection();
        $this->testResultats = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCvRequirements(): ?CVRequirements
    {
        return $this->cv_requirements;
    }

    public function setCvRequirements(CVRequirements $cv_requirements): static
    {
        $this->cv_requirements = $cv_requirements;

        return $this;
    }

    /**
     * @return Collection<int, Section>
     */
    public function getSections(): Collection
    {
        return $this->sections;
    }

    public function addSection(Section $section): static
    {
        if (!$this->sections->contains($section)) {
            $this->sections->add($section);
            $section->setTestAptitude($this);
        }

        return $this;
    }

    public function removeSection(Section $section): static
    {
        if ($this->sections->removeElement($section)) {
            // set the owning side to null (unless already changed)
            if ($section->getTestAptitude() === $this) {
                $section->setTestAptitude(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TestResultat>
     */
    public function getTestResultats(): Collection
    {
        return $this->testResultats;
    }

    public function addTestResultat(TestResultat $testResultat): static
    {
        if (!$this->testResultats->contains($testResultat)) {
            $this->testResultats->add($testResultat);
            // $testResultat->setTestAptitude($this);
        }

        return $this;
    }

    public function removeTestResultat(TestResultat $testResultat): static
    {
        if ($this->testResultats->removeElement($testResultat)) {
            // set the owning side to null (unless already changed)
            // if ($testResultat->getTestAptitude() === $this) {
            //     $testResultat->setTestAptitude(null);
            // }
        }

        return $this;
    }

    
}
