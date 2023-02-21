<?php
require_once 'MenuControllers.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Contact</title>

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
                <th>Phone</th>
                <th>Data</th>
                <th>Service</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
         <?php
            //include

        $m=new MenuController();
        $allMenu=$m->readData();
        foreach($allMenu as $contact): ?>

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
        <?php  endforeach;?>
        </tbody>

     </table>

</body>
</html>