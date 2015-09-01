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

if(array_key_exists($id, $products)){
	$product_name = $products[$id];
} else {
	$product_name = 'error';
}

if(!is_numeric($prod_quan)){
	$prod_quan = 'error';
}


if($prod_quan > 0){
	if($prod_quan == 'error'){
		$msg = "Invalid quantity";
	} elseif($product_name == 'error'){
		$msg = "Invalid product";
	} elseif($product_name == 'Macbook'){
		if($prod_quan > 7){
			$msg = "You can't have that many Macs!";
		} else{
			$msg = "You chose $prod_quan $product_name"; 
		}
	} else{
		$msg = "You chose $prod_quan $product_name"; 
	}
}else{
	$msg = "Invalid quantity";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php require('cssincludes.php');?>
	<title>Products</title>
</head>
<body>
	<?php require('header.php'); require('product.php');?>
	
	<h1 class='welcome2'><?php echo $msg;?></h1>

	<?php require('footer.php'); ?>
</body>
</html>