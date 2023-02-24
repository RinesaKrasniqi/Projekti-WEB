<?php 
  require_once 'conf/User.php';

  if (isset($_POST['submit'])){
    $regj= new User();
    $regj->setEmri($_POST['nameInput']);
    $regj->setEmail($_POST['email']);
    $regj->setUsername($_POST['username']);
    $regj->setPassword($_POST['password']);
    $regj->insertUser();
    echo '<script>alert("ok register");</script>';
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

<?php include 'headfooter/header.php';?>

   <h2 class="text">Sign Up</h2>

   <div class="container-1">
     <div class="login-form">
        <form class="form" action="" method="post" autocomplete="off">
            <p class="field-name">Name</p>
            <input type="text" class="form-control" id="nameInput" name="nameInput">
            <p class="field-name">Email</p>
            <input type="email" class="form-control" id="email" name="email">
            <p class="field-name">Username</p>
            <input type="text" class="form-control" id="username" name="username">
            <p class="field-name">Password</p>
            <input id="password" type="password" class="form-control" name="password">

            <button name="submit" type="submit" id="btn-login" class="submit" onclick="validoSignUp()">Sign Up</button>
        </form>
    </div>
   </div>

  
<?php include 'headfooter/footer.php';?>

<script  type="text/javascript" src="script.js"></script>
</body>
</html>