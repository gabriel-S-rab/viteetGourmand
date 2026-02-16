<?php 

require "../Db.php";

class RoleRepository{

private PDO $connexion; 

public function __construct(){
    $db = new Db(); 
    $this->connexion = $db->getConnexion();
}


public function ajouterRoleRepository($role): void {
       $requeteAjout = $this->connexion->prepare("INSERT INTO role(libelle)  
                                                VALUES (:libelle)"); 
         $requeteAjout->bindParam(":libelle",$role,PDO::PARAM_STR); 
        if(!$requeteAjout->execute()) 
        throw new Exception(" erreur lors de l'ajout du role");
}




public function supprimerRoleRepository(int $id): void {
$requeteSuprimer = $this->connexion->prepare("DELETE FROM role WHERE role_id=:id "); 
$requeteSuprimer->bindParam(":id",$id,PDO::PARAM_INT); 
if(!$requeteSuprimer->execute()) 
    throw new Exception(" erreur lors de la suppression du role");
}



}
?>