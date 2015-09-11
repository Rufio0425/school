<?php 
// class = "Template" for an object.

// When you create a new object for a class, the correct terminology to use is "Instantiate".

// When a function is made inside of a class it is called a method.

// functions setFirstName and setAge are both used to make the user input info in a specific manner. That's why we made them private.

// class Person{
// 	private $first_name;
// 	public $last_name;
// 	private $age;

// 	function __construct($fname=null, $lname=null, $age=null){
// 		$this->first_name = $fname;
// 		$this->last_name = $lname;
// 		$this->age = $age;
// 	}

// 	function setFirstName($name){
// 		$this->first_name = $name;
// 	}

// 	function getFirstname(){
// 		return $this->first_name;
// 	}

// 	function setAge($age){
// 		if(is_numeric($age)){
// 			$this->age = $age;
// 		}
// 	}

// }
// $bob = new Person("Bob", "Ross");
// print_r($bob);


// $fred = new Person("Fred", "Smith", 99);
// print_r($fred);

#############################################################################################################

// class Animal{
// 	public $legs;
// 	public $color;
// }

// $animal1 = new Animal;
// $animal2 = new Animal;

// print_r($animal1);
// print_r($animal2);

#################################################################################################################

// class Furniture{
// 	public $seatCount;
// }

// $furn1 = new Furniture;
// $furn2 = new Furniture;

// print_r($furn1);
// print_r($furn2);

####################################################################################################################

// class Computer{
// 	public $memorySize;
// 	public $cpuCount;
// 	public $dickSize;
// }

// $comp1 = new Computer;
// $comp2 = new Computer;

// print_r($comp1);
// print_r($comp2);

############################################   ZOO KEEPER   ########################################################################

class Animal {
	public $foodType;
	public function __construct($type) {
		$this->foodType = $type;
	} 
}

class Zookeeper {
	private $meat = 10;
	private $veggies = 10;

	public function feed($animal){
		if($animal->foodType == 'carnivore'){
			$this->meat -=2;
		} elseif($animal->foodType == 'herbivore'){
			$this->veggies -=2;
		} elseif($animal->foodType == 'omnivore'){
			$this->meat--;
			$this->veggies--;
		} else{
			die ("Invalid animal type: " . $animal->foodType);
		}
	}

	public function getFoodStatus(){
		return "meat: " . $this->meat . "veggies: " . $this->veggies;
	}
}


$lion = new Animal('carnivore');
$sloth = new Animal('herbivore');
$bear = new Animal('omnivore');
$lorax = new Animal('candivore');

$zookeeper = new Zookeeper;
echo $zookeeper->getFoodStatus(), "<br>";

$zookeeper->feed($lion);
echo $zookeeper->getFoodStatus(), "<br>";

$zookeeper->feed($sloth);
echo $zookeeper->getFoodStatus(), "<br>";

$zookeeper->feed($bear);
echo $zookeeper->getFoodStatus(), "<br>";


?>