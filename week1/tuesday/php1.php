<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	 <?php

	
	//$name = 'Sean';

	//$age = 25;

	//echo 'Hello \'' . $name . '\' I see that you are ' . $age .' years old!';





	/*
	-0, "0", "" are all false
	-all other numbers and strings are true


	*/

	

	/* $isLoggedIn = "Hello";

	if($isLoggedIn) {
		echo "You are logged in";
	} else {
		echo "beat it, go long in";
	}

	*/

	?>
	
	<?php
		echo "<p>Data processed</>";

		date_default_timezone_set('UTC');

		echo date('h:i:s:u a, l F jS Y e');

	?>

	
</body>
</html>