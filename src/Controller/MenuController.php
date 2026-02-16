<?php 

require "../service/MenuService.php";

class MenuController{



private MenuService $menuService;

public function __construct(MenuService $menuService){
$this->menuService = $menuService;
}
    
public function ajouterMenuController(){
if($_SESSION["csrfToken"]==""/*a modif */){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["newMenu"])){
    if($_POST["newMenu"]=="newMenu"){
     try {
        $descriptionHtml = $_POST["DescriptionMenu"];
        $nombrePersonneMinimumHtml = $_POST["nombrePersonneMinimum"];
        $prixParPersonneHtml = $_POST["prixParPersonne"]; 
        $quantiteRestanteHtml = $_POST["quantiteRestante"]; 
        $regimeIdHtml = $_POST["regimeId"]; 
        $themeIdHtml  = $_POST["themeId"]; 
        $titreHtml = $_POST["titre"]; 
        $this->menuService->ajouterMenuService($descriptionHtml,$nombrePersonneMinimumHtml,$prixParPersonneHtml,$quantiteRestanteHtml,$regimeIdHtml,$themeIdHtml,$titreHtml);
    }catch(Exception $e){
       echo " une erreur est survenue lors de l'ajout du menu".$e->getMessage(); 
    }     
    }
   }
    }
  }
}




public function supprimerMenuController(int $id){
if($_SESSION["csrfToken"]==""/*a modifier*/){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["supprimerMenu"])){
        if($_POST["supprimerMenu"] == "supprimerMenu"){
try {
$this->menuService->supprimerMenuService($id);
 }catch(Exception $e){
    echo " une erreur est survenue lors de la suppression du menu".$e->getMessage();
 }
}
}
}
}
}






}
?>