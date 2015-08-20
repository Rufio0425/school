<?php 

// $_GET = A bag, isset = asking $_GET if something is in the bag or $_GET,'p' = something inside the bag (hopefully)

//print_r($_GET);

//this is the example for product.php page for project

$product_id = null;

if(isset($_GET['p'])) {
	$product_id = $_GET['p'];

	if($product_id == 1) {
		echo 'you picked product ';
	}
} 

echo $product_id;

?>

