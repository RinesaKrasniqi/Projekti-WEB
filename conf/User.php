<?php
  require_once 'conn.php';
 class User{
   

    public $name;
    public $email;
    public $username;
    public $password;
    public $role=0;
   
    // public function construct($name,$email,$username,$password){
    //     $this->name = $name;
    //     $this->email = $email;
    //     $this->username = $username;
    //     $this->password = $password;
    //  }

//function setSession(){
//$_SESSION["roli"] = 0;
//$_SESSION['Statusi'] = "Perdorues";
}

// function setCookie(){
//     setcookie("username",$this->username,time()+30*60);
// }

public function getRole(){
    return 0;
}
public function getEmri(){
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

public function setEmri($emri){
    $this->name=$emri;
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
    return $this->role;
}

    
    public function insertUser(){
        try {
            $connObj = new dbConnect();
            $conn = $connObj->connectDB();

            $name = $this->getEmri();
            $email=  $this->getEmail();
            $username = $this->getUsername();
            $password= $this->getPassword();
            //$role= $this->getRole();
            $query = "INSERT INTO user(name,email,username,password,role) VALUES ('$name','$email','$username','$password','$role')";
            $conn->exec($query);
        }catch(PDOException $e) {
            echo $query . "<br>" . $e->getMessage();
        }
    }
}
  
?>

