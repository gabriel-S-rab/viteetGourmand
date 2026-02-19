<?php

require_once __DIR__.'/../repository/UtilisateurRepository.php';

class AuthService {

    private UtilisateurRepository $utilisateurRepository;

    public function __construct(UtilisateurRepository $utilisateurRepository){
        $this->utilisateurRepository = $utilisateurRepository;
    }

    public function connecter(string $email, string $password): void {
        if(empty($email))
            throw new Exception("L'email est vide");
        if(empty($password))
            throw new Exception("Le mot de passe est vide");

        $utilisateur = $this->utilisateurRepository->authentifierUtilisateur($email, $password);

        if($utilisateur === null)
            throw new Exception("Email ou mot de passe incorrect");

        session_regenerate_id(true);

        $_SESSION['utilisateur_id'] = $utilisateur->getId();
        $_SESSION['role'] = $utilisateur->getRole();
        $_SESSION['prenom'] = $utilisateur->getPrenom();
    }

    public function deconnecter(): void {
        session_unset();
        session_destroy();
    }

    public function estConnecte(): bool {
        return isset($_SESSION['utilisateur_id']);
    }
}
?>