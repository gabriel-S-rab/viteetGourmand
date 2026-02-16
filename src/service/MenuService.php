<?php 

require "../repository/MenuRepository.php";

class MenuService{


private MenuRepository $menuRepository; 


public function __construct(MenuRepository $menuRepository){
$this->menuRepository = $menuRepository;
}


public function ajouterMenuService($descriptionHtml,$nombrePersonneMinimumHtml,$prixParPersonneHtml,$quantiteRestanteHtml,$regimeIdHtml,$themeIdHtml,$titreHtml): void { 
       $description = htmlspecialchars($descriptionHtml); 
       $nombrePersonneMinimum = $nombrePersonneMinimumHtml; 
       $prixParPersonne = $prixParPersonneHtml; 
       $quantiteRestante = $quantiteRestanteHtml; 
       $regimeId = $regimeIdHtml; 
       $themeId = $themeIdHtml; 
       $titre = htmlspecialchars($titreHtml); 
      if($description == null || $description == "" || $nombrePersonneMinimum == null || $prixParPersonne == null ||   $quantiteRestante == null || $regimeId==null || $themeId == null || $titre == null || $titre =="")
        throw new Exception(" les information pour l'ajout d'un menu son non compléte"); 
      $this->menuRepository->ajouterMenuRepository($description,$nombrePersonneMinimum,$prixParPersonne,$quantiteRestante,$regimeId,$themeId,$titre);
}


public function supprimerMenuService(int $id){
if($id == null)  // verif si ok "strict_types"
    throw new Exception(" l'id du menu a supprimer est vide");
$this->menuRepository->supprimerMenuRepository($id);
}









}
?>