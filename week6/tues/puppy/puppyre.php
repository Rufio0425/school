<?php

session_start();
$puppies = '';
$name = '';
$error = '';
$msg = '';

if(isset($_SESSION['puppies'])){
	$puppies = $_SESSION['puppies'];
}

if(isset($_POST['puppy'])){
	$name = $_POST['puppy'];
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(strlen($name) >= 2 && strlen($name) <= 60){
		array_push($puppies, $name);
		$_SESSION['puppies'] = $puppies;
	} else{
		$error = "Bad puppy name";
	}
}

foreach($puppies as $puppy){
	$msg .= "<li>" .$puppy . "</li>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pound2</title>
</head>
<body>
	<form action="puppyre.php" method="POST">
		<label>
			<input type="text" name="puppy">
			<?= $error; ?>
		</label>
			<button>Submit</button>
		<ul><?= $msg; ?></ul>
	</form>
</body>
</html>