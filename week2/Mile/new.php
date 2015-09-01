<?php
$validObject = ["apple", "hammer", "car", "banana"];
$objectColor = "red";
$objectHasJuice = true;


function isApple($objectName){
	if($objectName == "apple"){
		return true;
	} else {
		return false;
	}
} 

function isJuicy($objectHasJuice){
	if($objectHasJuice){
		return true;
	} else {
		return false;
	}
}

function isRed($objectColor){
	if($objectColor == "red"){
		return true;
	} else {
		return false;
	}
}

function isValidInput(){
	if(isset($_GET["name"])){

		$userItem = $_GET["name"];
		if(isValidTerm($userItem)){
			return true;
		} else{
			return false;
		}
	} else{
		return false;
	}
}

function isValidTerm($userItem){
	$validObject = ["apple", "hammer", "car", "banana"];
	foreach($validObject as $item){
		if($item == $userItem){
			return true;
		} else {
			
		}
	}
	return false;
}

if(isValidInput()){
	$userItem = $_GET['name'];
	if(isApple($userItem)){
		if(isJuicy($objectHasJuice)){
			if(isRed($objectColor)){
				echo "Let's buy this thing!" ;
			} else {
				echo "Do not buy, this is not a red, juicy, apple!";
			}
		} else {
			echo "Do not buy, this is not a red, juicy, apple!";
		}
	} else{
		echo "Do not buy, this is not a red, juicy, apple!";
	}
} else{
	echo "Invalid Input";
}

	?>
