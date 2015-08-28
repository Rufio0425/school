<?php 

require('product.php');
$id = '';
if(isset($_GET['prod_id'])) {
	$id = $_GET['prod_id'];
} 

$prod_quan = '';
if(isset($_GET['quantity'])){
	$prod_quan = $_GET['quantity'];
}


$product_name = $products[$id];

// Next, write logic for invalid requests. Use is_numeric for quantity.
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php require('header.php'); require('product.php');?>
	
	<h1><?php echo "Your order includes $prod_quan $product_name";?></h1>

	<?php require('footer.php'); ?>
</body>
</html>