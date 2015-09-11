<?php 
session_start();

unset($_SESSION['username']);

header('refresh:5;url=login.php');

echo 'Youll be redirected in 5 secs. If not, click <a href="login.php">here</a>';


?>

