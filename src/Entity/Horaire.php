<?php 
class Horaire {
    private int $id; 
    private string $heureFermeture; 
    private string $heureOuverture; 
    private string $jour; 

public function __construct(int $id, string $heureOuverture , string $heureFermeture , string $jour)
{
$this->id = $id;    
$this->heureFermeture = $heureFermeture; 
$this->heureOuverture = $heureOuverture; 
$this->jour = $jour;
}

public function getId(): int
{
   return $this->id;
}

public function getHeureOuverture(): string 
{
   return $this->heureOuverture;
}

public function getHeureFermeture(): string 
{
   return $this->heureFermeture;
}

public function getJour(): string 
{
   return $this->jour;
}

public function __toString(): string {
    return "{$this->jour} : {$this->heureOuverture} - {$this->heureFermeture}";
}
}
?>