<?php
require_once "conn.php";
require_once "User.php";

class UserMapper extends dbConnect{
    private $conn;
    private $query;
    private $user;

    public function __construct($query="",$user="",$conn="")
    {
        $this->query=$query;
        $this->user=$user;
        $connObj = new dbConnect();
        $this->conn = $connObj->connectDB();
    }

    public function getAllUsers()
    {
        $this->query = "select * from user";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAll()
    {
        $this->query = "select * from home";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllPlan()
    {
        $this->query = "select * from plan";
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

    public function deleteContact($userId)
    {
        $this->query = "delete from contact where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }








    
}
?>
