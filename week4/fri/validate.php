<?php
// This is how you log someone in!
session_start();

$_SESSION["isLoggedIn"] = true;

if($_SESSION['isLoggedIn']){
	echo "You are logged in!";
} else{
	echo "you are NOT logged in, shame on you!";
}

?>

<a href="logout.php">Logout</a>
