<!-- Inheiritence is basically creating a sub class for a class. Ex: class= Animal, subclass of class Animal= carnivore -->

<?php

class Animal {
	public $foodType;
	public function __construct($type) {
		$this->foodType = $type;
	} 
}
// One way to change the function of the child of parent Animal
class Carnivore extends Animal{
	public function __construct(){
		$this->foodType = 'carnivore';
	}
}
// Another way to change the function of the child of parent Animal, this is also safer programming, because if the parent class get's updated, this also reaps the benefits
class Herbivore extends Animal{
	public function __construct(){
		parent::__construct('herbivore');
	}
}

class Omnivore extends Animal{
	public function __construct(){
		parent::__construct('omnivore');
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