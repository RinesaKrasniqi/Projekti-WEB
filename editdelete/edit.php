<?php

include_once '../conf/userMapper.php';
include_once '../conf/User.php';

if (!isset($_SESSION)) {
    session_start();
 }

 if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
 }else{
    $id = '';
 };
 
 if(isset($_POST['submit'])){
    $userId = $_GET['id'];
    $name = $_GET['nameInput'];
    $email= $_GET['email'];
    $username = $_GET['username'];
    $simpleUser = new User($name,$email,$username);
    $mapper = new UserMapper();
    $mapper->update($simpleUser, $userId);

 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dental Care2</title>
    <link rel="stylesheet" href="styleS.css" >
</head>
<body>

   <h2 class="text">Sign Up</h2>

   <div class="container-1">
     <div class="login-form">
        <form class="form" action="" method="post" autocomplete="off">
            <p class="field-name">Name</p>
            <input type="text" class="form-control" id="nameInput" name="nameInput" >
            <p class="field-name">Email</p>
            <input type="email" class="form-control" id="email" name="email">
            <p class="field-name">Username</p>
            <input type="text" class="form-control" id="username" name="username">

            <button name="submit" type="submit" value="Update" id="btn-login" class="submit" onclick="validoSignUp()" >Update</button>
        </form>
    </div>
   </div>

</body>
</html>
