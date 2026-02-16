<?php 

require "../Db.php"; 

class PlatRepository{

private PDO $connexion; 

public function __construct(){
    $db = new Db(); 
    $this->connexion = $db->getConnexion();
}

public function ajouterPlatRepository($plat): void {
     $nomFichier = uniqid()."_".basename($_FILES["photo"]["name"]); 
     $tmpName = $_FILES["photo"]["tmp_name"];  // a finir de gérer
     if(move_uploaded_file($tmpName,"../upload/".$nomFichier)){  
     $cheminFichierPhoto = "../upload/".$nomFichier; 
       $requeteAjout = $this->connexion->prepare("INSERT INTO plat(photo_chemin,titre_plat)  
                                                VALUES (:cheminPhoto,:titrePlat)");  
        $requeteAjout->bindParam(":cheminPhoto",$cheminFichierPhoto,PDO::PARAM_STR);
        $requeteAjout->bindParam(":titrePlat",$Plat,PDO::PARAM_STR); 
        if(!$requeteAjout->execute())
            throw new Exception(" une erreur est survenue lors de l'ajout d'un plat"); 
    }else {
        throw new Exception(" une erreur est survenue lors de l'ajout de la photo");
    }
    }
    


   

public function supprimerPlatRepository(int $id): void {

$requeteRecupLien = $this->connexion->prepare("SELECT photo_chemin FROM plat WHERE plat_id=:id");
$requeteRecupLien->bindParam(":id",$id,PDO::PARAM_INT);
$requeteRecupLien->execute();
$result = $requeteRecupLien->fetch(PDO::FETCH_ASSOC); 

if ($result && file_exists($result["photo_chemin"])) {
    unlink($result["photo_chemin"]);
} // verifier permission de suppression dans le dossier sur l'hébergeur (chmod 755 uploads   ou  775)  !!!

$requeteSuprimer = $this->connexion->prepare("DELETE FROM plat WHERE plat_id=:id "); 
$requeteSuprimer->bindParam(":id",$id,PDO::PARAM_INT); 
if(!$requeteSuprimer->execute()) 
    throw new Exception(" une erreur est survenue lors de la suppresion d'un plat");
}










}
?>