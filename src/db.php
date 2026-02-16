<?php 

class Db{

private PDO $connexion;

public function getConnexion(string $host = getenv('DB_HOST'), string $dbName = getenv('DB_NAME'), string $charset = getenv('DB_CHARSET'),
                             string $user = getenv('DB_USER'), string $pass = getenv('DB_PASS') ): PDO {
return $this->connexion = new PDO("mysql:host:{$host};dbname={$dbName};charset={$charset}","{$user}","{$pass}");
}


} 
?>