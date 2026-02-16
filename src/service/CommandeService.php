<?php 

require "../repository/CommandeRepository.php"; 

class CommandeService{


private CommandeRepository $commandeRepository; 


public function __construct(CommandeRepository $commandeRepository){
$this->commandeRepository = $commandeRepository;
}


public function ajouterCommandeService(DateTime $dateCommande,DateTime $datePrestation, DateTime $heureLivraison, int $nombrePersonne,  int $pretMateriel,
                                  float $prixLivraison,float $prixMenu, int $restitutionMateriel): void { 
      if($nombrePersonne <= 0 || $prixLivraison <= 0 || $prixMenu <= 0)
        throw new Exception("un probléme est survenue (nombre personne = 0)");  
        $ajoutDate = new DateTime(); 
        $annee = (string) $ajoutDate->format('Y'); 
        $mois = (string) $ajoutDate->format("m");
        $numeroCommande = (string) random_int(100000, 999999);// générer un numéro au hasard 
        $numeroCommandeFormatString = $annee.$mois.$numeroCommande; 
        $statusCommande = 1;// regarder ou modifier le status
       $dateCommandeFormater = $dateCommande->format('Y-m-d');  
      $datePrestationFormater = $datePrestation->format('Y-m-d');  
      $heureLivraisonFormater = $heureLivraison->format('H:i:s'); 

      $this->commandeRepository->ajouterCommandeRepository($dateCommandeFormater,$datePrestationFormater,$heureLivraisonFormater,$nombrePersonne,$numeroCommande,$pretMateriel,
                                                          $prixLivraison,$prixMenu,$restitutionMateriel,$statusCommande);
}


public function supprimerCommandeService(int $id){
if($id == null)  // verif si ok "strict_types"
    throw new Exception(" l'id du menu a supprimer est vide");
$this->commandeRepository->supprimerCommandeRepository($id);
}






}
?> 