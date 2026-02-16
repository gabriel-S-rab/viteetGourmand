<?php 

require "../db.php"; // voir si ajout en propriété
require "../Entity/Utilisateur.php";

class UtilisateurRepository{
 
private PDO $connexionDb;  

public function __construct(){
$Db = new Db();    
$this->connexionDb = $Db->getConnexion();
}

public function ajouterUtilisateurRepository(string $adressePostal, 
      string $dateNaissance ,
      string  $email ,
      string $nom ,
      string $password ,
      string $pays ,
      string $prenom ,
      int $role ,
      string $telephone , 
      string $ville  ): void {
       


       $requeteAjout = $this->connexionDb->prepare("INSERT INTO utilisateur(adresse_postale,date_naissance,email,nom,password,pays,prenom,
                                                        role,telephone,ville)  
                                                VALUES (:adressePostale,:dateNaissance,:email,:nom,:password,:pays,:prenom,:role,:telephone
                                                        ,:ville)"); 
        
        $requeteAjout->bindParam(":adressePostale",$adressePostal,PDO::PARAM_STR);
        $requeteAjout->bindParam(":dateNaissance",$dateNaissance); 
        $requeteAjout->bindParam(":email",$email,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":nom",$nom,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":password",$password,PDO::PARAM_STR);
        $requeteAjout->bindParam(":pays",$pays,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":prenom",$prenom,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":role",$role,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":telephone", $telephone,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":ville", $ville,PDO::PARAM_STR);  
        
       if(!$requeteAjout->execute()){
        throw new Exception("erreur lors de l'ajout d'un utilisateur");
       }
}




public function supprimerUtilisateurRepository(int $id): void {
$requeteSuprimer = $this->connexionDb->prepare("DELETE FROM utilisateur WHERE utilisateur_id=:id "); 
$requeteSuprimer->bindParam(":id",$id,PDO::PARAM_INT);  
if(!$requeteSuprimer->execute()){
    throw new Exception(" probléme lors de la suppression d'un utilisateur");
}
}



public function RecupUtilisateurParId(int $id): Utilisateur //recup utilisateur pour partie "mon compte" aprés connexion
{
    // function a finir
}



public function RecupererToutLesUtilisateur(): array // tableau de retout Utilisateur (pour partie administrateur)
{
    
}


}
?>