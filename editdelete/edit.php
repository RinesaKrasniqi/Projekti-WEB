<?php

include_once 'userMapper.php';
include_once 'User.php';
if (isset($_GET['username']) && isset($_GET['username'])) {
    $userId = $_GET['id'];
    $name = $_GET['name'];
    $useremail = $_GET['email'];
    $username = $_GET['username'];
    $simpleUser = new User($name,$email,$username);
    $mapper = new UserMapper();
    $mapper->edit($name, $userId);
    header("Location: ../conf/Dashboard.php");
}