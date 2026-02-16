<?php 

require "../Db.php";

class RegimeRepository{

private PDO $connexion; 

public function __construct(){
    $db = new Db(); 
    $this->connexion = $db->getConnexion();
}


public function ajouterRegimeRepository($libelleRegime): void {
       $requeteAjout = $this->connexion->prepare("INSERT INTO regime(libelle)  
                                                VALUES (:libelle)"); 
          $requeteAjout->bindParam(":libelle",$libelleRegime,PDO::PARAM_STR); 
       if(!$requeteAjout->execute()) 
        throw new Exception(" une erreur lors de l'ajout du régime est survenue");
}


public function supprimerRegimeRepository(int $id): void {
$requeteSuprimer = $this->connexion->prepare("DELETE FROM regime WHERE regime_id=:id "); 
$requeteSuprimer->bindParam(":id",$id,PDO::PARAM_INT); 
if(!$requeteSuprimer->execute()) 
    throw new Exception(" une erreur lors de la suppression du régime est survenue");
}


}
?>