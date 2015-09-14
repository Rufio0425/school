<?php

session_start();

if(isset($_SESSION['username']) && strlen($_SESSION['username'])) {
    header('Location: account.php');
    exit();
} else{
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['username']) && isset($_POST['password'])) {
            if(strlen($_POST['password']) == 7) {
                $_SESSION['username'] = $_POST['username'];
                header('Location: account.php');
                exit();
            }
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
    <form action="account.php" method="POST">

        <div>
            <label>Username:</label>
            <input type="text" name="username" value="">
            <span class="error">Error Message Here</span>            
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password" value="">
            <span class="error">Error Message Here</span>            
        </div>

        <button>Login</button>

    </form>
</body>
</html>






