<?php
class Avis {
private int $id; 
private string $libelle;
private DateTime $dateAvis; 
private int $note; 
private string $status;

public function __construct(int $id,string $libelle,DateTime $dateAvis, int $note, string $status){
$this->id = $id; 
$this->libelle = $libelle; 
$this->note = $note; 
$this->dateAvis = $dateAvis; 
$this->status = $status;
}

public function getId(): int 
{
    return $this->id; 
}

public function setId(int $id): void 
{
$this->id = $id;
}

public function getLibelle(): string 
{
   return $this->libelle;
}

public function setLibelle(string $libelle):void 
{
 $this->libelle = $libelle;
}


public function getDateAvis(): DateTime
{
   return $this->dateAvis;
}

public function setDateAvis(DateTime $dateAvis):void 
{
 $this->dateAvis= $dateAvis;
}


public function getNote(): int
{
   return $this->note;
}

public function setNote(int $note):void 
{
 $this->note = $note;
}


public function getStatus(): string 
{
   return $this->status;
}

public function setStatus(string $status):void 
{
 $this->status = $status;
}

}
?>