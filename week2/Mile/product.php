<?php

$id;
$output = "Invaild";
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$output = 'You chose product ';
	if($id == 1) {
		$output .= 'Mac';
	} elseif($id == 2){
		$output .= 'Ubuntu';
	} elseif($id == 3){
		$output .= 'Windows';
	} else {
		$output .= 'Invalid';
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
	<?php require('header.php'); ?>

	<h1><?php echo $output;?></h1>

	<?php require('footer.php'); ?>
</body>
</html>