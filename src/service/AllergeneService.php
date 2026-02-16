<?php 

require '../repository/AllergeneRepository.php';

class AllergeneService {

private AllergeneRepository $allergeneRepository;

public function __construct(AllergeneRepository $allergeneRepository){
    $this->allergeneRepository = $allergeneRepository;
} 

public function ajouterAllergeneService(string $libelle): void 
{
    $this->allergeneRepository->ajouterAllergeneRepository($libelle);
}

public function supprimerAllergeneService(int $id): void {
    $this->allergeneRepository->supprimerAllergeneRepository($id);
}
    
}
?>