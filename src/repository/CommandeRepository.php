<?php 


class CommandeRepository{

public function __construct(){}

public function ajouterCommmandeRepository(): void {
try {    
if($_SESSION["csrfToken"]==""/*a modif */){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["newCommande"])){
    if($_POST["newCommande"]=="newCommande"){
       require "../db.php"; 

       $dateCommande = htmlspecialchars($_POST["dateCommande"]); 
       $datePrestation = htmlspecialchars($_POST["datePrestation"]); 
       $heureLivraison = htmlspecialchars($_POST["heureLivraison"]); 
       $nombrePersonne = htmlspecialchars($_POST["nombrePersonne"]); 
       $numeroCommande = htmlspecialchars($_POST["numeroCommande"]); 
       $pretMateriel = htmlspecialchars($_POST["pretMateriel"]); 
       $prixLivraison = htmlspecialchars($_POST["prixLivraison"]); 
       $prixMenu = htmlspecialchars($_POST["prixMenu"]); 
       $restitutionMateriel = htmlspecialchars($_POST["restitutionMateriel"]); 
       $statusCommande = htmlspecialchars($_POST["statusCommande"]); 


       $requeteAjout = $connexion->prepare("INSERT INTO commande(date_commande,date_prestation,heure_livraison,
                                                        nombre_personne,numero_commande,pret_materiel,prix_livraison,
                                                        prix_menu,restitution_materiel,status_commande)  
                                                VALUES (:dateCommande,:datePrestation,:heureLivraison,:nombrePersonne, 
                                                        :numeroCommande, :pretMateriel , :prixLivraison , :prixMenu,
                                                        :restitutionMateriel, :statusCommande)"); 
        
        $requeteAjout->bindParam(":dateCommande",$dateCommande,PDO::PARAM_DATE);
        $requeteAjout->bindParam(":datePrestation",$datePrestation,PDO::PARAM_DATE); 
        $requeteAjout->bindParam(":heureLivraison",$heureLivraison,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":nombrePersonne",$nombrePersonne,PDO::PARAM_INT); 
        $requeteAjout->bindParam(":numeroCommande",$numeroCommande,PDO::PARAM_STR);
        $requeteAjout->bindParam(":pretMateriel",$pretMateriel,PDO::PARAM_INT); 
        $requeteAjout->bindParam(":prixLivraison",$prixLivraison,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":prixMenu",$prixMenu,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":restitutionMateriel", $restitutionMateriel,PDO::PARAM_INT); 
        $requeteAjout->bindParam(":statusCommande", $statusCommande,PDO::PARAM_STR);  
        
        $requeteAjout->execute();
    
    }
    }
  }
 }
}catch(Exception $e){
    echo "probléme lors de l'ajout de la commande en base".$e->getMessage();
}
}



public function supprimerCommandeRepository(int $id): void {
require "../db.php";
if($_SESSION["csrfToken"]==""/*a modifier*/){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["supprimerCommande"])){
        if($_POST["supprimerCommande"] == "supprimerCommande"){
try {
$requeteSuprimer = $connexion->prepare("DELETE FROM commande WHERE id=:id "); 
$requeteSuprimer->bindParam(":id",$id,PDO::PARAM_INT); 
$requeteSuprimer->execute();
}catch(Exception $e){
    echo " un probléme est survenue lors de la suppresion d'une commande".$e->getMessage();
}
}
}
}
}
}









}
?>