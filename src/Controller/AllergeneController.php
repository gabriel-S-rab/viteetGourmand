<?php 

require '../service/AllergeneService.php';

class AllergeneController {

private AllergeneService $allergeneService; 

public function __construct(AllergeneService $allergeneService){
    $this->allergeneService = $allergeneService;
} 


public function ajouterAllergeneController(): void 
{
    try {
          if($_SESSION["csrfToken"]==""/*a modif */){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["newAllergene"])){
    if($_POST["newAllergene"]=="newAllergene"){
    $libelleAllergene = htmlspecialchars($_POST["libelleAllergene"]); 
    $this->allergeneService->ajouterAllergeneService($libelleAllergene);
    }catch(Exception $e){

    }
}}}
}catch(Exception $e){

}
}


public function  supprimerAllergeneController(int $id) : void
{    
    try {
  if($_SESSION["csrfToken"]==""/*a modif */){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["supprimerAllergene"])){
    if($_POST["supprimerAllergene"]=="supprimerAllergene"){        
$this->allergeneService->supprimerAllergeneService($id);
    }
}}}}catch(Exception $e){
    
}
}




}
?>