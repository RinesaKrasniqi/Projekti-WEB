<?php
include_once './userMapper.php';
/*if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllUsers();
} else {
    header("Location: ../index.php");
}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>
    <div>
        <h2>User list:</h2>
        <table>
            <thead>
                <tr>
                    <td>Username</td>
                    <td>Mosha</td>
                    <td>Detajet</td>
                    <td>Modifiko</td>
                    <td>Fshij</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($userList as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['age']; ?></td>
                        <td><a href=<?php echo "../businessLogic/detailsUser.php?id=" . $user['id']; //to be continued 
                                    ?>>Detajet</a></td>
                        <td><a href=<?php echo "../businessLogic/modifyUser.php?id=" . $user['id']; //to be continued
                                    ?>>Modifiko</td>
                        <td><a href=<?php echo "../businessLogic/deleteUser.php?id=" . $user['id']; //to be continued 
                                    ?>>Fshij</td>
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
