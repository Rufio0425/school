<?php 

session_start();

if(isset($_SESSION["puppies"])){

}

$puppies = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$puppyName = $_POST["puppyName"];
	$puppies[] = $puppyName;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Puppy Pound</title>
</head>
<body>
	<form action="puppy.php" method="POST">
		Name: <input type="text" name="puppyName">
		<button>Submit</button>
	</form>

	<ul>
		<?php foreach($puppies as $puppy){}
		?>
	</ul>

</body>
</html>