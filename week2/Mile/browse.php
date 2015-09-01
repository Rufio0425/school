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
	<?php require('cssincludes.php');?>
	<title>Browse</title>
</head>
<body>
	<?php require('header.php'); ?>
	
	<div class="welcome">
		<h1>Browse Products</h1>
		<form action="view.php" method="GET">
			Select a product: <select name="prod_id"><?= $options ?></select>
			Quantity:  <input type="number" name="quantity" min="1" max="50" value="number" required>
			<input class='button' type="submit">
		</form>
	</div>
	<?php require('footer.php'); ?>
</body>
</html>