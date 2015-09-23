<?php

include_once('myincludes.php');
$username = "";
$password = "";
$msg = "";

if(isset($_SESSION["isLoggedIn"])){
    if($_SESSION["isLoggedIn"] == true){
        header('Location: account.php');
    }
}


$usernameValidator = new UsernameValidator;
$passwordValidator = new PasswordValidator;


if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST['username'])){
        $_SESSION['user'] = $_POST['username'];
        if($usernameValidator->isValid($_SESSION['user'])){
            if(isset($_POST['password'])){
                $_SESSION['pass'] = $_POST['password'];
                if($passwordValidator->isValid($_SESSION['pass'])){
                    $_SESSION['isLoggedIn'] = true;
                    return header('Location: account.php');
                    exit();
                } else {
                    $msg = "Your password in Invalid";
                } 
            } 
        } else {
            $msg = "Your username is Invalid";
        }
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="POST">

        <div>
            <label>Username:</label>
            <input type="text" name="username" value="">            
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password" value="">           
        </div>

        <button>Login</button>

        <div><?= $msg;  ?></div>

    </form>
</body>
</html>