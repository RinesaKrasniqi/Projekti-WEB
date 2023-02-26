<?php

include_once '../conf/userMapper.php';
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
     <?php
              include_once '../conf/User.php';
              $model = new User();
              $id = $_GET['id'];
              $row = $model->edit($id);
 
              if (isset($_POST['submit'])) {
                if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['username'])) {
                     
                    $data['id'] = $id;
                    $data['name'] = $_POST['name'];
                    $data['email'] = $_POST['email'];
                    $data['username'] = $_POST['username'];
 
                    $update = $model->update($data);
 
                    if($update){
                      echo "<script>alert('record update successfully');</script>";
                      echo "<script>window.location.href = '../conf/Dashboard.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = '../conf/Dashboard.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: edit.php?id=$id");
                  }
                }
          ?>
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
