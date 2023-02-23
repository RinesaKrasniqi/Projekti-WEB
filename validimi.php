<?php
require 'function.php';


if(isset($_POST['submit'])){
    session_start();
    $user=$_POST['usernameemail'];
     $pass=$_POST['password'];
     validimi($user,$pass);
     header("Location: index.php");
     $userdb=new Connection();
    }

function  validimi($username,$pass){
    $userdb=new Connection();
    $rows=$userdb->readData();
    foreach($rows as $useri){
        if($user==$useri['username']){

            if(($pass == $useri['password'])){
                if($useri['Roli']!=0){

                    $admin=new Admin($useri['name'],$useri['email'],$useri['username'],$useri['password']);
                    $admin->setCookie();
                    $admin->setSession();
                    echo "<script>alert('successfull');</script>";
                    header("Location: index.php");
                    return true;
                }
                else if($useri['Roli']==0){
                    $userT=new Useri($useri['name'],$useri['email'],$useri['username'],$useri['password']);
                    $userT->setCookie();
                    $userT->setSession();
                    header("Location: index.php");
                    return true;
                }
            }
        }
        else{
            header("Location: index.php");
            return false; 
        }
    }

}

?>