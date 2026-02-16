<?php 

require "../service/RoleService.php";

class RoleController{

private RoleService $roleService;

public function __construct(RoleService $roleService){
$this->roleService = $roleService;
}
    
public function ajouterRoleController(){
if($_SESSION["csrfToken"]==""/*a modif */){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["newRole"])){
    if($_POST["newRole"]=="newRole"){
     try {
        $roleHtml = $_POST["newRole"]; 
        $this->roleService->ajouterRoleService($roleHtml);
    }catch(Exception $e){
       echo " une erreur est survenue".$e->getMessage(); 
    }     
    }
   }
    }
  }
}




public function supprimerRoleController(int $id){
if($_SESSION["csrfToken"]==""/*a modifier*/){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["supprimerRole"])){
        if($_POST["supprimerRole"] == "supprimerRole"){
try {
$this->roleService->supprimerRoleService($id);
 }}catch(Exception $e){
    echo " une erreur est survenue".$e->getMessage();
}
}
}
}
}



}
?>