<?php
  require_once 'conn.php';
 class User {
    public $id;
    public $name;
    public $email;
    public $username;
    public $password;
    public $role=0;
    public $conn;
  
     public function __construct($name="",$email="",$username="",$password="",$conn=""){
       $this->name = $name;
       $this->email = $email;
       $this->username = $username;
       $this->password = $password;
       $connObj = new dbConnect();
       $this->conn = $connObj->connectDB();
     }

public function setSession(){
        $_SESSION["role"] == 0;
    }

 public function setCookie()
{
     setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
}

public function getId(){
    return $this->id;
}
public function setId($id){
    $this->id=$id;
}


public function getRole(){
    return $this->role;
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
            $role= $this->getRole();
            $query = "INSERT INTO user(name,email,username,password,role) VALUES ('$name','$email','$username','$password','$role')";
            $conn->exec($query);
        }catch(PDOException $e) {
            echo $query . "<br>" . $e->getMessage();
        }
    }
       
        public function edit($id){
            $data = null;
            $query = "SELECT * FROM user WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetchAll()){
                    $data = $row;
                }
            }
            return $data;
        }
 
        public function update($data){
            $query = "UPDATE user SET name='$data[name]', email='$data[email]', username='$data[username]' WHERE id='$data[id] '";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }


public function checkUser($email){
    $query ="SELECT * FROM user WHERE email = ?";
    $stm=$this->conn->prepare($query);
    $stm->execute([$this->email]);
    $result = $stm->rowCount();
    if($result > 0){
      $error = "Email is in use";
      return true;
    }else{
        return false;
    }

}

public function getUserByUsername($username)
    {
        $this->query = "select * from user where username=:username";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":username", $username);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


}
?>

