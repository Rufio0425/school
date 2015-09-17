
<?php 

session_start();

$msg = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

}

$msg3 = "Hello " . $_SESSION["user"] . " you are logged in";

?>

<link rel="stylesheet" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Indie+Flower|Amatic+SC|Bangers|Fredericka+the+Great|Black+Ops+One' rel='stylesheet' type='text/css'>

<div class="title">Welcome to Forrest Hunter</div>

<div class="account">
	<div class="greet">
		<?= $msg3 ?>
	</div>

	<div class="button">
		ACCESSING WEAPON INVENTORY
		<div class="loader">
		</div>
	</div>

	<div class="greet">
		<a href="logout.php" class="logout">Logout</a>
	</div>
</div>