<?php

class Plat {
private ?string $photoPath; //photo stocké sur le serveur
private int $id; 
private string $titrePlat; 

public function __construct(?string $photoPath, string $titrePlat)
{
$this->photoPath = $photoPath; 
$this->titrePlat = $titrePlat; 
}

public function getPhotoPath(): ?string
{
 return $this->photoPath; 
}

public function setPhotoPath(string $photoPath): void
{
$this->photoPath = $photoPath;
}

public function getId(): int
{
 return $this->id;
}

public function getTitrePlat(): string
{
 return $this->titrePlat;
}

public function setTitrePlat(string $titrePlat): void
{
  $this->titrePlat = $titrePlat;
}
}
?>