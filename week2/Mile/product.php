<?php

// $id;
// $output = "Invaild";
// if(isset($_GET['id'])) {
// 	$id = $_GET['id'];
// 	$output = 'You chose product ';
// 	if($id == 1) {
// 		$output .= 'Mac';
// 	} elseif($id == 2){
// 		$output .= 'Ubuntu';
// 	} elseif($id == 3){
// 		$output .= 'Windows';
// 	} else {
// 		$output .= 'Invalid';
// 	}
// } 

$products = ['none' => 'select', 'first' => 'Macbook', 'second' => 'Ubuntu', 'third' => 'Windows'];

$options = '';

foreach($products as $key => $product){
	$options .= '<option value="' . $key . '">' . $product . '</option>';
}



?> 

