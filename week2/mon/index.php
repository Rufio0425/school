<?php 

function add($a, $b){
	return $a + $b;
}

function add3($a, $b, $c){
	return $a + $b + $c;
}

function add4($a, $b, $c, $d){
	return $a + $b + $c +$d;
}

function combine($first, $last){
	echo ($first .$last);
}

function absolute($num){
	if($num >= 0){
		return $num;
	} else{
		return $num * -1;
	}
}

function character($test){
	if(strlen($test) >= 20){
		$firstTwo = substr($str, 0,2);

		if(is_numeric($firstTwo)){
			return 'PASS';
		} else {
			return 'FAIL';
		}
	} else {
		return 'FAIL';
	}

$test = "hello there"
echo ()



//echo absolute(-132);
// echo add(2, 3);
// echo add3(2,3,4);
// echo add4(2,3,4,5);
// combine('Sean', 'Aguirre');

// $message = "the system is down";
// $text = "i can program";
// $password = "5rep-thucat_at&56AfecRafum";
// $age = 25;

//  echo strlen($message);
//  echo strlen($password);
//  echo is_numeric($age);

// echo ucwords($text);

//  if(is_numeric($password)){
//  	echo is_numeric($password);
//  }else {
//  	echo null;
// }
?>

