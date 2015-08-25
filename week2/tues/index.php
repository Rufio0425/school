<?php 

// This is shows making functions and calling them in browser

function moveForward(){
	echo('Forward!');
}

function turn($direction){
	echo("Turn" . $direction);
}

function bark($yelp){
	echo 'bark' .$yelp;
}

function add($a, $b){
	return $a + $b;
}

function getBigNumber(){
	return 5;
}

// moveForward();
// moveForward();
// moveForward();
// turn('left');
// moveForward();
// turn('right');
// turn('right');
// moveForward();
// bark('RUFF RUFF RUFF!');

// $ans = add(4,5);
// echo($ans);

// $ans = add(6, getBigNumber());
// echo( $ans );

//Demonstrating built in functions

// echo(strlen("Hi how are you"));

// echo(is_numeric(2));

// echo(ucwords('hello there world'));

// echo(substr('this is a substring...', 10,5));

//echo(htmlentities('I love <this> so much'));


?>