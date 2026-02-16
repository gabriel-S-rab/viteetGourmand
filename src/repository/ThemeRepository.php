<?php 

require "../Db.php";

class ThemeRepository{


private PDO $connexion; 


public function __construct(){
$pdo = new Db(); 
$this->connexion = $pdo->getConexion();
}



public function ajouterThemeRepository($libelle): void {
       $requeteAjout = $this->connexion->prepare("INSERT INTO theme(libelle)  
                                                VALUES (:libelle)"); 
        $requeteAjout->bindParam(":libelle",$libelle,PDO::PARAM_STR); 
        if(!$requeteAjout->execute())
          throw new Exception(" erreur lors de l'ajout du theme");    
}



public function supprimerThemeRepository(int $id): void {
$requeteSuprimer = $this->connexion->prepare("DELETE FROM theme WHERE theme_id=:id "); 
$requeteSuprimer->bindParam(":id",$id,PDO::PARAM_INT); 
if(!$requeteSuprimer->execute())
  throw new Exception(" erreur lors de la suppression du theme");
 }




}
?>