<?php 

require_once __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

class Db{

private PDO $connexion;

public function getConnexion(){

$host = $_ENV['DB_HOST']; 
$dbName = $_ENV['DB_NAME']; 
$charset = $_ENV['DB_CHARSET'];
$user = $_ENV['DB_USER']; 
$pass = $_ENV['DB_PASS'];

return $this->connexion = new PDO("mysql:host={$host};dbname={$dbName};charset={$charset}","{$user}","{$pass}");
}


} 
?>