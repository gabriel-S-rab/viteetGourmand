<?php

require "../Db.php";

class MessageRepository{

private PDO $connexion; 

public function __construct(){
    $db = new Db(); 
    $this->connexion = $db->getConnexion();
}



public function ajouterMessageRepository($mail,$message,$nom,$prenom): void {
       $requeteAjout = $this->connexion->prepare("INSERT INTO message(mail,message,nom,prenom)  
                                                VALUES (:mail,:message,:nom,:prenom)"); 
        $requeteAjout->bindParam(":mail",$mail,PDO::PARAM_STR);
        $requeteAjout->bindParam(":message",$message,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":nom",$nom,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":prenom",$prenom,PDO::PARAM_STR); 
        if(!$requeteAjout->execute()) 
            throw new Exception(" probléme lors de l'ajout du message");
    }
    

public function supprimerMessageRepository(int $id): void {
$requeteSuprimer = $this->connexion->prepare("DELETE FROM message WHERE id=:id "); 
$requeteSuprimer->bindParam(":id",$id,PDO::PARAM_INT); 
if(!$requeteSuprimer->execute()) 
    throw new Exception(" probléme lors de la suppression du message");
}






}
?>