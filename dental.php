<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dental Care</title>
    <link rel="stylesheet" href="styleD.css" >
</head>
<body>
<?php include 'headfooter/header.php';?>


   <h2 class="h2">Dental Plan</h2>

   <?php
                require_once 'conf/userMapper.php';
                $mapper =  new UserMapper();
                $userList = $mapper->getAllPlan();
                foreach ($userList as $user) {
                ?>
                   <h3 class="h3"><?php echo $user["plan_name"]?></h3>
                   <p class="first-p" ><?php echo $user["plans"]?></p>
    
                <?php
                }
                ?>
   
         <div class="button-box" >
           <a href="contact.html" class="button">SIGN UP</a>
         </div>


         <?php include 'headfooter/footer.php';?>

<script  type="text/javascript" src="script.js"></script>
</body>
</html>