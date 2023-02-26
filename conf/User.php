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

   
     public function __construct($conn=""){
     $connObj = new dbConnect();
     $this->conn = $connObj->connectDB();
     }

public function setSession(){
        $_SESSION["role"] = "0";
        $_SESSION['roleName'] = "SimpleUser";
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


        public function exists(){
            try{
            $stm=$this->conn->prepare("SELECT * from user where name=?, email=?, username=?, password=?");
            $stm->execute([$this->name,$this->email,$this->username,$this->password]);
            $user=$stm->fetchAll();
            if(count($user)>0){
                session_start();
                $_SESSION['id']=$user[0]['id'];
                $_SESSION['name']=$user[0]['name'];
                $_SESSION['email']=$user[0]['email'];
                $_SESSION['username']=$user[0]['username'];
                $_SESSION['password']=$user[0]['password'];
                return true;
    
            }else{
                false;
            }
        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    /*public function adminfunction(){
        try{
        $query="SELECT * FROM user WHERE EXISTS(SELECT * FROM user WHERE username='admin', password='admin')";
        $stm=$this->conn->prepare($query);
        $stm->execute([$this->username,$this->password]);
        //$stm->execute();
        $user=$stm->fetchAll();
        if(count($user)>0){
            session_start();
            $_SESSION['id']=$user[0]['id'];
            $_SESSION['username']=$user[0]['username'];
            $_SESSION['password']=$user[0]['password'];

            return true;

        }else{
            false;
        }
    }catch(Exception $e){
        return $e->getMessage();
    }
}*/

function record_exists() {
    $query = "SELECT * FROM user WHERE username ='admin'";
    $result =$this->conn->prepare($query);
    if (count( $result)==1 ) {
        return true;
    } else {
        return false;
    }
}


}
?>

