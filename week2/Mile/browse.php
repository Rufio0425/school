<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Browse</title>
</head>
<body>
	<?php require('header.php'); require('product.php') ?>

	<form action="" method="POST">
		select a product: <select name="prod_id"><?= $options ?></select>
		<button>Go</button>

		<label>Number of products:
			<select name="amount">
				<option value="none">-</option>
				<option value="1">1</option>
				<option value="2">2</option>				
			</select>
		</label>

		<input type="submit">
	</form>
	


	<?php require('footer.php'); ?>
</body>
</html>