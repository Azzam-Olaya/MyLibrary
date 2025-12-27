<?php 
class Data {
    public PDO $pdo;
    public function __construct(){
        $user= "root";
        $dbname="bibliotheque";
        $host="localhost";
        $pass="olaya020102A#";

        $this->pdo=new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$user,$pass);
    }
}
$db= new Data();