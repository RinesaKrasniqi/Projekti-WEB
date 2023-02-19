<?php
require_once '../controllers/MenuControllers.php';

  $menu = new MenuControllers;

  if(isset($_POST['submit'])){
    $menu -> insert($_POST);
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
    <header class="header">
        <div class="logo">
            <img src="Images/logo.png" class="logo" width="70px">
        </div>
        <nav class="nav" >
          <ul class="nav-list">
            <li><a href="index.php">HOME</a></li>
            <li><a href="dental.php">DENTAL PLAN</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="service.php">SERVICES</a></li>
            <li><a href="contact.php">CONTACT</a></li>
           </ul>
        </nav>
        <div class="login"><a href="login.php" >Log In</a></div>
        <div class="book-appointment"><a href="contact.php" >Book Your Appointment</a></div>
   </header>
   
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
            <input type="date" class="form-field" placeholder="Choose your date" id="datepicker" name="data_c">
            
            <p class="field-name">Services:</p>
            <select name="teeth" id="teeth" class="form-field" name="service_c">
              <option value="toothcleaning">Teeth cleaning</option>
              <option value="retainers">Retainers</option>
              <option value="charcoal">Teeth whitening treatment with charcoal</option>
              <option value="Tooth filling">Tooth Filling</option>
              <option value="crownplacement">Crown placement per tooth</option>
              <option value="braces">Braces</option>
              <option value="bracesrubbebands">Braces with rubber bands</option>
              <option value="icontreatment">Icon Treatment</option>
              <option value="iconTreatmentlowerupperteeth">Icon Treatment for lower or upper teeth</option>
              <option value="toothremoval">Tooth removal</option>
              <option value="veneerpertooth">Veneer</option>
              <option value="teethwhitetingwithLED">Teeth whiteting with LED lights</option>
            </select>
            
            <p class="field-name">Message:</p>
            <textarea id="Message"  placeholder="Your message" class="textarea" name="message_c"></textarea>
            <input type="submit" class="submit" id="submit" name="submit">
        </form>
     </div>
  </div>

   <div class="header-1"><h3>KEEPING NATIONAL CITY <br> SMILING</h3></div>
<div class="footer">
     <div class="info-list">
         <h2 class="header-2">Visit My Dental Care Dentistry <br>Today!</h2>
         <div class="divider"></div>
         <div class="info">
               <div class="phone-address-email">
                  <h5>PHONE</h5>
                  <p>045-919-115</p>
                  <p>045-457-596</p>
                   
                  <h5 style="margin-top: 20px;">ADDRESS</h5>
                  <p>9905 Allisonville Rd</p>
                  <p>Fishers</p>
                  <p>IN 46038</p>
                  <p>United States</p>

                  <h5 style="margin-top: 20px;">EMAIL</h5>
                  <p>info@myDentalCare.com</p>
                 
               </div>
               <div class="hours">
                  <h5>HOURS</h5>
                  <ul class="info-list">
                    <li><span>MON:</span>7:00aam - 5:00pm</li>
                    <li><span>TUE:</span>7:00aam - 5:00pm</li>
                    <li><span>WED:</span>7:00aam - 3:00pm</li>
                    <li><span>THURS:</span>7:00aam - 5:00am</li>
                    <li><span>FRI:</span>7:00aam - 3:00pm</li>
                  </ul>
               </div>
         </div>
     </div>
      
     <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3059.411166996941!2d-86.059843!3d39.9321917!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8814b2dc2e00cbd9%3A0x6ad1a9dbc1d55ebe!2sMy%20Dental%20Care!5e0!3m2!1sen!2s!4v1671559571728!5m2!1sen!2s" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
</div>

<div class="footer-end">
  <p>@ My Dental Care Dentistry 2022</p>
</div>

<script  type="text/javascript" src="script.php"></script>
</body>
</html>