<?php 

print_r($_GET);
echo "<br>\n";

if(isset($_GET['temp'])) {
	$temp = $_GET['temp'];
} else {
	$temp = '';
}

if(isset($_GET['color'])) {

	$color = $_GET['color'];

	$temp = $_GET['temp'];

	if($color === 'green') {
		echo $color . ' is my favorite color';

	} elseif($color === 'red') {
		echo 'red is ok i guess';

	} elseif($color === 'brown') {
		echo 'brown is sweet';
	} elseif($temp < 100) {
		echo 'not blazing hot';
	}

	else {
		echo $_GET['color'] . ' is NOT my favorite color';
	} 

} else {
	echo 'no input';
}


?>