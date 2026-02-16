<?php 
class RegimeController {

private RegimeService $regimeService;

public function __construct(RegimeService $regimeService){
$this->regimeService = $regimeService;
}
    
public function ajouterRegimeController(){
if($_SESSION["csrfToken"]==""/*a modif */){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["newRegime"])){
    if($_POST["newRegime"]=="newRegime"){
     try {
        $regimeHtml = $_POST["newRegime"]; 
        $this->regimeService->ajouterRegimeService($regimeHtml);
    }catch(Exception $e){
       echo " une erreur est survenue".$e->getMessage(); 
    }     
    }
   }
    }
  }
}




public function supprimerRegimeController(int $id){
if($_SESSION["csrfToken"]==""/*a modifier*/){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["supprimerRegime"])){
        if($_POST["supprimerRegime"] == "supprimerRegime"){
try {
$this->regimeService->supprimerRegimeService($id);
 }}catch(Exception $e){
    echo " une erreur est survenue".$e->getMessage();
}
}
}
}
}


}
?>