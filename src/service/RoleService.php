<?php 

require "../repository/RoleRepository.php";

class RoleService { 



private RoleRepository $roleRepository; 


public function __construct(RoleRepository $roleRepository){
$this->roleRepository = $roleRepository;
}


public function ajouterRoleService($roleHtml): void {
       if($roleHtml == null || $roleHtml == "")
        throw new Exception(" l'adresse est vide"); 
       $role= htmlspecialchars($roleHtml); 
      $this->roleRepository->ajouterRoleRepository($role);
}


public function supprimerRoleService(int $id){
if($id == null)
    throw new Exception(" l'id de l'utilisateur a supprimer est vide");
$this->roleRepository->supprimerRoleRepository($id);
}






}
?>