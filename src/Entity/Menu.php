<?php 

class Menu {

private int $id;
private string $description; 
private int $nombrePersonneMinimum; 
private int $prixParPersonne; 
private int $quantiteRestante;  
private Regime $regime; 
private Theme $theme; 
private string $titre; 
private array $avis = [];

public function __construct(string $description, int $nombrePersonneMinimum, int $prixParPersonne, int $quantiteRestante, Regime $regime , Theme $theme, string $titre){
$this->description = $description; 
$this->nombrePersonneMinimum = $nombrePersonneMinimum; 
$this->prixParPersonne = $prixParPersonne; 
$this->quantiteRestante = $quantiteRestante; 
$this->regime = $regime; 
$this->theme = $theme; 
$this->titre = $titre;
}

public function getId(): int 
{
  return $this->id; 
}

public function getDescription():string 
{
    return $this->description; 
} 

public function setDescription(string $description): void {
    $this->description = $description; 
}

public function getPrixParPersonne(): int 
{
    return $this->prixParPersonne; 
}

public function setPrixParPersonne(int $prixParPersonne): void 
{
  $this->prixParPersonne = $prixParPersonne;
}

public function getNombrePersonneMinimum(): int 
{
    return $this->nombrePersonneMinimum; 
}

public function setNombrePersonneMinimum(int $nombrePersonneMinimum): void 
{
    $this->nombrePersonneMinimum = $nombrePersonneMinimum;
}

public function getQuantiteRestante(): int 
{
    return $this->quantiteRestante;
}

public function setQuantiteRestante(int $quantiteRestante): void 
{
    $this->quantiteRestante = $quantiteRestante; 
}

public function getRegime(): Regime 
{
    return $this->regime;
}

public function setRegime(Regime $regime): void
{
$this->regime = $regime; 
}

public function getTheme(): Theme 
{
    return $this->theme; 
}

public function setTheme(Theme $theme): void
{
$this->theme = $theme;
} 

public function getTitre(): string 
{
    return $this->titre; 
}

public function setTitre(string $titre): void 
{
$this->titre = $titre;
}

public function getAvis(): array 
{
    return $this->avis; 
}

public function addAvis(Avis $avis): void 
{
$this->avis[] = $avis;
}
    
}

?>