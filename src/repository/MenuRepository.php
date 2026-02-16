<?php 

require "../Db.php";

class MenuRepository{

private PDO $connexion; 

public function __construct(){
    $db = new Db(); 
    $this->connexion = $db->getConnexion();
}


public function ajouterMenuRepository($description,$nombrePersonneMinimum,$prixParPersonne,$quantiteRestante,$regimeId,$themeId,$titre): void {
       $requeteAjout = $this->connexion->prepare("INSERT INTO menu(description,nombre_personne_minimum,prix_par_personne,quantite_restante, 
                                                                  regime_id,theme_id,titre)  
                                                VALUES (:description,:nombrePersonneMinimum,:prixParPersonne,:quantite, 
                                                        :regimeId, :themeId , :titre)"); 
        
        $requeteAjout->bindParam(":description",$description,PDO::PARAM_STR);
        $requeteAjout->bindParam(":nombrePersonneMinimum",$nombrePersonneMinimum,PDO::PARAM_INT); 
        $requeteAjout->bindParam(":prixParPersonne",$prixParPersonne,PDO::PARAM_INT); 
        $requeteAjout->bindParam(":quantite",$quantiteRestante,PDO::PARAM_INT); 
        $requeteAjout->bindParam(":regimeId",$regimeId,PDO::PARAM_INT);
        $requeteAjout->bindParam(":themeId",$themeId,PDO::PARAM_INT); 
        $requeteAjout->bindParam(":titre",$titre,PDO::PARAM_STR); 
        if(!$requeteAjout->execute()) 
            throw new Exception(" une erreur est survenue lors de l'ajout du menu");
}



public function supprimerMenuRepository(int $id): void {

$requeteSuprimer = $this->connexion->prepare("DELETE FROM menu WHERE menu_id=:id "); 
$requeteSuprimer->bindParam(":id",$id,PDO::PARAM_INT); 
if(!$requeteSuprimer->execute()) 
    throw new Exception(" une erreur est survenue lors de la suppression du menu");
}


}
?>