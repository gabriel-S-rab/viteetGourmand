<?php 

require "../repository/ThemeRepository.php"; 


class ThemeService{


private ThemeRepository $themeRepository; 


public function __construct(ThemeRepository $themeRepository){
$this->themeRepository = $themeRepository;
}


public function ajouterThemeService($libelleHtml): void {
       if($libelleHtml == null || $libelleHtml == "")
        throw new Exception(" l'adresse est vide"); 
       $libelle= htmlspecialchars($libelleHtml); 
      $this->themeRepository->ajouterThemeRepository($libelle);
}


public function supprimerThemeService(int $id){
if($id == null)
    throw new Exception(" l'id de l'utilisateur a supprimer est vide");
$this->themeRepository->supprimerThemeRepository($id);
}





}
?>