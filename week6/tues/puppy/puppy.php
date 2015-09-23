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


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pound</title>
</head>
<body>
	<form action="puppy.php" method="POST">
		<label>Puppy Name
			<input type="text" name="puppy">
		</label>
			<?= $error ?>
		<button>Submit</button>

		<ul>
			 <?php foreach($puppies as $puppy){?>
                <li class="puppy"><span><?= $puppy ?></span> <a href="#">Remove</a></li>
             <?php } ?>
		</ul>
	</form>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
   <script>
       $(function(){
           console.log("REady");
           $(".puppy a").on("click", function(e){
               var li = $(this).closest("li");
               var puppyName = $("span", li).text();
               
               li.remove();
               $.post("api.php", {puppyName: puppyName}, function(data){
                   console.dir(data);
               });
           });
       });
   </script>

</body>
</html>