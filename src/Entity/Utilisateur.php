<?php

class Utilisateur {
    private string $rue; 
    private DateTime $dateNaissance; 
    private string $email; 
    private string $nom; 
    private string $password; // hashé le mp dans utilisateurService pour pas qu'il soit en claire
    private string $prenom; 
    private string $pays; 
    private Role $role; 
    private string $telephone; 
    private int $id; 
    private string $ville; 
    private string $codePostal;



    public function __construct(string $rue, DateTime $dateNaissance,string $email, 
                                string $nom, string $password, string $prenom , string $pays,
                                Role $role, string $telephone,  string $ville, int $id, string $codePostal)
    {
      $this->rue = $rue; 
      $this->dateNaissance = $dateNaissance; 
      $this->email = $email; 
      $this->nom = $nom; 
      $this->password = $password; 
      $this->prenom = $prenom; 
      $this->pays = $pays; 
      $this->role = $role; 
      $this->telephone = $telephone; 
      $this->ville = $ville;
      $this->id = $id;
      $this->codePostal = $codePostal;
    }

public function getAdressePostal(): string 
{
return $this->adressePostal; 
}

public function setAdressePostal(string $adressePostal): void 
{
$this->adressePostal = $adressePostal;
}

public function getDateNaissance(): DateTime 
{
    return $this->dateNaissance; 
}

public function setDateNaissance(DateTime $dateNaissance): void 
{
$this->dateNaissance = $dateNaissance;
}

public function getEmail(): string
{
    return $this->email; 
}

public function setEmail(string $email): void 
{
$this->email = $email;
}

public function getNom(): string
{
    return $this->nom; 
}

public function setNom(string $nom): void 
{
$this->nom = $nom;
}

public function getPassword(): string 
{
    return $this->password; 
}

public function setPassword(string $password): void 
{
$this->password = $password;
}

public function getPrenom(): string
{
    return $this->prenom; 
}

public function setPrenom(string $prenom): void 
{
$this->prenom = $prenom;
}

public function getPays(): string 
{
    return $this->pays; 
}

public function setPays(string $pays): void 
{
$this->pays = $pays;
}

public function getRole(): Role 
{
    return $this->role; 
}

public function setRole(Role $role): void 
{
$this->role = $role;
}

public function getTelephone(): string
{
    return $this->telephone; 
}

public function setTelephone(string $telephone): void 
{
$this->telephone = $telephone;
}

public function getId(): int 
{
    return $this->id; 
}

public function getVille(): string
{
    return $this->ville; 
}

public function setVille(string $ville): void 
{
$this->ville = $ville;
}
}