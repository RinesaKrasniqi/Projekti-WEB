<?php
require_once "conn.php";
require_once "User.php";

class UserMapper extends dbConnect{
    private $conn;
    private $query;
    private $user;

    public function __construct()
    {
        $this->conn = $this->connectDB();
    }

    //edit
    public function getUserByID($userId)
    {
        $this->query = "select * from user where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    //update
    public function update(\User $user, $id)
    {
        $this->query = "UPDATE user SET name=:name, email=:email username=:username where id=:id";
        var_dump($user);
        $statement = $this->conn->prepare($this->query);
        $name = $user->getEmri();
        $email = $user->getEmail();
        $username = $user->getUsername();
        $statement->bindParam(":name", $name);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":username", $username);
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

    public function getAllUsersContact()
    {
        $this->query = "select * from contact";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deleteUser($userId)
    {
        $this->query = "delete from user where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }







    
}
