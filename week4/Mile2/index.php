<?php 

session_start();

include_once('myincludes.php');
$username = "";
$password = "";
$msg = "";

if(isset($_SESSION["isLoggedin"])){
    if($_SESSION["isLoggedin"] == true){
        header('Location: account.php');        
    }
}

$usernameValidator = new UsernameValidator;
$passwordValidator = new PasswordValidator;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['username'])){
        $_SESSION['user'] = $_POST['username'];
        if($usernameValidator->isValid($_SESSION["user"])){
            if(isset($_POST['password'])){
                $_SESSION['pass'] = $_POST['password'];
                if($passwordValidator->isValid($_SESSION['pass'])){
                    $_SESSION["isLoggedin"] = true;
                    return header('Location: account.php');
                    exit();
                }
                else {
                    $msg = "Your password is invalid";
                }
            }
        }else {
            $msg = "Your username is invalid";
        }
    
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower|Amatic+SC|Bangers|Fredericka+the+Great|Black+Ops+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <label>Username:</label>
            <input type="text" name="username">       
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password">
        </div>

        <button>Login</button>
    </form>

    <div class="errors">
        <span><?= $msg ?></span>
    </div>
</body>
</html>