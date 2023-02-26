<?php
include_once 'Admin.php';
include_once 'User.php';
//include_once '../signup.php';
//include_once '../login.php';
//include_once '../script.php';

if(isset($_POST['submit']))
    {
    $user=new User();
    $name=$POST['nameInput'];
    $pass=$POST['password'];


    $validimi='<script>validoSignUp()</script>';
 if(empty($name) || empty($pass)){
            header("Location: login.php");
        }
    if($validimi){

        if(validimi($name,$pass)){
            header("Location: index.php");
        }
        else{
            header("Location: login.php");
        }
    }
    else{
        header("Location: login.php");
    }
}

    function  validimi($name,$pass){
        // global $perdoruesit;

        $userdb=new User();
        $rows=$userdb->fetch("submit");
        foreach($rows as $useri){
            if($user==$useri['Username']){

                if(password_verify($pass,$useri['password'])){
                    session_start();
                    if($useri['role']!=0){
                        $admin=new Admin($useri['name'],$useri['email'],$useri['username'],$useri['password']);
                        $admin->setCookie();
                        $admin->setSession();
                        echo "<script>alert('successfull');</script>";
                        header("Location: index.php");
                        return true;
                    }
                    else if($useri['role']==0){
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