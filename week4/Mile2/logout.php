<link rel="stylesheet" href="style.css">

<?php 

session_start();

$_SESSION["isLoggedin"] = false;
	$msg4 = "you are being logged out....";
	header("refresh:3; url=index.php" );


 ?>

<link href='https://fonts.googleapis.com/css?family=Indie+Flower|Amatic+SC|Bangers|Fredericka+the+Great|Black+Ops+One' rel='stylesheet' type='text/css'>

<div class="redirect"><?= $msg4 ?></div>