<?php 

session_start();

$_SESSION["isLoggedIn"] = false;

header('refresh:5;url=sessionsprac.php');

echo 'Youll be redirected in 5 secs. If not, click <a href="sessionsprac.php">here</a>';


?>