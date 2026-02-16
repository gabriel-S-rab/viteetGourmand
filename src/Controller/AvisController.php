<?php 

require '../service/AvisService.php';

class AvisController {

private AvisService $avisService; 

public function __construct(AvisService $avisService){
    $this->avisService = $avisService;
} 


public function ajouterAvisController(): void 
{
try {    
    if($_SESSION["csrfToken"]==""/*a modif */){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["newAvis"])){
    if($_POST["newAvis"]=="newAvis"){
$id = $_SESSION["id"];   
$dateAvis = htmlspecialchars($_POST["dateAvis"]); 
$description =htmlspecialchars($_POST["descriptionAvis"]);
$note = htmlspecialchars($_POST["noteAvis"]);
    $this->avisService->ajouterAvisService($id, $dateAvis, $description, $note);
}
}    
}
}
 }catch(Exception $e){

 }
}



public function  supprimerAvisController(int $id) : void
{    
try {
      if($_SESSION["csrfToken"]==""/*a modif */){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["suppriùerAvis"])){
    if($_POST["supprimerAvis"]=="supprimerAvis"){
$this->avisService->supprimerAvisService($id);
}catch(Exception $e){

}
}
}}}catch(Exception $e){
    
}
}

}
?>