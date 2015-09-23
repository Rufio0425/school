<?php

session_start();
$dogs = [];
$error = '';
$msg = '';

if(isset($_SESSION['dogs'])){
	$dogs = $_SESSION['dogs']; 
}

if(isset($_POST['dogname'])){
	$name = $_POST['dogname'];
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(strlen($name) >= 2 && strlen($name) <= 10){
		array_push($dogs, $name);
		$_SESSION['dogs'] = $dogs;
	} else{
		$error = 'Dog name must be between 2-10 characters';
	}
}

foreach($dogs as $value){
	$msg .= "<li>" .$value. "<button class='remove'>Remove Dog</button>" . "</li>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Puppy Pound</title>
</head>
<body>
	<form action="puppy3.php" method="POST">
		<label>Puppy Name:
			<input type="text" name="dogname">
		</label>

		<button>Add Dog</button>
	</form>

	<ul>
		<?= $msg  ?>
	</ul>
</body>
</html>