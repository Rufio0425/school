<?php

// This loop will count up to ten in the browser until it reaches 10.

// $i = 0;
// while ($i <= 10){
// 	echo $i++ . '<br>';
// }


// This is a fancy way to count up. Counting and lising all the items and listing them in the browser.

// $skateboard = ['board', 'wheels', 'trucks', 'bearings', 'grip'];
// $x = 0;

// while ($x < count($skateboard)){
// 	echo $skateboard[$x] . '<br>';
// 	$x++;
// }


// This is displaying a for loop, this displays the same as first while loop

// for ($y = 1; $y <= 10; $y++){
// 	echo $y, '<br>';
// }

// Taking skateboard while loop and turning it into a for loop.

// for ($x = 0; $x < count($skateboard); $x++){
// 	echo $skateboard[$x] . '<br>';
// }

// Foreach loops. This takes the array 'animals'(plural), and uses value 'animal'(singular) and echos out all animals one by one in the array animals.

// $animals = ['dog', 'cat', 'bird'];

// foreach ($animals as $animal/*'plural' as 'singular'*/){
// 	echo $animal . '<br>';
// }

// $nums = [12,6,13,7,21,0,1,455];

// foreach($nums as $num){
// 	echo $num . '<br>';
// } 

// 'this just displays all the numbers in $num'

// foreach($nums as $num){
// 	if($num % 2 !=0){
// 		echo $num . '<br>';
// 	}
// }

// this displays all of the odd numbers in $nums

// foreach($nums as $idx => $num){
// 	if($idx % 2 ==0){
// 		echo $num . '<br>';
// 	}
// }

// This dispplays all of the numbers in an odd index

// $person = ['name' => 'fred', 'age' => 17, 'color' => 'blue'];

// foreach($person as $key=> $value){
// 	echo $key, ':', $value . '<br>';
// }

// This shows continues versus breaks

// $things = ['Haley','apple', 'dog', 'hammer'];

// foreach($things as $item){
// 	if ($item == 'apple'){
// 		continue; //this will conitnue to look in the array for anyting not apple
// 	} else{
// 		echo ($item . '<br>');
// 	}
// }

// foreach($things as $item){
// 	if ($item == 'dog'){
// 		break; //this will end the loop once it finds apple
// 	} else{
// 		echo ($item . '<br>');
// 	}
// }

// $animals = ['dog', 'cat', 'fish', 'horse', 'bird'];

// foreach($animals as $animal){
// 	echo 'I would like to have a ' . $animal . '<br>';
// }

//THIS PORTION IS VERY SIMILAR TO OUR MILESTONE 2 PROJECT

$products = ['none' => 'select', 'first' => 'desk', 'second' => 'chair', 'third' => 'boat', 'fourth' => 'car'];

$options = '';
foreach($products as $key => $value){
	$options .= '<option value="'. $key . '">' . $value . '</option>';
}

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
</head>
<body>
	<form action="" method="POST">
	select a product: <select name="prod_id"><?= $options ?></select>
	<button>Go</button>
	</form>
</body>
</html>