<?php
require_once 'conn.php';
 class UserContact{
    public $name;
    public $email;
    public $phone;
    public $service;
    public $message;
    public $id;
   
    public function __construct($conn=""){
        $connObj = new dbConnect();
        $this->conn = $connObj->connectDB();
    }


 public function getId(){
        return $this->id;
}
public function setId($id){
        $this->id=$id;
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


    
    public function insertContact(){
        try {
            $connObj = new dbConnect();
            $conn = $connObj->connectDB();
            $name = $this->getName();
            $email=  $this->getEmail();
            $phone = $this->getPhone();
            $service= $this->getService();
            $message= $this->getMessage();
            $query = "INSERT INTO contact(name,email,phone,service,message) VALUES ('$name','$email','$phone','$service','$message')";
            $conn->exec($query);
        }catch(PDOException $e) {
            echo $query . "<br>" . $e->getMessage();
        }
    }

    public function editC($id){
        $data = null;
        $query = "SELECT * FROM contact WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while($row = $sql->fetchAll()){
                $data = $row;
            }
        }
        return $data;
    }

    public function updateC($data){
        $query = "UPDATE contact SET name='$data[name]', email='$data[email]', phone='$data[number]',service='$data[service]',message='$data[message]' WHERE id='$data[id] '";
        if ($sql = $this->conn->query($query)) {
            return true;
        }else{
            return false;
        }
    }

}
  
?>

