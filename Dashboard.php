<?php

require_once '../controllers/MenuControllers.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dental Care</title>

    <style>
        
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
     <table class="content-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Data</th>
                <th>Service</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php
        
        $m=new MenuControllers;
        $allMenu=$m->readData();
        foreach($allMenu as $contact): ?>

        <tr>
            <td><?php echo $contact['name'] ?></td>
            <td><?php echo $contact['email'] ?></td>
            <td><?php echo $contact['number'] ?></td>
            <td><?php echo $contact['date'] ?></td>
            <td><?php echo $contact['service'] ?></td>
            <td><?php echo $contact['message'] ?></td>
        </tr>
        <?php  endforeach:?>
        </tbody>

     </table>
    
</body>
</html>