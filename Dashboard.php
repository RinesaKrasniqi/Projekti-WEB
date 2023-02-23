<?php
 require 'function.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Contact</title>

    <style>
         *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat','sans-serif';
}

header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: black;
    position: fixed;
    z-index: 0;
    width: 100%;
    /*position: sticky;
    top: 0;*/
}

.logo{
    margin-top:  5px;
    margin-bottom:  5px;
    margin-left: 20px;
 
 }


.nav ul.nav-list {
    list-style-type: none;
    justify-content: space-between;
}

.nav ul li {
    display: inline-block;
    position: relative;
}

.nav ul li a {
    text-decoration: none;
    font-size: 18px;
    display: block;
    font-weight: 300;
    color: #c4af71;
    margin-right: 40px;  
}

.nav ul li a:hover {
  color: aliceblue;
}

.book-appointment a {
    display: flex;
    text-decoration: none;
    text-decoration-color: none;
    color: #695723 ;
    background-color: #c4af71;
    width: 250px;
    height: 50px;
    position: relative;
    right: 20px;
    justify-content: center;
    align-items: center;

}

.book-appointment a:hover{
    color: aliceblue;
    background-color: #9d7a13;      
}
.login a {
    display: flex;
    text-decoration: none;
    text-decoration-color: none;
    color: #fff ;
    background-color: #9d7a13;
    width: 200px;
    height: 50px;
    position: relative;
    right: 20px;
    justify-content: center;
    align-items: center;
}

.login a:hover{
    color: #695723;
    background-color: #c4af71;       
}
         .content-table {
            width: 100%;
            background-color: #9d7a13;
            padding: 20px;
            border-radius: 10px;
         }

         .content-table thead tr th {
            color: aliceblue;
            font-size: 16px;
         }

     </style>

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
                         require 'Dashboard.php';
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

</body>
</html>