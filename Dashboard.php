<?php
 require 'function.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleDash.css">
    <title>Dashboard Contact</title>
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
             if ( isset($_SESSION['roli'])&&$_SESSION['roli']==1) {
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

   <h2 class="h2-c">Contact from customers</h2>

<div class="klineti-content">
     <table class="content-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Data</th>
                <th>Service</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
         <?php
            //include
             $m=new Connection();
             $allMenu=$m->readData();
             if($allMenu != null){
             foreach($allMenu as $contact){?>
        <tr>
            <td><?php echo $contact['name_c'] ?></td>
            <td><?php echo $contact['email_c'] ?></td>
            <td><?php echo $contact['phone_c'] ?></td>
            <td><?php echo $contact['date_c'] ?></td>
            <td><?php echo $contact['service_c'] ?></td>
            <td><?php echo $contact['message_c'] ?></td>
            <td><a href="editContact.php?id=<?php echo $contact['ID'];?>">Edit</td>
            <td><a href="deleteContact.php?id=<?php echo $contact['ID'];?>">Delete</td>
        </tr>
        <?php  }}?>
        </tbody>

     </table>

             </div>

</body>
</html>