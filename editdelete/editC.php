<?php
include_once '../conf/userMapper.php';   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dental Care</title>
    <link rel="stylesheet" href="styleS.css" >
</head>
<body>

   <h2 class="text">Edit</h2>

   <div class="container-1">
     <div class="login-form">
     <?php
              include_once '../conf/UserContact.php';
              $model = new UserContact();
              $id = $_GET['id'];
              $row = $model->editC($id);
 
              if (isset($_POST['submit'])) {
                if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['service']) && isset($_POST['message'])) {
                     
                    $data['id'] = $id;
                    $data['name'] = $_POST['name_c'];
                    $data['email'] = $_POST['email_c'];
                    $data['phone'] = $_POST['number_c'];
                    $data['service'] = $_POST['service_c'];
                    $data['message'] = $_POST['message_c'];
 
                    $update = $model->updateC($data);
 
                    if($update){
                      echo "<script>alert('record update successfully');</script>";
                      echo "<script>window.location.href = '../conf/Dashboard.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = '../conf/Dashboard.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: editC.php?id=$id");
                  }
                }
          ?>
     <form class="contact-form" action="" method="post">
            <p class="field-name">Name:</p>
            <input type="text" class="form-field"  placeholder="Enter your name" id="Name-1" name="name_c">
            <p class="field-name">Email Address:</p>
            <input type="email" class="form-field" placeholder="Enter your email" id="Email-1" name="email_c">
            <p class="field-name">Phone Number:</p>
            <input type="tel" class="form-field" placeholder="Enter your phone number" id="Phone-Number-1" name="number_c">
            <p class="field-name">Write your preffered service:</p>
            <input type="text" class="form-field" placeholder="Enter service:" id="Service-1" name="service_c">
            <p class="field-name">Message:</p>
            <textarea id="Message"  placeholder="Your message" class="textarea" name="message_c"></textarea>

           <button name="submit" type="submit" id="btn-login" class="submit" >Update</button>
        </form>
    </div>
   </div>

</body>
</html>
