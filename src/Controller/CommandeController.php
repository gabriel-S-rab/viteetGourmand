<?php 

require "../service/CommandeService.php";

class CommandeController {

public function __construct(){}

public function ajouterCommandeController(): void {
$commandeService = new CommandeService();
$commandeService->ajouterCommandeService(); 
}

public function supprimerCommandeController(): void {
    $commandeService = new CommandeService(); 
    $commandeService->ajouterCommandeService();
}

}

?>