<?php
require_once '../config/Database.php';

class MenuController{
    public db;
    

    public function __construct(){
        $this->db=new Database;

    }

    //CRUD

    public function readData(){
         $query=$this->db->pdo->query('SELECT* from contact');

          return $query->fetchAll();
    }

    public function insert($request){
        $query=$this->db->pdo->prepare('INSERT into contact(name,email,number,date,service,message,src)
        VALUES (:name,:email,:number,:date,:service,:message,:src)' );

        $query=bindParam(':name',$request['name']);
        $query=bindParam(':email',$request['email']);
        $query=bindParam(':number',$request['number']);
        $query=bindParam(':date',$request['date']);
        $query=bindParam(':service',$request['service']);
        $query=bindParam(':message',$request['message']);
        $query=bindParam(':src',$request['src']);
        $query->execute();

        return header('Location: Dashoard.php');




    }

    public function edit($id){
        $query=$this->db->pdo->prepare('SELECT* FROM contact WHERE id =:id');
        $query->bindParam(':id',$id);
        $query->execute();
        return $query->fetch();


    }

    public function update($request,$id){
        $query=$this->db->dbo->prepare('UPDATE contact SET name =:name,email = :email, number=:number, date=;date,service=:service,
        message=:message,src =:src WHERE id=:id');
        $query=bindParam(':name',$request['name']);
        $query=bindParam(':email',$request['email']);
        $query=bindParam(':number',$request['number']);
        $query=bindParam(':date',$request['date']);
        $query=bindParam(':service',$request['service']);
        $query=bindParam(':message',$request['message']);
        $query=bindParam(':src',$request['src']);
        $query=bindParam(':id',$request['id']);
        $query->execute();

        return header('Location: Dashboard.php');


    }

    public function delete(){
        $query=$this->db->dbo->prepare('DELETE FROM contact WHERE id=:id');
        $query->bindParam(':id',$id);
        $query->execute();
        return header('Location: Dashboard.php');
        


    }
    
}




?>