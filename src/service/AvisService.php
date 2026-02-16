<?php 

require '../repository/AvisRepository.php';

class AvisService {

private AvisRepository $avisRepository;

public function __construct(AvisRepository $avisRepository){
    $this->avisRepository = $avisRepository;
} 

public function ajouterAvisService(int $id, string $dateAvis, string $description, string $note): void 
{
    $status = "non valider";
    $this->avisRepository->ajouterAvisRepository($id, $dateAvis, $description, $note , $status);
}

public function supprimerAvisService(int $id): void {
    $this->avisRepository->supprimerAvisService($id);
}
    
}