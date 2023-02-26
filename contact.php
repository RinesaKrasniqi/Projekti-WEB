<?php
require_once 'conf/UserContact.php';
  if(isset($_POST["submit"])){
    $regj= new UserContact();
    $name=$regj->setName($_POST['name_c']);
    $email=$regj->setEmail($_POST['email_c']);
    $number=$regj->setPhone($_POST['number_c']);
    $service=$regj->setService($_POST['service_c']);
    $message=$regj->setMessage($_POST['message_c']);
    $exists=$regj->existsC();
    if(empty($_POST['name_c']) || empty($_POST['email_c']) || empty($_POST['number_c']) || empty($_POST['service_c'])|| empty($_POST['message_c']) ){
      echo '<script>alert("All fields are required");</script>';
    }else if ($exists){
      echo '<script>alert("You have already contacted us!");</script>';
    }else{

    $regj->insertUserContact();
    echo '<script>alert("you are succesfully registred!!");</script>';
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
            <input type="submit" class="submit" id="submit" name="submit" onclick="validoContact()">
        </form>
     </div>
  </div>

  <?php include 'headfooter/footer.php';?>

<script  type="text/javascript" src="script.php"></script>
</body>
</html>