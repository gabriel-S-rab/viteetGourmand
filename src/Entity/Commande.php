<?php 
class Commande {
   private DateTime $dateCommande; 
   private DateTime $datePrestation; 
   private string $heureLivraison; 
   private int $id; 
   private int $nombrePersonne; 
   private int $numeroCommande; 
   private int $pretMateriel; 
   private float $prixLivraison; 
   private float $prixMenu; 
   private int $restitutionMateriel; 
   private string $status; 
   
public function __construct(DateTime $dateCommande,DateTime $datePrestation,string $heureLivraison,int $id, int $nombrePersonne,int $numeroCommande, int $pretMateriel, float $prixLivraison , float $prixMenu ,int $restitutionMateriel ,string $status)
{
$this->dateCommande = $dateCommande; 
$this->datePrestation = $datePrestation; 
$this->heureLivraison = $heureLivraison; 
$this->id = $id; 
$this->nombrePersonne = $nombrePersonne; 
$this->numeroCommande = $numeroCommande; 
$this->pretMateriel = $pretMateriel; 
$this->prixLivraison = $prixLivraison; 
$this->prixMenu = $prixMenu; 
$this->restitutionMateriel = $restitutionMateriel; 
$this->status = $status;
}

 public function getDateCommande(): DateTime
  {
    return $this->dateCommande;
  }

 public function setDateCommande(DateTime $dateCommande):void 
 {
   $this->dateCommande = $dateCommande;
 }

    public function getDatePrestation(): DateTime
  {
    return $this->datePrestation;
  }

 public function setDatePrestation(DateTime $datePrestation):void 
 {
   $this->datePrestation = $datePrestation;
 }

    public function getHeureLivraison(): string
  {
    return $this->heureLivraison;
  }

 public function setHeureLivraison(string $heureLivraison):void 
 {
   $this->heureLivraison = $heureLivraison;
 }

    public function getId(): int
  {
    return $this->id;
  }

    public function getNombrePersonne(): int
  {
    return $this->nombrePersonne;
  }

 public function setNombrePersonne(int $nombrePersonne):void 
 {
   $this->nombrePersonne = $nombrePersonne;
 }

    public function getNumeroCommande(): int
  {
    return $this->numeroCommande;
  }

 public function setNumeroCommande(int $numeroCommande):void 
 {
   $this->numeroCommande = $numeroCommande;
 }

    public function getPretMateriel(): int
  {
    return $this->pretMateriel;
  }

 public function setPretMateriel(int $pretMateriel):void 
 {
   $this->pretMateriel = $pretMateriel;
 }

    public function getPrixLivraison(): float
  {
    return $this->prixLivraison;
  }

 public function setPrixLivraison(float $prixLivraison):void 
 {
   $this->prixLivraison = $prixLivraison;
 }

    public function getPrixMenu(): float
  {
    return $this->prixMenu;
  }

 public function setPrixMenu(float $prixMenu):void 
 {
   $this->prixMenu = $prixMenu;
 }

    public function getRestitutionMateriel(): int
  {
    return $this->restitutionMateriel;
  }

 public function setRestitutionMateriel(int $restitutionMateriel):void 
 {
   $this->restitutionMateriel = $restitutionMateriel;
 }

    public function getStatus(): string
  {
    return $this->status;
  }

 public function setStatus(string $status):void 
 {
   $this->status = $status;
 }
}
?>