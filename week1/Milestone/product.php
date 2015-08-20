<?php

$id;

if(isset($_GET['id'])) {
	$id = $_GET['id'];

	if($id == 1) {
		$output = 'Mac';
	} elseif($id == 2){
		$output = 'Ubuntu';
	} elseif($id == 3){
		$output = 'Windows';
	} else {
		$output = 'Invalid';
	}
} 


?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php require_once('header.php'); ?>

	<h1>You chose product <?php echo $output;?></h1>
</body>
</html>