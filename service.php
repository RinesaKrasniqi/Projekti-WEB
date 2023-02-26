<?php
require_once 'conf/conn.php';
require_once 'conf/userMapper.php';

$mapper =  new UserMapper();
$userList = $mapper->getAllPlan();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dental Care</title>
    <meta name ="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styleService.css" >
</head>
<body>

  <?php include 'headfooter/header.php';?>

   <div class="Teksti"> <h5>Pick a service you want to apply at an appointment for</h5></div>
   <?php  foreach ($userList as $user) {?>
   <div class="container">
   <?php 

//foreach($arraylist1 as $i){
   <div class="product1"><a href="contact.php">';
   <img class="img-p" src="'$user['src']'">';
   '<h5>'$user["pershkrimi"]'</h5>';
   '<h3>' <?php echo $user["cmimi"]  ?> '€</h3>';
    '</a></div>';
//}

 ?>
 </div>
 <div class="container1">
   <?php 

//foreach($arraylist2 as $i){
   echo '<div class="product1"><a href="contact.php">';
   echo '<img class="img-p" src="'.$user["src"].'">';
   echo '<h5>'.$user["pershkrimi"].'</h5>';
   echo '<h3>'.$user["cmimi"].'€</h3>';
   echo '</a></div>';
//}

 ?>
 </div>
 <div class="container2">
   <?php 

//foreach($arraylist3 as $i){
   echo '<div class="product1"><a href="contact.php">';
   echo '<img class="img-p" src="'.$user["src"].'">';
   echo '<h5>'.$user["pershkrimi"].'</h5>';
   echo '<h3>'.$user["cmimi"].'€</h3>';
   echo '</a></div>';
//}

 ?>
 </div>
 <?php  }  ?>


<?php include 'headfooter/footer.php';?>
      
</body>
</html>
