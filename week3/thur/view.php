<?php

$login = ["Rufio0425" => "Slugworth45", "Sean" => "thisismine123", "Friend" => "haveagood12"];
$msg = "";
$user = "";
$pass = "";
$sex = "";
$location = "";
if(isset($_GET['user'])){
	$user = $_GET['user'];
	// echo "$user<br>";
} else{
	echo "Username is not set<br>";
}

if(isset($_GET['pass'])){
	$pass = $_GET['pass'];
	
} else{
	echo "Password is not set<br>";
}

if(isset($_GET['sex'])){
	$sex = $_GET['sex'];
	// echo "$sex<br>";
}

if(isset($_GET['location'])){
	$location = $_GET['location'];
	// echo "$location<br>";
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