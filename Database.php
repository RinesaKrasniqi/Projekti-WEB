<?php

 class Database{
    public $pdo;

    public function __construct(){
        try{
            session_start();
            $link=new PDO('mysql:host=localhost;dbname=dental','root','');
            $this->pdo=$link;
        //$conn = new PDO("mysql:host=$servername;port=8889;dbname=AppDatabase", $username, $password); 
        }catch(PDOException $exception){
             die($exception->getMessage());
        }
    }
    
}



?>