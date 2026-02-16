<?php

require "../service/MessageService.php";

class MessageController{



private MessageService $messageService;

public function __construct(MessageService $messageService){
$this->messageService = $messageService;
}
    
public function ajouterMessageController(){
if($_SESSION["csrfToken"]==""/*a modif */){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["newMessage"])){
    if($_POST["newMessage"]=="newMessage"){
     try {
        $mailHtml = $_POST["mailMessage"];
        $prenomHtml = $_POST["prenomMessage"];
        $nomHtml = $_POST["nomMessage"]; 
        $messageHtml = $_POST["MessageMessage"]; 
        $this->messageService->ajouterMessageService($mailHtml,$messageHtml,$nomHtml , $prenomHtml);
    }catch(Exception $e){
       echo " une erreur est survenue lors de l'ajout du message".$e->getMessage(); 
    }     
    }
   }
    }
  }
}




public function supprimerMessageController(int $id){
if($_SESSION["csrfToken"]==""/*a modifier*/){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["supprimerMessage"])){
        if($_POST["supprimerMessage"] == "supprimerMessage"){
try {
$this->messageService->supprimerMessageService($id);
 }}catch(Exception $e){
    echo " une erreur est survenue lors de la suppression du message".$e->getMessage();
}
}
}
}
}


}
?>

