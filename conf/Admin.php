<?php
require_once 'conn.php';

class Admin{
    public $name;
    public $email;
    public $username;
    public $password;
    public $role=1;
   
     public function __construct($name,$email,$username,$password,$role){
       $this->name = $name;
       $this->email = $email;
       $this->username = $username;
       $this->password = $password;
       $this->role = $role;

     } 

public function setSession(){
    $_SESSION["role"] = 1;
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


// Setters

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
// public function setRole($role){
//     return $this->$role;
// }

    
    public function insertAdmin(){
        try {
            $connObj = new dbConnect();
            $conn = $connObj->connectDB();

            $name = $this->getName();
            $email=  $this->getEmail();
            $username = $this->getUsername();
            $password= $this->getPassword();
            //$role= $this->getRole();
            $query = "INSERT INTO user(name,email,username,password,role) VALUES ('$name','$email','$username','$password','1')";
            
            $conn->exec($query);
        }catch(PDOException $e) {
            echo $query . "<br>" . $e->getMessage();
        }
    }
}
  
?>