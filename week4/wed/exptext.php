<!-- Demonstration of using Expressions -->

<?php 

$regex = '/^(\d{3})-\d{3}-\d{4}$/';

$phone = '111-111-1111';

if(preg_match($regex, $phone)){
	echo $phone . ' is valid';
} else {
	echo $phone . ' is NOT valid';
}

?>