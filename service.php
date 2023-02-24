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
      
</body>
</html>
