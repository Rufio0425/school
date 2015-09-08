<?php 
######################################## THIS IS A GREAT EXAMPLE OF HOW OUR VALIDATOR WILL LOOK ON OUR PROJECT ###############

// class InvaildParameterException extends Exception {

// }

// function add($x, $y){
	
// 	if(!is_numeric($x) || !is_numeric($y)){
// 		throw new InvaildParameterException("Invalid Parameter: Must be number");
// 	}

// 	if($x<0){
// 		throw new InvaildParameterException("Invalid Patameter: Must be positive");
// 	}

// 	if($x == 5){
// 		throw new Exception();
// 	}

// 	return $x+$y;
// }

// // add(1,3) -> 4
// echo add(1,3);

// // add("a", "b") -> Throw Exception("Invalid Parameter: Must be number");
// try{
// 	echo add("b", "v");
// }
// catch(Exception $ex){
// 	echo "Failed" . $ex->getMessage();
// }

// echo "<br>";
// // add(-1,2) -> Throw Exception("Invalid Parameter: Must be positive");
// try{
// 	echo add(-1,2);
// }
// catch(Exception $ex){
// 	echo "Failed" . $ex->getMessage(); 
// 	# $ex->getMessage() is an example of abstraction. This is a class already defined in the PHP Library.
// }

// echo "<br>";

function powerRanger($type){
	$colors = ["green", "red", "blue", "yellow", "pink"];
	$valid = false;

	foreach($colors as $color){
		if($type == $color){
			$valid = true;{
			}
		}
	}

	if($valid == false){
		throw new Exception("Your not a power ranger");
	} else{
		echo "Welcome power ranger";
	}

}

try{
	powerRanger("green");
} catch(Exception $ex){
	echo "invalid" . $ex->getMessage();
}

?>