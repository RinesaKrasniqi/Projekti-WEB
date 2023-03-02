<?php 
  require_once 'conf/User.php';
  require_once 'conf/Admin.php';
  require_once 'conf/conn.php';


  if(isset($_POST["submit"])){
    $regj= new User();
    $name=$regj->setEmri($_POST['nameInput']);
    $email=$regj->setEmail($_POST['email']);
    $email1=$_POST['email'];
    $username=$regj->setUsername($_POST['username']);
    $pass=$regj->setPassword($_POST['password']);
    //$role=$regj->setRole($_POST['role']);
    if(($_POST['nameInput']) || ($_POST['email']) || ($_POST['username']) || ($_POST['password'])){
      $variabel=$regj->checkUser($email);
      if($variabel){
        echo '<script>alert("this user already exists !");</script>';
      }else {
        $regj->insertUser();
       echo '<script>alert("you are succesfully registred!!");</script>';
      }

    }
    if(empty($_POST['nameInput']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password']) ){
      echo '<script>alert("All fields are required !");</script>';
     }
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
        <form class="form" action="" method="post">
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

<script  type="text/javascript" src="script.php"></script>
</body>
</html>
