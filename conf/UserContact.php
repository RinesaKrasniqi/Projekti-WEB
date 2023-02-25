<?php
  require_once 'conn.php';
 class UserContact{
    public $name;
    public $email;
    public $phone;
    public $service;
    public $message;
   
    public function construct($name,$email,$phone,$service,$message){
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
      }

public function getName(){
 return $this->name;
} 

public function getEmail(){
     return $this->email;
}
public function getPhone(){
    return $this->phone;
}

public function getService(){
    return $this->service;
}

public function getMessage(){
    return $this->message;
}

// Setters

public function setName($name){
    $this->name=$name;
}


public function setEmail($email){
    $this->email=$email;
}

public function setPhone($phone){
    $this->phone=$phone;
}
public function setService($service){
    $this->service=$service;  
}

public function setMessage($message){
    $this->message=$message;  
}


    
    public function insertUserContact(){
        try {
            $connObj = new dbConnect();
            $conn = $connObj->connectDB();
            $name = $this->getName();
            $email=  $this->getEmail();
            $phone = $this->getPhone();
            $service= $this->getService();
            $message= $this->getMessage();
            //$role= $this->getRole();
            $query = "INSERT INTO contact(name,email,phone,service,message) VALUES ('$name','$email','$phone','$service','$message')";
            $conn->exec($query);
        }catch(PDOException $e) {
            echo $query . "<br>" . $e->getMessage();
        }
    }
}
  
?>

