<?php 

require "../Db.php";

class CommandeRepository{

private PDO $connexion; 

public function __construct(){
    $db = new Db(); 
    $this->connexion = $db->getConnexion();
}




public function ajouterCommandeRepository(string $dateCommande,string  $datePrestation,string  $heureLivraison,int $nombrePersonne,string $numeroCommande,int $pretMateriel,float $prixLivraison,float $prixMenu, int $restitutionMateriel, int  $statusCommande): void {
       $requeteAjout = $this->connexion->prepare("INSERT INTO commande(date_commande,date_prestation,heure_livraison,
                                                        nombre_personne,numero_commande,pret_materiel,prix_livraison,
                                                        prix_menu,restitution_materiel,status_commande)  
                                                VALUES (:dateCommande,:datePrestation,:heureLivraison,:nombrePersonne, 
                                                        :numeroCommande, :pretMateriel , :prixLivraison , :prixMenu,
                                                        :restitutionMateriel, :statusCommande)");  
        $requeteAjout->bindParam(":dateCommande",$dateCommande,PDO::PARAM_STR);
        $requeteAjout->bindParam(":datePrestation",$datePrestation,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":heureLivraison",$heureLivraison,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":nombrePersonne",$nombrePersonne,PDO::PARAM_INT); 
        $requeteAjout->bindParam(":numeroCommande",$numeroCommande,PDO::PARAM_STR);
        $requeteAjout->bindParam(":pretMateriel",$pretMateriel,PDO::PARAM_INT); 
        $requeteAjout->bindParam(":prixLivraison",$prixLivraison); 
        $requeteAjout->bindParam(":prixMenu",$prixMenu); 
        $requeteAjout->bindParam(":restitutionMateriel", $restitutionMateriel,PDO::PARAM_INT); 
        $requeteAjout->bindParam(":statusCommande", $statusCommande,PDO::PARAM_INT);   
        if(!$requeteAjout->execute())
        throw new Exception(" erreur lors de l'ajout de la commande");    
    }


public function supprimerCommandeRepository(int $id): void {

$requeteSuprimer = $this->connexion->prepare("DELETE FROM commande WHERE id=:id "); 
$requeteSuprimer->bindParam(":id",$id,PDO::PARAM_INT); 
if(!$requeteSuprimer->execute()) 
    throw new Exception(" erreur lors de la suppression de la commande ");
}









}
?>