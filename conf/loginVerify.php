<?php
include_once 'Admin.php';
include_once 'User.php';
require_once 'userMapper.php';
require_once 'conn.php';

class loginVerify{
    private $ID;
    private $username;
    private $password;
    private $conn;

    public function __construct($ID=0,$username="",$password="",$conn=""){
        $this->ID=$ID;
        $this->username=$username;
        $this->password=$password;
        $connObj = new dbConnect();
        $this->conn = $connObj->connectDB();
    }

    public function getID(){
        return $this->ID;
    }

    public function setID($ID){
        $this->ID=$ID;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username){
        $this->username=$username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password=$password;
    }

    public function fetchAll(){
        try{
            $stm=$this->conn->prepare('SELECT * FROM user');
            $stm->execute();
            return $stm->fetchAll();
        }catch(Exception $e){
            return $e->getMessage();
        }
    }

   public function login(){
        try{
        $stm=$this->conn->prepare("SELECT * FROM user WHERE username=? and password=?");
        $stm->execute([$this->username,$this->password]);
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

    }

    public function  userandpassCorrect($username,$password){
        $mapper=new User();
        $user=$mapper->getUserByUsername($username);
        if($user==null || count($user)==0){
            return false;
        }else if($password==$user['password']){
            if($user['role']==1){
                $obj=new Admin($user['name'], $user['email'],$user['username'], $user['password']);
                $obj->setSession();
                header("Location: conf/Dashboard.php");
                return true;
            }else{
                $obj=new User($user['name'], $user['email'],$user['username'], $user['password']);
                $obj->setSession();
                header("Location: index.php");
                return false;
            }
        }else{
            return false;
        }

    }

}

?>
