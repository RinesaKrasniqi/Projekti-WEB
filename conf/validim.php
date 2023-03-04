<?php
include_once 'Admin.php';
include_once 'User.php';
include_once 'userMapper.php';
//include_once '../signup.php';
//include_once '../login.php';
//include_once '../script.php';


class LoginLogic {
    private $username;
    private $password;

    public function __construct($username,$password){
     $this->username =$username;
     $this->password =$password;
    }

    public function verifyData(){
        if($this->variablesNotDefindedWell($this->username,  $this->password)) {
            //echo '1';
            header("Location: ./index.php");
        }else if ($this->usernameAndpasswordiCorrect($this->username,  $this->password)){
            //echo '2';
            header("Location: ./Dashboard.php?login=success");
        }else {
            //echo '3';
            header("Location: ./contact.php");
        }
    }

    public function variablesNotDefindedWell($username,$password){
        if(empty($username) || empty($password)){
            return true;
        }
         return false;
    }

     public function usernameAndpasswordiCorrect($username,$password){
          $mapper = new UserMapper();
          $user = $mapper->getUserByUsername($username);

          if($user == null || count($user) == 0){
             return false;
          }else if($password == $user['password']){
              if($user['role' == 1]){
                $obj = new Admin($user['name'], $user['email'],$user['username'],$user['password'],$user['role']);
                $obj->setSession();
              }else{
                $obj = new User($user['name'], $user['email'],$user['username'],$user['password'],$user['role']);
                $obj->setSession();
              }
              return true;

          }else {
            return false;
          }

     }

}

// if(isset($_POST['submit']))
//     {
//     $user=new User();
//     $name=$POST['nameInput'];
//     $pass=$POST['password'];


//  /*   $validimi='<script>validoSignUp()</script>';
//  if(empty($name) || empty($pass)){
//             header("Location: login.php");
//         }
//     if($validimi){

//         if(validimi($name,$pass)){
//             header("Location: index.php");
//         }
//         else{
//             header("Location: login.php");
//         }
//     }
//     else{
//         header("Location: login.php");
//     }
// }*/

//     function  validimi($name,$pass){
//         // global $perdoruesit;

//         $userdb=new User();
//         $rows=$userdb->fetch("submit");
//         foreach($rows as $useri){
//             if($user==$useri['Username']){

//                 if(password_verify($pass,$useri['password'])){
//                     session_start();
//                     if($useri['role']!=0){
//                         $admin=new Admin($useri['name'],$useri['email'],$useri['username'],$useri['password']);
//                         $admin->setCookie();
//                         $admin->setSession();
//                         echo "<script>alert('successfull');</script>";
//                         header("Location: index.php");
//                         return true;
//                     }
//                     else if($useri['role']==0){
//                         $userT=new Useri($useri['name'],$useri['email'],$useri['username'],$useri['password']);
//                         $userT->setCookie();
//                         $userT->setSession();
//                         header("Location: index.php");
//                         return true;
//                     }
//                 }
//             }
//             else{
//                 header("Location: index.php");
//                 return false; 
//             }
//         }
//     }
// }
        
    ?>