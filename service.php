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
   <?php  include 'products.php'?>
   <div class="container">
   <?php 

foreach($arraylist1 as $i){
   echo '<div class="product1"><a href="contact.php">';
   echo '<img class="img-p" src="'.$i["src"].'">';
   echo '<h5>'.$i["pershkrimi"].'</h5>';
   echo '<h3>'.$i["cmimi"].'€</h3>';
   echo '</a></div>';
}

 ?>
 </div>
 <div class="container1">
   <?php 

foreach($arraylist2 as $i){
   echo '<div class="product1"><a href="contact.php">';
   echo '<img class="img-p" src="'.$i["src"].'">';
   echo '<h5>'.$i["pershkrimi"].'</h5>';
   echo '<h3>'.$i["cmimi"].'€</h3>';
   echo '</a></div>';
}

 ?>
 </div>
 <div class="container2">
   <?php 

foreach($arraylist3 as $i){
   echo '<div class="product1"><a href="contact.php">';
   echo '<img class="img-p" src="'.$i["src"].'">';
   echo '<h5>'.$i["pershkrimi"].'</h5>';
   echo '<h3>'.$i["cmimi"].'€</h3>';
   echo '</a></div>';
}

 ?>
 </div>


<?php include 'headfooter/footer.php';?>
      
</body>
</html>
