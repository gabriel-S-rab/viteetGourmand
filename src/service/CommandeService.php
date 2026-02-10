<?php 

require "../repository/CommandeRepository.php"; 

class CommandeService{

public function __construct(){}

public function ajouterCommmandeService(): void {
    $commandeRepository = new CommandeRepository();
    $commandeRepository->ajouterCommmandeRepository();
}

public function supprimerCommandeService(): void {
    $commandeRepository = new CommandeRepository(); 
    $commandeRepository->supprimerCommandeRepository();
}
}
?> 