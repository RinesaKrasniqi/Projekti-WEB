<?php

include_once '../conf/userMapper.php';
include_once '../conf/User.php';

if (isset($_POST['submit'])) {
  if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['username'])) {

   $nameD = $_GET['name'];
   $emailD = $_GET['email'];
   $usernameD = $_GET['username'];
   $user=array("name"=>"$nameD","email"=>"$emailD","username"=>"$usernameD","id"=>$userIdD);
  
   $mapper = new UserMapper();
   $update = $mapper->update($user);
   
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
     <form class="contact-form" method='POST'>
            <p class="field-name">Name:</p>
            <input type="text" class="form-field"  placeholder="Enter your name" id="Name-1" name="name_c">
            <p class="field-name">Email Address:</p>
            <input type="email" class="form-field" placeholder="Enter your email" id="Email-1" name="email_c">
            <p class="field-name">Phone Number:</p>
            <input type="tel" class="form-field" placeholder="Enter your phone number" id="Phone-Number-1" name="number_c">
            <p class="field-name">Preferred Appointment Date:</p>
            <input type="date" class="form-field" placeholder="Choose your date" id="datepicker" name="date_c">
            <p class="field-name">Write your preffered service:</p>
            <input type="text" class="form-field" placeholder="Enter service:" id="Service-1" name="service_c">
            <p class="field-name">Message:</p>
            <textarea id="Message"  placeholder="Your message" class="textarea" name="message_c"></textarea>
            <input type="submit" class="submit" id="submit" name="submit"">
        </form>
    </div>
   </div>

</body>
</html>
