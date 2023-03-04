<?php
require_once 'conf/conn.php';
require_once 'conf/loginVerify.php';
require_once 'conf/User.php';

if (isset($_POST['login'])) {
  require_once 'conf/loginVerify.php';
  $info=new loginVerify();
  $username=$info->setUsername($_POST['username']);
  $password=$info->setPassword($_POST['password']);
  $username1=$_POST['username'];
  $password1=$_POST['password'];
  $login=$info->login();
  $user=new loginVerify();
  $verifikim=$user->userandpassCorrect($username1,$password1);
    if($login){
      if($verifikim){
       header('Location: conf/Dashboard.php');
      }else{
         header('Location: index.php');
      }
    }else{
      echo 'diqka keq o tu ndodh';
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
    <link rel="stylesheet" href="styleL.css" >
</head>
<body>
<?php include_once 'headfooter/header.php';?>
 
   <h2 class="text">Have we met?</h2>

   <div class="container-1">
     <div class="login-form">
        <form class="form" action="login.php" method ="POST">
            <p class="field-name">Username</p>
            <input type="text" class="form-control" id="usernameInput" name="username">
            <p class="field-name">Password</p>
            <input id="passwordInput" type="password" class="form-control"  name="password">
            <button type="submit" id="btn-login" name="login" class="submit" >Submit</button>
        </form>
    </div>
   </div>

   <div class="divider-2"></div>

   <div class="create-box">
    <p>Don't have an account ?</p>
    <a class="create-acc" href="signup.php">Create an account</a>
   </div>

   <div class="divider-2"></div>
   <div class="login"><a href="../logout.php" >Log Out</a></div>

   <?php include_once 'headfooter/footer.php';?>

<script  type="text/javascript" src="script.js"></script>
</body>
</html>