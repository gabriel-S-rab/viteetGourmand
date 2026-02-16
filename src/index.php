<?php 

require "../src/Controller/UtilisateurController.php"; 

if($_POST["newUtilisateur"]){
$newUtilisateur = new UtilisateurController(); 
$newUtilisateur->ajouterUtilisateurController();
}
//point d'entré