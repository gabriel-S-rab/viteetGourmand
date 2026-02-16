<?php 

require "../Db.php";

class AvisRepository{

private PDO $connexion; 

public function __construct(){
    $db = new Db(); 
    $this->connexion = $db->getConnexion();
}
 
 public function ajouterAvisRepository(int $id, string $dateAvis, string $description, string $note , string $status): void { 

$requeteAjouter = $this->connexion->prepare(" INSERT INTO avis(date_avis,description,note,status,utilisateur_id)
                                         VALUES (:dateAvis,:description,:note,:status,:utilisateurId) ");  
$requeteAjouter->bindParam(':dateAvis',$dateAvis); 
$requeteAjouter->bindParam(':description',$description,PDO::PARAM_STR); 
$requeteAjouter->bindParam(':note',$note,PDO::PARAM_STR);
$requeteAjouter->bindParam(':status',$status,PDO::PARAM_STR); 
$requeteAjouter->bindParam(':utilisateurId',$id,PDO::PARAM_INT);
if(!$requeteAjouter->execute())
    throw new Exception(" une erreur est survenue lors de l'ajout de l'avis");
}



public function supprimerAvisRepository(int $id): void {

$requeteSuprimer = $this->connexion->prepare("DELETE FROM avis WHERE id=:id "); 
$requeteSuprimer->bindParam(":id",$id,PDO::PARAM_INT); 
if(!$requeteSuprimer->execute()) 
    throw new Exception( " une erreur est survenu lors de la suppression de l'avis");
}





}
?>