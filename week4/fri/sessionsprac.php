<?php 

function isUserLoggedIn(){
	return false;
}

$isUserLoggedin = isUserLoggedin();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sessions</title>
</head>
<body>
	<?php
	if($isUserLoggedin){?>
	<h1>Welcome User</h1>
	<?php
	}?>
	<form method="post" action="validate.php">
		<label>Username
			<input type="text" name="username">
		</label>
		<label for="">
			<input type="text" name="password">
		</label>
		<button>Submit</button>

	</form>
</body>
</html>