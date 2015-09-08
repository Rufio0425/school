<?php 

// function add($x,$y){
// 	return $x+$y;
// }

// echo "3+15=" . add(3,15);

// function multiply($x,$y,$z){
// 	return $x*$y*$z;
// }

// echo multiply(2,5,3);
// function isValidUsername($username){
// 	return strlen($username)>=7;
// }


// $u = 'Rufio0425';
// if(isValidUsername($u)){
// 	echo "$u is valid";
// } else {
// 	echo "--$u-- is NOT valid";
// }

// function characterSelect($string, $n){
// 	return substr($string, $n-1,1);
// }

// if(characterSelect("don", 2) == "o"){
// 	echo "this is correct";
// } else {
// 	echo "Fail";
// }

// function my_strrev($input){
// 	$chars = str_split($input);
// 	$output = "";
// 	for($i = count($chars)-1; $i >= 0; $i--){
// 		$output .=$chars[$i];
// 	}
// 	return $output;
// }

// echo my_strrev("motorcycle");


// return $_GET[$parameter_name] or '' if it doesn't exsist.

############# USE THIS FOR $_GET issets on all PHP projects!!!###################################


// function getStuff($parameter_name, $default=''){
// 	if(isset($_GET[$parameter_name])){
// 		return $_GET[$parameter_name];
// 	} else{
// 		return $default;
// 	}
// }

// $name = getStuff("name", "no value");

// echo 'name is ' . $name;

############# USE THIS FOR $_GET issets on all PHP projects!!!###################################

function myJoin($glue, $pieces){
	$output = '';
	foreach($pieces as $idx=>$piece){
		if($idx > 0){
			$output .=$glue;
		}
		$output .=$piece;

	}
	return $output;
}

$a = ["cat", "dog", "rat"];
echo myJoin(':', $a);

?>