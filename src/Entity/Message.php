<?php
class Message {
 private int $id; 
 private string $mail; 
 private string $message; 
 private string $nom; 
 private string $prenom; 

 public function  __construct(int $id, string $mail , string $message , string $nom , string $prenom)
 {
  $this->id = $id; 
  $this->mail = $mail; 
  $this->message = $message; 
  $this->nom = $nom; 
  $this->prenom = $prenom;
 } 

    public function getId(): int
  {
    return $this->id;
  }

     public function getMail(): string
  {
    return $this->mail;
  }

 public function setMail(string $mail):void 
 {
   $this->mail = $mail;
 }

     public function getMessage(): string
  {
    return $this->message;
  }

 public function setMessage(string $message):void 
 {
   $this->message = $message;
 }

     public function getNom(): string
  {
    return $this->nom;
  }

 public function setNom(string $nom):void 
 {
   $this->nom = $nom;
 }

     public function getPrenom(): string
  {
    return $this->prenom;
  }

 public function setPrenom(string $prenom):void 
 {
   $this->prenom = $prenom;
 }
}
?>