<?php
 class User{
    public $name;
    public $email;
    public $username;
    public $password;
   
    public function construct($name,$email,$username,$password){
     $this->name = $name;
     $this->email = $email;
     $this->username = $username;
     $this->password = $password;
     }

function setSession(){

    $_SESSION["roli"] = 0;
    $_SESSION['Statusi'] = "Perdorues";

}

function setCookie(){
    setcookie("username",$this->username,time()+30*60);
}

public function getRole(){
    return 0;
}
public function getUsername(){
    return $this->username;
}

public function getPasword(){
    return $this->password;
}
public function getEmri(){
 return $this->emer;
} 
public function getMbiemri(){
    return $this->mbiemer;
}
public function getEmail(){
     return $this->email;
}


// Setters

public function setEmri($emri){
    $this->emer=$emri;
}

public function setMbiemri($mbiemer){
    $this->mbiemer=$mbiemer; 
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

