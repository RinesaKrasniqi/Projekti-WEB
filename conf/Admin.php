<?php
require_once 'conn.php';

class Admin{
   

    public $name;
    public $email;
    public $username;
    public $password;
    public $role=1;
   
    // public function construct($name,$email,$username,$password){
    //     $this->name = $name;
    //     $this->email = $email;
    //     $this->username = $username;
    //     $this->password = $password;
    //  }

 function setSession(){
 $_SESSION["role"] = 1;
 $_SESSION['Statusi'] = "Admin";
 }

// }

// function setCookie(){
//     setcookie("username",$this->username,time()+30*60);
// }


public function getRole(){
    return 1;
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
public function setRole($role){
    return $this->$role;
}

    
    public function insertAdmin(){
        try {
            $connObj = new dbConnect();
            $conn = $connObj->connectDB();

            $name = $this->getName();
            $email=  $this->getEmail();
            $username = $this->getUsername();
            $password= $this->getPassword();
            //$role= $this->getRole();
            $query = "INSERT INTO user(name,email,username,password) VALUES ('admin','$email','$username','$password')";
            
            $conn->exec($query);
        }catch(PDOException $e) {
            echo $query . "<br>" . $e->getMessage();
        }
    }
}
  
?>











?>