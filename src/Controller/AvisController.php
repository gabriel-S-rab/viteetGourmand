<?php 

require '../service/AvisService.php';

class AvisController {

public function __construct(){} 

public function AjouterAvisController(): void 
{
    $avisService = new AvisService(); 
    $avisService->ajouterAvisService();
}

}
?>