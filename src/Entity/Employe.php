<?php

namespace App\Entity;

use App\Repository\EmployeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Utilisateur;
use App\Repository\ImmobilisationRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;

#[ORM\Entity(repositoryClass: EmployeRepository::class)]
class Employe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'employe', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateur $utilisateur = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private $date_embauche = null;

    #[ORM\Column]
    private ?bool $cnaps = null;

    #[ORM\Column]
    private ?bool $osti = null;

    #[ORM\ManyToOne(targetEntity: self::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?self $superieur = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $salaire = null;

    #[ORM\ManyToMany(targetEntity: HistoriqueSalaire::class, mappedBy: 'employe')]
    private Collection $historiqueSalaires;

    #[ORM\OneToMany(mappedBy: 'employe', targetEntity: Conge::class)]
    private Collection $conges;

    private Collection $employes;

    #[ORM\Column]
    private ?int $statut = null;

    #[ORM\ManyToOne(inversedBy: 'employes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Service $service = null;

    #[ORM\Column(length: 100)]
    private ?string $poste = null;

    /**
     * Function that give the data of the fiche de paie 
     * of one employe
     * @return array of data
     */
    public function getFichePaie(){
        $data = [
            'name' => $this->getUtilisateur()->getNomUtilisateur(),
            'firstname' => $this->getUtilisateur()->getPrenomUtilisateur(),
            'fonction' => $this->getPoste(),
            'embauche' => $this->getDateEmbauche(),
            'salaire' => $this->getSalaire(),
            'journalier' => ($this->getSalaire())/30,
            'horaire' => ($this->getSalaire())/173.33,
            'indice' => $this->getIndice(),
            'trente' => $this->getIndice()/1.3,
            'quarante' => $this->getIndice()/1.4,
            'cinquante' => $this->getIndice()/1.5,
            'cent' => $this->getIndice()/2.0,
            'nuit' => $this->getIndice()/0.3,
            'cnaps' => $this->getMontantCnaps(),
            'osti' => $this->getMontantOsti()
        ];
        return $data;
    }

    /**
     * Return la somme a payer pour le cnaps selon le salaire
     */
    public function getMontantCnaps(){
        $cnaps = ($this->getSalaire())/100;
        if($this->getSalaire()>(250000*8)){
            $cnaps = (250000*8)/100;
        }
        return $cnaps;
    }

    /**
     * Return la somme a payer pour la retenue sanitaire selon le salaire
     */
    public function getMontantOsti(){
        $cnaps = ($this->getSalaire())/100;

        return $cnaps;
    }

    /**
     * indice de majoration
     * @return int indice de majoration
     */
    public function getIndice(){
        return (($this->getSalaire())/173.33)/1.334;
    }

    #[ORM\OneToMany(mappedBy: 'employe', targetEntity: HeureSuplementaire::class)]
    private Collection $heuresuplementaire;

    #[ORM\OneToMany(mappedBy: 'employe', targetEntity: ImmobilisationPermission::class)]
    private Collection $immobilisationPermissions;



    public function __construct()
    {
        $this->historiqueSalaires = new ArrayCollection();
        $this->conges = new ArrayCollection();
        $this->heuresuplementaire = new ArrayCollection();
        $this->immobilisationPermissions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id) : static
    {
        $this->id = $id;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getDateEmbauche()
    {
        return $this->date_embauche;
    }

    public function setDateEmbauche($date_embauche): static
    {
        $this->date_embauche = $date_embauche;

        return $this;
    }

    public function isCnaps(): ?bool
    {
        return $this->cnaps;
    }

    public function setCnaps(bool $cnaps): static
    {
        $this->cnaps = $cnaps;

        return $this;
    }

    public function isOsti(): ?bool
    {
        return $this->osti;
    }

    public function setOsti(bool $osti): static
    {
        $this->osti = $osti;

        return $this;
    }

    public function getSuperieur(): ?self
    {
        return $this->superieur;
    }

    public function setSuperieur(?self $superieur): static
    {
        $this->superieur = $superieur;

        return $this;
    }

    public function getSalaire(): ?string
    {
        return $this->salaire;
    }

    public function setSalaire(string $salaire): static
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * @return Collection<int, HistoriqueSalaire>
     */
    public function getHistoriqueSalaires(): Collection
    {
        return $this->historiqueSalaires;
    }

    public function addHistoriqueSalaire(HistoriqueSalaire $historiqueSalaire): static
    {
        if (!$this->historiqueSalaires->contains($historiqueSalaire)) {
            $this->historiqueSalaires->add($historiqueSalaire);
            $historiqueSalaire->addEmploye($this);
        }

        return $this;
    }

    public function removeHistoriqueSalaire(HistoriqueSalaire $historiqueSalaire): static
    {
        if ($this->historiqueSalaires->removeElement($historiqueSalaire)) {
            $historiqueSalaire->removeEmploye($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Conge>
     */
    public function getConges(): Collection
    {
        return $this->conges;
    }

    public function addConge(Conge $conge): static
    {
        if (!$this->conges->contains($conge)) {
            $this->conges->add($conge);
            $conge->setEmploye($this);
        }

        return $this;
    }

    public function removeConge(Conge $conge): static
    {
        if ($this->conges->removeElement($conge)) {
            // set the owning side to null (unless already changed)
            if ($conge->getEmploye() === $this) {
                $conge->setEmploye(null);
            }
        }

        return $this;
    }

    public function getManagerProperyvalue(): string
    {
        $result = "Pas de superieur";

        if($this->getSuperieur() != null){
            $result = $this->getSuperieur()->getUtilisateur()->getNomUtilisateur()." ".$this->getSuperieur()->getUtilisateur()->getPrenomUtilisateur();
        }

        return $result;
    }


    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(int $statut): static
    {
        $this->statut = $statut;
        return $this;
    }

    /**
     * @return Collection<int, HeureSuplementaire>
     */
    public function getHeuresuplementaire(): Collection
    {
        return $this->heuresuplementaire;
    }

    public function addHeuresuplementaire(HeureSuplementaire $heuresuplementaire): static
    {
        if (!$this->heuresuplementaire->contains($heuresuplementaire)) {
            $this->heuresuplementaire->add($heuresuplementaire);
            $heuresuplementaire->setEmploye($this);
        }


        return $this;
    }


    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): static
    {
        $this->service = $service;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(string $poste): static
    {
        $this->poste = $poste;

        return $this;
    }


    public function removeHeuresuplementaire(HeureSuplementaire $heuresuplementaire): static
    {
        if ($this->heuresuplementaire->removeElement($heuresuplementaire)) {
            // set the owning side to null (unless already changed)
            if ($heuresuplementaire->getEmploye() === $this) {
                $heuresuplementaire->setEmploye(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ImmobilisationPermission>
     */
    public function getImmobilisationPermissions(): Collection
    {
        return $this->immobilisationPermissions;
    }

    public function addImmobilisationPermission(ImmobilisationPermission $immobilisationPermission): static
    {
        if (!$this->immobilisationPermissions->contains($immobilisationPermission)) {
            $this->immobilisationPermissions->add($immobilisationPermission);
            $immobilisationPermission->setEmploye($this);
        }

        return $this;
    }

    public function removeImmobilisationPermission(ImmobilisationPermission $immobilisationPermission): static
    {
        if ($this->immobilisationPermissions->removeElement($immobilisationPermission)) {
            // set the owning side to null (unless already changed)
            if ($immobilisationPermission->getEmploye() === $this) {
                $immobilisationPermission->setEmploye(null);
            }
        }

        return $this;
    }

    public function getEmployes(EntityManagerInterface $entityManager, UtilisateurRepository $utilisateurRepository) : Collection
    {

        $response = new ArrayCollection();

        $connection = $entityManager->getConnection();
        $query = "SELECT * FROM employe WHERE superieur_id = ".$this->getId()." order by id";
        $statment = $connection->prepare($query);
        $stmt = $statment->executeQuery();

        while($row = $stmt->fetchAssociative()){

            $employe = new Employe();
            $employe->setId($row["id"]);
            $employe->setUtilisateur($utilisateurRepository->find($row["utilisateur_id"]));
            $employe->setDateEmbauche($row["date_embauche"]);
            $employe->setCnaps($row["cnaps"]);
            $employe->setOsti($row["osti"]);
            $employe->setSalaire($row["salaire"]);
            $employe->setService($this->getService());
            $employe->setStatut($row["statut"]);
            $employe->setPoste($row["poste"]);

            $response->add($employe);

        }

        return $response;
    }

    public function getDemandeImmobilisationEmployee(EntityManagerInterface $entityManager, ImmobilisationRepository $immobilisationRepository, UtilisateurRepository $utilisateurRepository, EmployeRepository $employeRepository) : Collection
    {
        $response = new ArrayCollection();
        $connection = $entityManager->getConnection();
        $employes = $this->getEmployes($entityManager, $utilisateurRepository);
        $i = 0;
        $employeIdAsString = $this->convertDemandeEmployeToString($employes);
        $query = "SELECT * FROM immobilisation_permission WHERE employe_id in (".$employeIdAsString.") Order by employe_id";
        $statment = $connection->prepare($query);
        $stmt = $statment->executeQuery();
        while($row = $stmt->fetchAssociative()){

            $immobilisationPermission = new ImmobilisationPermission();

            $immobilisationPermission->setId($row["id"]);
            $immobilisationPermission->setImmobilisation($immobilisationRepository->find($row["immobilisation_id"]));
            $immobilisationPermission->setDateDebut(($row["date_debut"]));
            $immobilisationPermission->setDateFin($row["date_fin"]);
            $immobilisationPermission->setEtat($row["etat"]);
            $immobilisationPermission->setEmploye($employeRepository->find($employes->get($i)->getId()));

            $response->add($immobilisationPermission);
            $i++;
        }

        return $response;
    }

    public function convertDemandeEmployeToString(Collection $employes) : string
    {
        $response = "";

        foreach($employes as $employee){
            $response = $response.$employee->getId().",";
        }

        $response = substr_replace($response ,"", -1);

        return $response;
    }

}
