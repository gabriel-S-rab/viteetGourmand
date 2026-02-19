<?php 

require __DIR__."/service/AuthService.php";
require_once __DIR__.'/session.php';
require __DIR__."/Controller/UtilisateurController.php"; 

if(isset($_POST["newUtilisateur"])){
    $utilisateurRepository = new UtilisateurRepository();
    $utilisateurService = new UtilisateurService($utilisateurRepository);
    $newUtilisateur = new UtilisateurController($utilisateurService); 
    $newUtilisateur->ajoutUtilisateurController();
}

if(isset($_POST["connexion"])){
    $utilisateurRepository = new UtilisateurRepository();
    $authService = new AuthService($utilisateurRepository);
    $authService->connecter($_POST["email"], $_POST["password"]);
    header("Location: ../public/login.php");
}
?>