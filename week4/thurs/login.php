<?php 
session_start();

if(isset($_SESSION['username']) && strlen($_SESSION['username'])) {
	header('Location: profile.php');
	exit();
// Above is the creation of a redirect, this works if the user is not logged in
} else{
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(isset($_POST['username']) && isset($_POST['password'])) {
			if(strlen($_POST['password']) == 7) {
				$_SESSION['username'] = $_POST['username'];
				header('Location: profile.php');
				exit();
			}
		}
	}
}
// Above is if the user is logged in with a password that has a strlen of 7.
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session</title>
</head>
<body>
	<form action="" method="POST">
		Username: <input type="text" name="username"><br>
		Password: <input type="text" name="password"><br>
		<button>Login</button>
	</form>
</body>
</html>


<!-- THIS EXAMPLE IS PERFECT FOR OUR PHP PROJECT!!! -->