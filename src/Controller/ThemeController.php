<?php 

require "../service/ThemeService.php"; 

class ThemeController{

private ThemeService $themeService; 

public function __construct(ThemeService $themeService){
$this->themeService = $themeService;
}

public function ajouterThemeController(){
if($_SESSION["csrfToken"]==""/*a modif */){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["newTheme"])){
    if($_POST["newTheme"]=="newTheme"){
     try {
        $themeHtml = $_POST["newTheme"]; 
        $this->themeService->ajouterThemeService($themeHtml);
    }catch(Exception $e){
       echo " une erreur est survenue".$e->getMessage(); 
    }     
    }
   }
    }
  }
}




public function supprimerThemeController(int $id){
if($_SESSION["csrfToken"]==""/*a modifier*/){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["supprimerTheme"])){
        if($_POST["supprimerTheme"] == "supprimerTheme"){
try {
$this->themeService->supprimerThemeService($id);
 }}catch(Exception $e){
    echo " une erreur est survenue".$e->getMessage();
}
}
}
}
}



}
?>