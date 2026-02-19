<?php 

require_once __DIR__."/../repository/UtilisateurRepository.php";

class UtilisateurService{ 

private UtilisateurRepository $utilisateurRepository;

public function __construct(UtilisateurRepository $utilisateurRepository){
$this->utilisateurRepository = $utilisateurRepository;
}

public function ajouterUtilisateurService(string $rue,string $dateNaissance,string $email,string $nom,string $passwordHtml,
                                          string $pays,string $prenom,string $telephone,string $ville, string $codePostal): void {
       
    
       $role = 1;
        $rue = htmlspecialchars($rue); 
       if($rue == "")
        throw new Exception(" l'adresse est vide"); 
       $dateNaissance = htmlspecialchars($dateNaissance); 
       if($dateNaissance == "")
        throw new Exception(" la date de naissance est vide"); 
       $email = htmlspecialchars($email); 
       if($email == "")
        throw new Exception(" l'email est vide"); 
       $nom = htmlspecialchars($nom); 
       if($nom == "")
        throw new Exception( " le nom est vide"); 
       $passwordHtml = htmlspecialchars($passwordHtml);
       if($passwordHtml == "")
        throw new Exception(" le password est vide"); 
       $password = password_hash(trim($passwordHtml),PASSWORD_DEFAULT);
       $pays = htmlspecialchars($pays); 
       if($pays == "")
        throw new Exception(" le pays est vide"); 
       $prenom = htmlspecialchars($prenom);
       if($prenom == "")
        throw new Exception(" le prenom est vide"); 
       $role= htmlspecialchars($role); 
      if(!in_array($role, [1,2,3]))
        throw new Exception("le role est vide"); 
       $telephone = htmlspecialchars($telephone); 
       if($telephone == "")
        throw new Exception(" le telephone est vide"); 
       $ville = htmlspecialchars($ville); 
       if($ville =="")
        throw new Exception(" la ville est vide");
        $codePostal = htmlspecialchars($codePostal);
        if($codePostal == "")
            throw new Exception(" le code postal est vide");

      if($this->utilisateurRepository->emailExiste($email))
    throw new Exception("Cet email est déjà utilisé");
      $this->utilisateurRepository->ajouterUtilisateurRepository($rue,$dateNaissance,$email,$nom,$password,$pays,$prenom,$role,$telephone,$ville,$codePostal);
}

public function supprimerUtilisateurService(int $id){
if($id == null)
    throw new Exception(" l'id de l'utilisateur a supprimer est vide");
$this->utilisateurRepository->supprimerUtilisateurRepository($id);
}





}
?>