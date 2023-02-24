<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dental Care</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>
   <?php include 'headfooter/header.php';?>

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

<?php include 'headfooter/footer.php';?>

<script  type="text/javascript" src="script.js"></script>
</body>
</html>