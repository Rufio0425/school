<?php

$login = ["Rufio0425" => "Slugworth45", "Sean" => "thisismine123", "Friend" => "haveagood12"];
$user = "";
$pass = "";
$sex = "";
$location = "";
$msg = "";
if(isset($_POST['user'])){
	$user = $_POST['user'];
} 

if(isset($_POST['pass'])){
	$pass = $_POST['pass'];
} 

if(isset($_POST['sex'])){
	$sex = $_POST['sex'];
}

if(isset($_POST['location'])){
	$location = $_POST['location'];
}

if(array_key_exists($user, $login)){
	if($pass == $login[$user]){
		$msg = "Hello $user who is $sex and lives in $location";
	} else{
		$msg = "invalid password";
	}
} else{

}

if(strlen($pass < 10)){
	if(!is_numeric(substr($pass, -2,2))){
		$msg = "password needs to be at least 10 characters, with 2 numbers at the end";
	} 
} else{
	$msg = "password needs to be at least 10 characters";

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View</title>
</head>
<body>
	<?= $msg ?>
</body>
</html>