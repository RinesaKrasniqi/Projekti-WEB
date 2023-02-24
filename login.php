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
<?php include 'headfooter/header.php';?>
 
   <h2 class="text">Have we met?</h2>

   <div class="container-1">
     <div class="login-form">
        <form class="form" action="#" method ="POST">
            <p class="field-name">Username</p>
            <input type="text" class="form-control" id="usernameInput" name="username">
            <p class="field-name">Password</p>
            <input id="passwordInput" type="password" class="form-control"  name="password">

            <button type="submit" id="btn-login" class="submit" onclick="valido()">Submit</button>
        </form>
    </div>
   </div>

   <div class="divider-2"></div>

   <div class="create-box">
    <p>Don't have an account ?</p>
    <a class="create-acc" href="signup.php">Create an account</a>
   </div>

   <?php include 'headfooter/footer.php';?>

<script  type="text/javascript" src="script.js"></script>
</body>
</html>