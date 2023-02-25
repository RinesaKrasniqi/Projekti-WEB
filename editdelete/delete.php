<?php
include_once '../conf/userMapper.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new UserMapper();
    $mapper->deleteUser($userId);
    header("Location: ../conf/Dashboard.php");
}

?>