<?php
require_once 'conf/UserContact.php';
  if(isset($_POST["submit"])){
    $regj= new UserContact();
    $name=$regj->setName($_POST['name']);
    $email=$regj->setEmail($_POST['email']);
    $number=$regj->setPhone($_POST['number']);
    $service=$regj->setService($_POST['service']);
    $message=$regj->setMessage($_POST['message']);
    if(($_POST['name']) || ($_POST['email']) || ($_POST['number']) || ($_POST['service']) || ($_POST['message'])){
      $variabel=$regj->checkContact($email);
      if($variabel){
        echo '<script>alert("You already contacted us!");</script>';
      }
      if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['number']) || empty($_POST['service']) || empty($_POST['message']) ){
        echo '<script>alert("All fields are required !");</script>';
       }else {
        $regj->insertContact();
       echo '<script>alert("You have contacted us succesfully!!");</script>';
      }
    }
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['number']) || empty($_POST['service']) || empty($_POST['message']) ){
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
    <title>My Dental Care</title>
    <link rel="stylesheet" href="styleC.css" >
</head>
<body>
<?php include 'headfooter/header.php';?>
   
  <div class="container-1">
    <h1>CONTACT US</h1>      
  </div>

  <div class="container-2">
        <h2>We'd Love To Hear From You!</h2>
        <p>Have any questions? Ready to become a part of our patient family? NexGen Dentistry is here to help! Let us know <br>how we can assist you below, and our kind team will gladly get back to you.</p>
  </div>

  <div class="container-3">
     <div class="card-email-form">
         <form class="contact-form" method='POST'>
            <p class="field-name">Name:</p>
            <input type="text" class="form-field"  placeholder="Enter your name" id="Name-1" name="name">
            <p class="field-name">Email Address:</p>
            <input type="email" class="form-field" placeholder="Enter your email" id="Email-1" name="email">
            <p class="field-name">Phone Number:</p>
            <input type="tel" class="form-field" placeholder="Enter your phone number" id="Phone-Number-1" name="number">
            <p class="field-name">Write your preffered service:</p>
            <input type="text" class="form-field" placeholder="Enter service:" id="Service-1" name="service">
            <p class="field-name">Message:</p>
            <textarea id="Message"  placeholder="Your message" class="textarea" name="message"></textarea>
            <button type="submit" id="submit" name="submit" class="submit" onclick="validoContact()">Submit</button>
        </form>
     </div>
  </div>

  <?php include 'headfooter/footer.php';?>

<script  type="text/javascript" src="script.js"></script>
</body>
</html>