<?php
require_once 'Database.php';

class MenuController{
    public $db;
    

    public function __construct(){
        $this->db=new Database;

    }

    //CRUD

    public function readData(){
         $query=$this->db->pdo->query('SELECT* from contact');

          return $query->fetchAll();
    }

    public function insert($request){
        $query=$this->db->pdo->prepare('INSERT INTO contact(name,email,number,date,service,message)
        VALUES (:name,:email,:number,:date,:service,:message)');

        $query=bindParam(':name',$request['name_c']);
        $query=bindParam(':email',$request['email_c']);
        $query=bindParam(':number',$request['number_c']);
        $query=bindParam(':date',$request['date_c']);
        $query=bindParam(':service',$request['service_c']);
        $query=bindParam(':message',$request['message_c']);
        $query->execute();

        return header('Location: Dashboard.php');
    }

    public function edit($id){
        $query=$this->db->pdo->prepare('SELECT* FROM contact WHERE id =:id');
        $query->bindParam(':id',$id);
        $query->execute();
        return $query->fetch();
    }

    public function update($request,$id){
        //ose db ose pdo
        $query=$this->db->pdo->prepare('UPDATE contact SET name =:name,email = :email, number=:number, date=;date,service=:service,
        message=:message WHERE id=:id');
        $query=bindParam(':name',$request['name_c']);
        $query=bindParam(':email',$request['email_c']);
        $query=bindParam(':number',$request['number_c']);
        $query=bindParam(':date',$request['date_c']);
        $query=bindParam(':service',$request['service_c']);
        $query=bindParam(':message',$request['message_c']);
        $query->bindParam(':id', $id);
        $query->execute();
        return header('Location: Dashboard.php');


    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from contact WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: Dashboard.php");
    }
    
}




?>