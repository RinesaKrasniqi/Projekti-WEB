<?php

public class Database{
    public $pdo;


    public function __construct(){
        try{
            session_start();
            $link=new PDO('mysqli:host=localhost:dbname=contact','root','');
            $this->pdo=$link;

        }catch(PDOException $exception){
             die($exception->getMessage());
        }
    }
    
}


?>