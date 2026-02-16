<?php 

require "../repository/PlatRepository.php";

class PlatService{


private PlatRepository $platRepository; 


public function __construct(PlatRepository $platRepository){
$this->platRepository = $platRepository;
}


public function ajouterPlatService($platHtml): void {
       if($platHtml == null || $platHtml == "")
        throw new Exception(" le plat est vide "); 
       $plat= htmlspecialchars($platHtml); 
      $this->platRepository->ajouterPlatRepository($plat);
}


public function supprimerPlatService(int $id){
if($id == null)
    throw new Exception(" l'id de l'utilisateur a supprimer est vide");
$this->platRepository->supprimerPlatRepository($id);
}






}
?>

