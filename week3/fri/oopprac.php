<?php 
############################################ USER DEFINED FUCTIONS EXAMPLES ###########################################

// function getApple($color){
// 	if($color == 'red'){
// 		echo "yay! A juicy $color apple!";
// 	} elseif($color == 'blue'){
// 		echo "what?!?! A $color apple??";
// 	} elseif($color == 'green'){
// 		echo "Oh! A $color apple!";
// 	} else{
// 		echo "is this even an apple?...";
// 	}
// }

// getApple('red');

########################################### MAKING CLASSES ##################################################

// class Human {
// 	private $isAlive = true;
// 	private $height;
// 	private $eyeColor;
// 	private $hairColor;


// 	function __construct($height, $eyeColor, $hairColor, $weight){
// 		$this->height = $height;
// 		$this->eyeColor = $eyeColor;
// 		$this->hairColor = $hairColor;
// 		$this->weight = $weight;
// 	}

// 	function printHeight(){
// 		echo $this->height;
// 	}

// 	function getHeight(){
// 		return $this->height;
// 	}

// 	function setHeight($x){
// 		$this->height = $x;
// 	}

// 	function calcWeight($x){
// 		return $this->weight += $x;
// 	}
// }

// $sean = new Human(110, "Brown", "Brown", 155);
// $kyle = new Human(200, "Blue", "Blonde", 185);

// $seansHeight = $sean->getHeight();
// $kylesHeight = $kyle->getHeight();
####################// Making new variables that are now stored to the class function#################
// echo $sean->getHeight();
// echo "<br>";
// echo $kyle->getHeight();

// class MyClass{
// 	public $prop1 = "I'm a class property!";

// 	public function __construct(){
// 		echo 'The class "', __CLASS__,'" was initiated!<br>';
// 	}

// 	public function __destruct(){
// 		echo 'The class "',__CLASS__,'" was destroyed!<br>';
// 	}
 
// 	public function setProperty($newval){
//   		$this->prop1 = $newval;
// 	}
 
// 	public function getProperty(){
// 		return $this->prop1 . "<br />";
// 	}
// }
 
// $obj = new MyClass;
// // $obj2 = new MyClass;
 
// echo $obj->getProperty(); // Get the property value
// echo $obj2->getProperty();

// $obj->setProperty("I'm a new property value!"); // Set a new one
// $obj2->setProperty("I belong to the second instance!");
 
// echo $obj->getProperty(); // Read it out again to show the change
// echo $obj2->getProperty();

// echo "End of file.<br>";	

// class Animal {
// 	public $legs;
// 	public $color;

// }

// $animal1 = new Animal("Dog");
// $animal2 = new Animal("Cat");

// print_r($animal1);

// class Furniture {
// 	public $seatcount;
// }

// $furniture1 = new Furniture("Love Seat");
// $furniture2 = new Furniture("Recliner");

// class Computer{
// 	public $memorySize;
// 	public $cpuCount;
// 	public $dickSize;
// }

// $computer1 = new Computer("Dell");
// $computer2 = new Computer("Mac");



?>