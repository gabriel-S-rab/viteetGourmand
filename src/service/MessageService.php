<?php 

require "../repository/MessageRepository.php";

class MessageService {



private MessageRepository $messageRepository; 


public function __construct(MessageRepository $messageRepository){
$this->messageRepository = $messageRepository;
}


public function ajouterMessageService($mailHtml,$messageHtml,$nomHtml,$prenomHtml): void {
       $mail = htmlspecialchars($mailHtml); 
       $message = htmlspecialchars($messageHtml); 
       $nom = htmlspecialchars($nomHtml); 
       $prenom = htmlspecialchars($prenomHtml); 
       if($mail == null || $mail == "" || $message == null || $message == "" || $nom == null || $nom == "" || $prenom == null || $prenom== "")
        throw new Exception(" l'adresse est vide"); 
      $this->messageRepository->ajouterMessageRepository($mail,$message,$nom,$prenom);
}


public function supprimerMessageService(int $id){
if($id == null)
    throw new Exception(" l'id du message a supprimer est vide");
$this->messageRepository->supprimerMessageRepository($id);
}









}
?>