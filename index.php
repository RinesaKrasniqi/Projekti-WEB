<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dental Care</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="Images/logo.png" class="logo" width="70px">
        </div>
        <nav class="nav" >
          <ul class="nav-list">
            <li><a href="index.php">HOME</a></li>
            <?php 
                    
                    if (isset($_SESSION['roli'])&& $_SESSION['roli']==1) {
                         echo '<li><a href="Dashboard.php">Dashboard</a></li>';
                         }
            ?>
            <li><a href="dental.php">DENTAL PLAN</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="service.php">SERVICES</a></li>
            <li><a href="contact.php">CONTACT</a></li>
           </ul>
        </nav>
        <div class="login"><a href="login.php" >Log In</a></div>
        <div class="login"><a href="logout.php" >Log out</a></div>
        <div class="book-appointment"><a href="contact.php" >Book Your Appointment</a></div>

   </header>

   <div class="container">
       <div>
        <img src="Images/image1.jpg" class="photo1" style="height: 100%; width: 610px;">
        <p>EXCEPTIONAL CARE FOR <br> CHILDREN AND ADULTS</p>
        <img src="Images/logo.png" class="logo2" width="150px">
        <div class="button-call">CALL: O45-919-115</div>
       </div>

       <div>
        <img src="Images/image2.jpg" class="photo2" style="height: 100%; width: 659px;">
       </div> 
   </div>
    
   
   <div class="container-2">
       <p class="paragraph-1">WELCOME TO MY DENTAL CARE</p>
        <h1>Quality Family Dental Care For You</h1>
        <p class="paragraph-2">At My Dental Care, we're providing high quality family dentistry with a personalized and inclusive approach. Dr. <br>Yavari and her skilled team are creating healthy, beautiful smiles for families in an energized, modern,<br> and upbeat atmosphere. Here, we keep appointments comfortable and enjoyable, so every family can brighten their <br> smiles with compassionate, expert dentistry. From gentle care for kids to cosmetic services, our team is passionate<br> about helping you shine with excellent oral health, and empowering our patients with lasting, confident <br>smiles.</p>
   </div>

   <section class="section-1">
    <div class="slider">
       <div class="slide">
           <input type="radio" name="radio-btn" id="radio1">
           <input type="radio" name="radio-btn" id="radio2">
           <input type="radio" name="radio-btn" id="radio3">
           <input type="radio" name="radio-btn" id="radio4">

           <div class="st first">
            <img src="Images/dental-office.png">
           </div>
           <div class="st">
            <img src="Images/dentist-patient-kid.jpg">
           </div>
           <div class="st">
            <img src="Images/dentist-patient.jpg">
           </div>

            <div class="nav-auto"> 
               <div class="a-b1"></div>
               <div class="a-b1"></div>
               <div class="a-b1"></div>
            </div>
        </div>
      <div class="nav-m">
        <label for="radio1" class="m-btn"></label>
        <label for="radio2" class="m-btn"></label>
        <label for="radio3" class="m-btn"></label>
      </div>
    </div>
</section>

<div class="container-3">
    <p class="paragraph-3-1">BRINGING BACK BRIGHTER BEAMS</p>
    <h1 class="h1-3">Before And Afters</h1>
    <p class="paragraph-3-2">It's our privilege to provide hope and restore confidence in patients' smiles. With state-of-the-art tools, advanced <br> treatment methods, and a team of caring dental professionals, no smile is ever too far gone at My Dental Care. If <br> you're seeking restorative care, Dr. Yavari is here to provide comfortable, natural, and durable results.</p>
</div>


<img  class="before-img" src="Images/before.jpg">
<img  class="after-img" src="Images/after.jpg">

<div class="before-text">Before</div>
<div class="after-text">After</div>


<section class="section-2">
  <div class="cotainer-4">
      <p class="paragraph-4">WE LOVE MEETING NEW SMILES</p>
      <h2 class="h2-4">Get Started With Our $49 New Patient Special!</h2>
  </div>
</section>


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
                    <li><span>MON:</span>7:00am - 5:00pm</li>
                    <li><span>TUE:</span>7:00am - 5:00pm</li>
                    <li><span>WED:</span>7:00am - 3:00pm</li>
                    <li><span>THURS:</span>7:00am - 5:00am</li>
                    <li><span>FRI:</span>7:00am - 3:00pm</li>
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