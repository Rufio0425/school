<?php 

function fancyMath($num){
	try{
		$num = someMath(7);
	} catch(Exception $e){
		print_r($e);
		return null;
	} finally {
		echo "we're finally here";
	}
	return someMath($num+3);
}

function someMath($num){
	return divide($num, 0);
}

function divide($num, $demon) {
	if($demon == 0){
		throw new Exception('Divide by zero is not allowed');
	}
	return $num/$demon;
}

fancyMath(11);
?>