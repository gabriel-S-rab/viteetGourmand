<?php 

require "../repository/RegimeRepository.php";

class RegimeService{


private RegimeRepository $regimeRepository; 


public function __construct(RegimeRepository $regimeRepository){
$this->regimeRepository = $regimeRepository;
}


public function ajouterRegimeService($regimeHtml): void {
       if($regimeHtml == null || $regimeHtml == "")
        throw new Exception(" l'adresse est vide"); 
       $regime= htmlspecialchars($regimeHtml); 
      $this->regimeRepository->ajouterRegimeRepository($regime);
}


public function supprimerRegimeService(int $id){
if($id == null)
    throw new Exception(" l'id de l'utilisateur a supprimer est vide");
$this->regimeRepository->supprimerRegimeRepository($id);
}






}
?>
