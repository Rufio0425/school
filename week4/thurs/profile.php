<?php 

session_start();
$username = '';
if(isset($_SESSION['username']) && strlen($_SESSION['username'])) {
	$username = $_SESSION['username'];
} else{
	header('Location: login.php');
	exit();
}

$visit_count = $_SESSION['visit_count'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sessions</title>
</head>
<body>
	Hello <?= $username ?>. Welcome back to our awesome site!
	<a href="logout.php">Logout</a>
</body>
</html>