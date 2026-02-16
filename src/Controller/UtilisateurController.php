<?php 

require "../service/UtilisateurService.php"; 

class UtilisateurController{

private UtilisateurService $utilisateurService; 

public function __construct(UtilisateurService $utilisateurService){
$this->utilisateurService = $utilisateurService;
}


public function ajoutUtilisateurController(): void {
if($_SESSION["csrfToken"]==""/*a modif */){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["newUtilisateur"])){
    if($_POST["newUtilisateur"]=="newUtilisateur"){
      try 
      {
       $adressePostal = trim($_POST["adressePostal"]); 
       $dateNaissance = $_POST["dateNaissance"]; 
       $email = trim($_POST["email"]); 
       $nom = trim($_POST["nom"]); 
       $passwordHtml = trim($_POST["password"]);
       $pays = trim($_POST["pays"]); 
       $prenom = trim($_POST["prenom"]);
       $telephone = $_POST["telephone"]; 
       $ville = trim($_POST["ville"]); 
      
        $this->utilisateurService->ajouterUtilisateurService($adressePostal,$dateNaissance,$email,$nom,$passwordHtml,$pays,$prenom,$telephone,$ville); 
      }
    catch(Exception $e){
        echo "erreur lors de l'ajout d'un nouvelle utilisateur".$e->getMessage();
    }
    }
    }
  }
 }
}





}

?>