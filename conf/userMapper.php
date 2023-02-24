<?php
require_once "conn.php";

class UserMapper extends dbConnect{
    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->connectDB();
    }

    public function getUserByID($userId)
    {
        $this->query = "select * from user where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function edit($user, $id)
    {
        $this->query = "update user set username=:username where id=:id";
        var_dump($user);
        $statement = $this->conn->prepare($this->query);
        $lastname = $user->getUsername();
        $password=$user->getPassword();
        $statement->bindParam(":username", $username);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":id", $id);
        $statement->execute();
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

    public function getAllUsers()
    {
        $this->query = "select * from user";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    /*public function insertUser(\SimpleUser $user)
    {
        $this->query = "insert into User (userName, userLastName,userPassword, role) values (:username,:lastname,:pass,:role)";
        $statement = $this->conn->prepare($this->query);
        $username = $user->getUsername();
        $lastname = $user->getLastname();
        $pass = password_hash($user->getPassword(), PASSWORD_BCRYPT);
        $role = $user->getRole();
        $statement->bindParam(":username", $username);
        $statement->bindParam(":lastname", $lastname);
        $statement->bindParam(":pass", $pass);
        $statement->bindParam(":role", $role);
        $statement->execute();
    }*/

    public function deleteUser($userId)
    {
        $this->query = "delete from user where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }
}
