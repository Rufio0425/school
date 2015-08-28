<?php
require('product.php');

$options = '';

foreach($products as $key => $product){
	$options .= '<option value="' . $key . '">' .$product . '</option>';
} 



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Browse</title>
</head>
<body>
	<?php require('header.php'); ?>

	<form action="view.php" method="GET">
		select a product: <select name="prod_id"><?= $options ?></select>
		Quantity:  <input type="number" name="quantity" value="10" required>
		<input type="submit">
	</form>
	
	<?php require('footer.php'); ?>
</body>
</html>