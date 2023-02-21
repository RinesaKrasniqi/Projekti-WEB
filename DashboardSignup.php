<?php
require_once 'MenuControllerSignup.php';

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Signup</title>
    <style>
        
         .content-table {
            width: 100%;
            background-color: blue;
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
 <table class="content-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
         <?php
            //include

        $m=new MenuController();
        $allMenu=$m->readData();
        foreach($allMenu as $contact): ?>

        <tr>
            <td><?php echo $contact['name'] ?></td>
            <td><?php echo $contact['email'] ?></td>
            <td><?php echo $contact['username'] ?></td>
            <td><?php echo $contact['password'] ?></td>
            <td><a href="">Edit</td>
            <td><a href="">Delete</td>
        </tr>
        <?php  endforeach;?>
        </tbody>

     </table>

 </body>
 </html>

