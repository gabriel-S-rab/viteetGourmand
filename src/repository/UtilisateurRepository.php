<?php 

require_once __DIR__.'/../Entity/Role.php';
require __DIR__."/../db.php"; // voir si ajout en propriété
require __DIR__."/../Entity/Utilisateur.php";

class UtilisateurRepository{
 
private PDO $connexionDb;  

public function __construct(){
$Db = new Db();    
$this->connexionDb = $Db->getConnexion();
}

public function emailExiste(string $email): bool {
    $requete = $this->connexionDb->prepare("SELECT COUNT(*) FROM utilisateur WHERE email = :email");
    $requete->bindParam(":email", $email, PDO::PARAM_STR);
    $requete->execute();
    return $requete->fetchColumn() > 0;
}

public function ajouterUtilisateurRepository(string $rue, 
      string $dateNaissance ,
      string  $email ,
      string $nom ,
      string $password ,
      string $pays ,
      string $prenom ,
      int $role ,
      string $telephone , 
      string $ville,
      String $codePostal  ): void {
       


       $requeteAjout = $this->connexionDb->prepare("INSERT INTO utilisateur(rue,date_naissance,email,nom,password,pays,prenom,
                                                        role,telephone,ville,code_postal)  
                                                VALUES (:rue,:dateNaissance,:email,:nom,:password,:pays,:prenom,:role,:telephone
                                                        ,:ville,:codePostal)"); 
        
        $requeteAjout->bindParam(":rue",$rue,PDO::PARAM_STR);
        $requeteAjout->bindParam(":dateNaissance",$dateNaissance); 
        $requeteAjout->bindParam(":email",$email,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":nom",$nom,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":password",$password,PDO::PARAM_STR);
        $requeteAjout->bindParam(":pays",$pays,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":prenom",$prenom,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":role",$role,PDO::PARAM_INT); 
        $requeteAjout->bindParam(":telephone", $telephone,PDO::PARAM_STR); 
        $requeteAjout->bindParam(":ville", $ville,PDO::PARAM_STR);
        $requeteAjout->bindParam(":codePostal",$codePostal,PDO::PARAM_STR);  
        
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

public function authentifierUtilisateur(string $email, string $password): ?Utilisateur {
    $requete = $this->connexionDb->prepare("SELECT utilisateur.*, role.libelle 
                                            FROM utilisateur 
                                            JOIN role ON utilisateur.role = role.role_id 
                                            WHERE email = :email");
    $requete->bindParam(":email", $email, PDO::PARAM_STR);
    $requete->execute();
    $donnees = $requete->fetch();

    if(!$donnees)
        return null;

    if(!password_verify($password, $donnees['password']))
        return null;

    $utilisateur = new Utilisateur(
        $donnees['rue'],
        new DateTime($donnees['date_naissance']),
        $donnees['email'],
        $donnees['nom'],
        $donnees['password'],
        $donnees['prenom'],
        $donnees['pays'],
        new Role($donnees['libelle']),
        $donnees['telephone'],
        $donnees['ville'], 
      (int) $donnees['utilisateur_id'],
       $donnees['code_postal']
    );

    return $utilisateur;
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