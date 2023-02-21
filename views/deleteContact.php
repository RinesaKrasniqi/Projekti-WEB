<?php
 require 'MenuControllers.php';

 if(isset($_GET['id'])){
    $contactId = $_GET['id'];
  }

  $contact = new MenuController;
  $contact->delete($contactId);
?>