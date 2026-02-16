<?php 

require "../service/CommandeService.php";

class CommandeController {

private CommandeService $commandeService;

public function __construct(CommandeService $commandeService){
$this->commandeService = $commandeService;
}
    
public function ajouterCommandeController(){
if($_SESSION["csrfToken"]==""/*a modif */){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["newCommande"])){
    if($_POST["newCommande"]=="newCommande"){
     try {
       $dateCommande =  new DateTime($_POST["dateCommande"]); 
        $datePrestation = new DateTime($_POST["datePrestation"]);
       $heureLivraison = new DateTime($_POST["heureLivraison"]);
        $nombrePersonne = (int) trim($_POST["nombrePersonne"]);
          $pretMateriel = (int) trim($_POST["pretMateriel"]);
        $prixLivraison = (float) trim($_POST["prixLivraison"]);
        $prixMenu = (float) trim($_POST["prixMenu"]);
        $restitutionMateriel = (int) trim($_POST["restitutionMateriel"]);
        $this->commandeService->ajouterCommandeService( $dateCommande, $datePrestation,  $heureLivraison,  $nombrePersonne,   $pretMateriel,
                                   $prixLivraison, $prixMenu,  $restitutionMateriel);
    }catch(Exception $e){
       echo " une erreur est survenue lors de l'ajout de la commande".$e->getMessage(); 
    }     
    }
   }
    }
  }
}




public function supprimerCommandeController(int $id){
if($_SESSION["csrfToken"]==""/*a modifier*/){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["supprimerCommande"])){
        if($_POST["supprimerCommande"] == "supprimerCommande"){
try {
$this->commandeService->supprimerCommandeService($id);
 }catch(Exception $e){
    echo " une erreur est survenue lors de la suppression de la commande".$e->getMessage();
 }
}
}
}
}
}





}

?>