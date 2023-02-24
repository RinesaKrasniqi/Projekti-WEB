<?php
include_once './userMapper.php';
//if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
 //   $mapper =  new UserMapper();
   // $userList = $mapper->getAllUsers();
//} 
//else {
    //header("Location: ../index.php");
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styleDash.css" >
</head>
<body>
<h2>User list:</h2>
    <div class="user">
        <table  class="user-table">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Eamil</td>
                    <td>Username</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $mapper =  new UserMapper();
                $userList = $mapper->getAllUsers();
                foreach ($userList as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><a href=<?php echo "../editdelete/edit.php?id=" . $user['id']; 
                                    ?>>Edit</td>
                        <td><a href=<?php echo "../editdelete/delete.php?id=" . $user['id'];  
                                    ?>>Delete</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
 
</body>
</html>
