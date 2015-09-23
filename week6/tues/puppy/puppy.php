<?php  

session_start();
$puppies = [];
$error = "";
$msg = "";

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
	} else {
		$error = "Bad puppy name";
	}
}

foreach($puppies as $value){
	$msg .= "<li>" .$value. "<button class='remove'>X</button>" ."</li>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pound</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
	<script>
		$(document).ready(function(){
			$('.remove').click(function(){
				$(this).closest('li').hide();

				$.get('api.php', function(data){

					console.dir(data);


				});

			});

			$('.reset').click(function(){
				$(this).closest('ul').hide();
			})
		});
	</script>
</head>
<body>
	<form action="puppy.php" method="POST">
		<label>Puppy Name
			<input type="text" name="puppy">
		</label>
			<?= $error ?>
		<button>Submit</button>


	</form>

	<ul>
		<?= $msg ?>
		<button class="reset">Reset</button>
	</ul>

</body>
</html>