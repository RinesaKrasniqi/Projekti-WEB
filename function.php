<?php
 session_start();

 class Connection{
  public $host ="localhost";
  public $user = "root";
  public $password="";
  public $db_name = "dental";
  public $conn;
  public $db;
  public function __construct(){
    $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
  }


  public function getConnection(){
    echo "<script>alert('successfull');</script>";
    return $this->conn;
  }
   
  //CRUD
  public function readData(){
    
    $query="SELECT * from contact";
    if($query != null){
      $this->conn->query($query);
    }
  
}

/*public function insert($request){
   $query=$this->db->prepare('INSERT INTO contact(name,email,phone,date,service,message)
   VALUES (:name,:email,:phone,:date,:service,:message)');

   $query->bindParam(':name',$request['name_c']);
   $query->bindParam(':email',$request['email_c']);
   $query->bindParam(':phone',$request['number_c']);
   $query->bindParam(':date',$request['date_c']);
   $query->bindParam(':service',$request['service_c']);
   $query->bindParam(':message',$request['message_c']);
   $query->execute();

}*/
public function insert($data){
  $name = $data['name_c'];
    $email= $data['email_c'];
    $phone = $data['number_c'];
    $date=$data['date_c'];
    $service=$data['service_c'];
    $message=$data['message_c'];
    $query = "INSERT INTO contact(name,email,phone,date,service,message) VALUES ('$name','$email', '$phone','$date','$service','$message')";
   $this->conn->query($query);
}




public function edit($id){
   $query=$this->db->pdo->prepare('SELECT* FROM contact WHERE id =:id');
   $query->bindParam(':id',$id);
   $query->execute();
   return $query->fetch();
}

public function update($request,$id){
   $query=$this->db->pdo->prepare('UPDATE contact SET name =:name,email = :email, phone=:phone, date=;date,service=:service,
   message=:message WHERE id=:id');
   $query->bindParam(':name',$request['name_c']);
   $query->bindParam(':email',$request['email_c']);
   $query->bindParam(':phone',$request['phone_c']);
   $query->bindParam(':date',$request['date_c']);
   $query->bindParam(':service',$request['service_c']);
   $query->bindParam(':message',$request['message_c']);
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



 /*class Register extends Connection {
    public function registration($name,$email,$username,$password,$confirmpassword){
        $duplicate = mysqli_query($this->conn, "SELECT * FROM signup WHERE username = '$username' OR email = '$email'");
      
      if(mysqli_num_rows($duplicate) > 0){
         return 10;
        // Username or email has already been taken
        }else{
        if($password == $confirmpassword){
          $query ="INSERT INTO signup  VALUES('','$name','$email','$username','$password')";
           mysqli_query($this->conn, $query);
           return 1;
           //Registration successful
        }else{
            return 100;
            //Password does not match
        }
      }
    }
 }*/


 class Login extends Connection{
    public $id;
    public function signin($usernameemail, $password){
     $result = mysqli_query($this->conn, "SELECT * FROM signup WHERE username='$usernameemail' OR email ='$usernameemail'");
     $row = mysqli_fetch_assoc($result);

     if($row!=null){
        if($password == $row["password"]){
          $this->id = $row["id"];
          return 1;
          //Login successful
        }else{
         return 10;
         //Wrong password
        }
       }else {
       return 100;
       //User not registered
     }
   }

   public function idUser(){
     return $this->id;
   }
  }



?>