<?php
include_once 'Admin.php';
include_once 'User.php';
require_once 'userMapper.php';
require_once 'conn.php';
session_start();

class Login{
    private $db;

  public function __construct($pdo) {
    $this->db = $pdo;
  }

  public function login($username, $password) {
    $stmt = $this->db->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
    $stmt->execute(['username' => $username, 'password' => $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
      session_start();
      $_SESSION['user'] = $user;
      header('Location: dashboard.php');
      exit;
    } else {
      return 'Invalid login credentials';
    }
  }
}


?>
