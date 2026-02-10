<?php 
class AvisRepository{
 public function __construct(){} 

 
 public function ajouterAvisRepository(): void {
require "../db.php";
if($_SESSION["csrfToken"]==""/*a modifier*/){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["ajouterAvis"])){
        if($_POST["ajouterAvis"] == "ajouterAvis"){
try {

$id = $_SESSION["id"];   
$dateAvis = htmlspecialchars($_POST["dateAvis"]); 
$description =htmlspecialchars($_POST["descriptionAvis"]);
$note = htmlspecialchars($_POST["noteAvis"]); 
$status = htmlspecialchars($_POST["statusAvis"]);  

$requeteAjouter = $connexion->prepare(" INSERT INTO avis(date_avis,description,note,status,utilisateur_id)
                                         VALUES (:dateAvis,:description,:note,:status,:utilisateurId) ");  
$requeteAjouter->bindParam(':dateAvis',$dateAvis); 
$requeteAjouter->bindParam(':description',$description,PDO::PARAM_STR); 
$requeteAjouter->bindParam(':note',$note,PDO::PARAM_INT);
$requeteAjouter->bindParam(':status',$status,PDO::PARAM_STR); 
$requeteAjouter->bindParam(':utilisateurId',$id,PDO::PARAM_INT);
$requeteAjouter->execute();
}catch(Exception $e){
    echo " un probléme est survenue lors de l'ajout de l'avis".$e->getMessage();
}
}
}
}
}
}







}
?>