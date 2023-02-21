<?php
require_once 'Database.php';

class MenuController{
    public $db;
    

    public function __construct(){
        $this->db=new Database;

    }

    //CRUD
    public function readData(){
         $query=$this->db->pdo->query('SELECT* from signup');

          return $query->fetchAll();
    }

    public function insert($request){
        $query=$this->db->pdo->prepare('INSERT INTO signup(name,email,username,password)
        VALUES (:name,:email,:username,:password)');

        $query->bindParam(':name',$request['name_s']);
        $query->bindParam(':email',$request['email_s']);
        $query->bindParam(':username',$request['username_s']);
        $query->bindParam(':password',$request['password_s']);
        $query->execute();

    }

    public function edit($id){
        $query=$this->db->pdo->prepare('SELECT* FROM signup WHERE id =:id');
        $query->bindParam(':id',$id);
        $query->execute();
        return $query->fetch();
    }

    public function update($request,$id){
        $query=$this->db->pdo->prepare('UPDATE signup SET name =:name,email = :email, username=:username, password=:password  WHERE id=:id');
        $query->bindParam(':name',$request['name_s']);
        $query->bindParam(':email',$request['email_s']);
        $query->bindParam(':username',$request['username_s']);
        $query->bindParam(':password',$request['password_s']);
        $query->bindParam(':id', $id);
        $query->execute();
        return header('Location: DashboardSignup.php');


    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from signup WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: DashboardSignup.php");
    }
    
}




?>