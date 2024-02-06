<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use App\Repository\BonReceptionRepository;
use App\Repository\EmployeRepository;
use App\Repository\ImmobilisationRepository;
use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $des_service = null;

    #[ORM\OneToMany(mappedBy: 'service', targetEntity: CVRequirements::class)]
    private Collection $cVRequirements;

    #[ORM\OneToMany(mappedBy: 'service', targetEntity: Employe::class)]
    private Collection $employes;

    #[ORM\OneToMany(mappedBy: 'service', targetEntity: DemandeDepartement::class)]
    private Collection $demandeDepartements;

    public function __construct()
    {
        $this->cVRequirements = new ArrayCollection();
        $this->employes = new ArrayCollection();
        $this->demandeDepartements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection<int, CVRequirements>
     */
    public function getCVRequirements(): Collection
    {
        return $this->cVRequirements;
    }

    public function addCVRequirement(CVRequirements $cVRequirement): static
    {
        if (!$this->cVRequirements->contains($cVRequirement)) {
            $this->cVRequirements->add($cVRequirement);
            $cVRequirement->setService($this);
        }

        return $this;
    }

    public function removeCVRequirement(CVRequirements $cVRequirement): static
    {
        if ($this->cVRequirements->removeElement($cVRequirement)) {
            // set the owning side to null (unless already changed)
            if ($cVRequirement->getService() === $this) {
                $cVRequirement->setService(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Employe>
     */
    public function getEmployes(): Collection
    {
        return $this->employes;
    }

    public function addEmploye(Employe $employe): static
    {
        if (!$this->employes->contains($employe)) {
            $this->employes->add($employe);
            $employe->setService($this);
        }

        return $this;
    }

    public function removeEmploye(Employe $employe): static
    {
        if ($this->employes->removeElement($employe)) {
            // set the owning side to null (unless already changed)
            if ($employe->getService() === $this) {
                $employe->setService(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, DemandeDepartement>
     */
    public function getDemandeDepartements(): Collection
    {
        return $this->demandeDepartements;
    }

    public function addDemandeDepartement(DemandeDepartement $demandeDepartement): static
    {
        if (!$this->demandeDepartements->contains($demandeDepartement)) {
            $this->demandeDepartements->add($demandeDepartement);
            $demandeDepartement->setService($this);
        }

        return $this;
    }

    public function removeDemandeDepartement(DemandeDepartement $demandeDepartement): static
    {
        if ($this->demandeDepartements->removeElement($demandeDepartement)) {
            // set the owning side to null (unless already changed)
            if ($demandeDepartement->getService() === $this) {
                $demandeDepartement->setService(null);
            }
        }

        return $this;
    }

    public function getImmobilisationDemandes(EntityManagerInterface $entityManager, ArticleRepository $articleRepository, BonReceptionRepository $bonReceptionRepository) : Collection
    {
        $connextion = $entityManager->getConnection();
        $response = new ArrayCollection();

        $articlesAsString = $this->convertDemandeArticleToString();

        $query = "SELECT * FROM v_immobilisation_traite where article_id in ('$articlesAsString') order by id";
            // echo $query;
        $statement = $connextion->prepare($query);
        $stmt = $statement->executeQuery();

        while($row = $stmt->fetchAssociative()){
            $immobilisation = new Immobilisation();

            $immobilisation->setId($row["id"]);
            $immobilisation->setArticle($articleRepository->find($row["article_id"]));
            $immobilisation->setBonReception($bonReceptionRepository->find($row["bon_reception_id"]));
            $immobilisation->setEtatAvance($row["etat_avance"]);
            $immobilisation->setTauxAmortissement($row["taux_amortissement"]);

            $response->add($immobilisation);
        }

        return $response;
    }

    public function getImmobilisationEnUtilisation(EntityManagerInterface $entityManager, EmployeRepository $employeRepository, ImmobilisationRepository $immobilisationRepository) : Collection
    {
        $connextion = $entityManager->getConnection();
        $response = new ArrayCollection();

        $articlesAsString = $this->convertDemandeArticleToString();

        $query = "SELECT * FROM v_immobilisation_permission where article_id in ('.$articlesAsString.') and etat=10 order by id";
        echo $query;
        $statement = $connextion->prepare($query);
        $stmt = $statement->executeQuery();

        while($row = $stmt->fetchAssociative()){
            $immobilisation = new ImmobilisationPermission();

            $immobilisation->setId($row["id"]);
            $immobilisation->setEmploye($employeRepository->find($row["employe_id"]));
            $immobilisation->setImmobilisation($immobilisationRepository->find($row["immobilisation_id"]));
            $immobilisation->setDateDebut($row["date_debut"]);
            $immobilisation->setDateFin($row["date_fin"]);
            $immobilisation->setEtat($row["etat"]);

            $response->add($immobilisation);
        }

        return $response;
    }

    public function convertDemandeArticleToString() : string
    {
        $response = "";

        foreach($this->getDemandeDepartements() as $demande){
            $id = $response.$demande->getArticle()->getId();
            // $response = $quote . $id . $quote;
            $response = $id."','";
        }

        $response = substr_replace($response ,"", -3);

        return $response;
    }
}
