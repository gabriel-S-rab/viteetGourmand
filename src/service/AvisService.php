<?php 

require '../repository/AvisRepository.php';

class AvisService {

public function __construct(){} 

public function AjouterAvisService(): void 
{
    $AvisRepository = new AvisRepository(); 
    $AvisRepository->ajouterAvisRepository();
}
    
}