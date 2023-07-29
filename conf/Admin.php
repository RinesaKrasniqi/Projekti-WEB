<?php
require_once 'conn.php';

class Admin{
    public $name;
    public $email;
    public $username;
    public $password;
    public $role=1;
    public $conn;
   
     public function __construct($name,$email,$username,$password,$conn=""){
       $this->name = $name;
       $this->email = $email;
       $this->username = $username;
       $this->password = $password;
       $connObj = new dbConnect();
       $this->conn = $connObj->connectDB();
     } 

public function setSession(){
    $_SESSION["role"] == 1;
}
public function setCookie()
{
    setcookie("name:", $this->getName(), time() + 2 * 24 * 60 * 60);
}

public function getRole(){
    return $this->role;
}

public function getName(){
 return $this->name;
} 

public function getEmail(){
     return $this->email;
}
public function getUsername(){
    return $this->username;
}

public function getPassword(){
    return $this->password;
}

public function setName($name){
    $this->name=$name;
}


public function setEmail($email){
    $this->email=$email;
}

public function setUsername($username){
    $this->username=$username;
}
public function setPassword($password){
    $this->password=$password;  
}
}
  
?>