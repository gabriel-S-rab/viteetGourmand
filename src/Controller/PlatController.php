<?php 

require "../service/PlatService.php";

class PlatController{



private PlatService $platService;

public function __construct(PlatService $platService){
$this->platService = $platService;
}
    
public function ajouterPlatController(){
if($_SESSION["csrfToken"]==""/*a modif */){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["newPlat"])){
    if($_POST["newPlat"]=="newPlat"){
     try {
        $platHtml = $_POST["newPlat"]; 
        $this->platService->ajouterPlatService($platHtml);
    }catch(Exception $e){
       echo " une erreur est survenue lors de l'ajout du plat".$e->getMessage(); 
    }     
    }
   }
    }
  }
}




public function supprimerPlatController(int $id){
if($_SESSION["csrfToken"]==""/*a modifier*/){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["supprimerPlat"])){
        if($_POST["supprimerPlat"] == "supprimerPlat"){
try {
$this->platService->supprimerPlatService($id);
 }}catch(Exception $e){
    echo " une erreur est survenue lors de la suppresion du plat".$e->getMessage();
}
}
}
}
}


}
?>

