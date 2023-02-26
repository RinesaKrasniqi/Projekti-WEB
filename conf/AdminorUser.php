<?php

include('User.php');
include('Admin.php');

    function  validimi($username,$password){
        $userdb=new User();
        $rows=$userdb->fetch();
        foreach($rows as $useri){
            if($user==$useri['username']){
                    session_start();
                    if($useri['role']!=0){
                        $admin=new Admin($useri['name'],$useri['email'],$useri['username'],$useri['password']);
                        $admin->setCookie();
                        $admin->setSession();
                        echo "<script>alert('successfull');</script>";
                        header("Location: conf/Dashboard.php");
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