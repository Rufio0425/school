<?php

$quantity = null;
if(isset($_GET['quantity'])){
	$quantity = $_GET['quantity'];
}

//Above line is checking inputs
//------------------------------------




?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>This is B</title>
</head>
<body>
	<h1>B</h1>
	Q: <?= $quantity  ?> 
</body>
</html>