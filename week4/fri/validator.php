<?php

echo("welcome to VALIDATOR");

class Validator {
	private $pattern = "Sean";

	function isValid($string){
		if($string == $this->pattern){
			return true;
		} else {
			return false;
		}
	}

}


$myValidator = new Validator();

if($myValidator->isValid('Sean')){
	echo "You are valid";
} else{
	echo "You are NOT valid!!!!";
}

?>