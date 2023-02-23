<?php
  
  class Admin{
    public $name;
    public $email;
    public $username;
    public $password;
   
    public function __construct($name,$email,$username,$password){
     $this->name = $name;
     $this->email = $email;
     $this->username = $username;
     $this->password = $password;
     }

function setSession(){

    $_SESSION["roli"] = 1;
    $_SESSION['Statusi'] = "Administrator";

}
function setCookie(){
    setcookie("username",$this->username,time()+246060);
}

public function getRole()
{
    return 1;
}
}
?>