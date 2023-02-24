<?php
 require '../conf/userMapper.php';

 if(isset($_GET['id'])){
    $contactId = $_GET['id'];
  }

  $contact = new UserMapper;
  $contact->delete($contactId);
?>