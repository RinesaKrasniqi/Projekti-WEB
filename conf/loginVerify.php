<?php
include_once 'Admin.php';
include_once 'User.php';
require_once 'userMapper.php';
session_start();
/*/main
/if (isset($_POST['login'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
} else if (isset($_POST['submit'])) {
    $register = new User($_POST);
    $register->insertData();
} else {
    header("Location:../index.php");
}

class LoginLogic
{
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            echo '1';
            header("Location:../login.php");
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->password)) {
            echo '2';
            header('Location:../index.php');
        } else {
            echo '3';
            header("Location:../login.php");
        }
    }

    private function variablesNotDefinedWell($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        if ($user == null || count($user) == 0)
            return false;
        else if (password_verify($password, $user['password'])) {
            if ($user['role'] == 1) {
                $obj = new Admin($user['id'],$user['name'],$user['email'], $user['username'], $user['password'], $user['role']);
                $obj->setSession();
                header('Location: ../conf/Dashboard.php');
            } else {
                $obj = new User($user['id'],$user['name'],$user['email'], $user['username'], $user['password'], $user['role']);
                $obj->setSession();
                header('Location: ../index.php');
            }
            return true;
        } else return false;
    }
}


/*class RegisterLogic{
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

    public function insertData()
    {
        $user = new User($this->$name,$this->$email,$this->username, $this->password,0);
        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:../signup.php");
    }
}*/




?>
