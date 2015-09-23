
<?php 

session_start();

$msg = "";

if(isset($_SESSION['user']) && strlen($_SESSION['user'])) {
	$msg3 = "Hello " . $_SESSION["user"] . " you are being logged in";
} else{
  header('Location: index.php');
}

?>

<link rel="stylesheet" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Indie+Flower|Amatic+SC|Bangers|Fredericka+the+Great|Black+Ops+One' rel='stylesheet' type='text/css'>

<div class="title">Welcome to Safari Road</div>
<!-- Elephant -->
<div class="contenedor">
<div class="elefantes">
<div class="elefante">
  <div class="cabeza">
    <div class="ojo"></div>
    <div class="trompa"></div>
  </div>  
  <div class="body"></div>
    <div class="legs"><div class="legs3"></div></div>
  <div class="orejas"></div>
  <div class="cola"></div>
</div>
<div class="elefante3">
  <div class="cabeza3">
    <div class="ojo3"></div>
    <div class="trompa3"></div>
  </div>  
  <div class="body3"></div>
    <div class="legs5"><div class="legs7"></div></div>
  <div class="orejas3"></div>
  <div class="cola3"></div>
</div>
  <div class="sol"></div>
</div>
  </div>
<!-- Elephant -->
<div class="account">
	<div class="greet">
		<?= $msg3 ?>
	</div>

	<div class="button">
		Acessing Safari Guide
		<div class="loader">
		</div>
	</div>

	<div class="greet">
		<a href="logout.php" class="logout">Logout</a>
	</div>
</div>