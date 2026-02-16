<?php 
class AllergeneRepository{

private PDO $connexion; 

public function __construct(){
    $db = new Db(); 
    $this->connexion = $db->getConnexion();
}
 

public function ajouterAllergeneRepository(string $libelleAllergene): void {
        $requeteAjout = $this->connexion->prepare("INSERT INTO allergene(libelle)  
                                                VALUES (:libelle)"); 
        $requeteAjout->bindParam(":libelle",$libelleAllergene,PDO::PARAM_STR);
        if(!$requeteAjout->execute()) 
            throw new Exception( " errueur lors de l'ajout de l'allergene");
    }
  

public function supprimerAllergeneRepository(int $id): void {
$requeteSuprimer = $this->connexion->prepare("DELETE FROM allergene WHERE allergene_id=:id "); 
$requeteSuprimer->bindParam(":id",$id,PDO::PARAM_INT); 
if(!$requeteSuprimer->execute()) 
    throw new Exception(" erreur lors de la suppression de l'allergene");
}







}
?>