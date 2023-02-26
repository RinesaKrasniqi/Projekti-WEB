<?php

include_once '../conf/userMapper.php';
include_once '../conf/User.php';

$id =$_GET['id'];
$dhenat = new User();
$dhenat->setId($id);

if(isset($_POST['submit'])){

  if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['username'])) {

    // $datan = $_POST['name'];
    // $datae= $_POST['email'];
    // $datau = $_POST['username'];
 
    $dhenat->setEmri($_POST['name']);
    $dhenat->setEmail($_POST['email']);
    $dhenat->setUsername($_POST['username']);
    
    $rez = new UserMapper();
    $update= $rez->update();
    
    if($update){
      echo "<script>alert('record update successfully');</script>";
    }else{
      echo "<script>alert('record update failed');</script>";
    }
  }
  
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dental Care</title>
    <link rel="stylesheet" href="styleS.css" >
</head>
<body>

   <h2 class="text">Edit</h2>

   <div class="container-1">
     <div class="login-form">
        <form class="form" action="" method="post">
            <p class="field-name">Name</p>
            <input type="text" class="form-control" id="nameInput" name="name" >
            <p class="field-name">Email</p>
            <input type="email" class="form-control" id="email" name="email">
            <p class="field-name">Username</p>
            <input type="text" class="form-control" id="username" name="username"><br>

            <button name="submit" type="submit" value="Update" id="btn-login" class="submit" >Update</button>
        </form>
    </div>
   </div>

</body>
</html>
