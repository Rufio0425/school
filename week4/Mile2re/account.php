<?php  

include_once('myincludes.php');

$msg = "";

if(isset($_SESSION['user']) && strlen($_SESSION['user'])){
	$msg = "Hello " .$_SESSION['user']. " you are being logged in";
} else{
	header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Account</title>
</head>
<body>
	<?= $msg; ?>

	<a href="logout.php">Logout</a>
</body>
</html>