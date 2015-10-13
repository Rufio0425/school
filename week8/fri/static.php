<?php 

class Car{
	public $color = '';
	public static $car_count = 0;
	private static $cars = [];

	public function __construct(){
		self::$car_count++;
		self::$cars[] = $this;
	}

	public static function getAllCars(){
		return self::$cars;
	}

	public static function getNumCars(){
		return self::$car_count;
	}

	public function drive($destination){
		echo "we're in a {$this->color} car going to $destination";
	}
}

$car1 = new Car();
$car1->color = 'blue';
$car1->drive('mars');
echo 'There are ' . Car::getNumCars() . ' instances of car<br>';

$car2 = new Car();
$car2->color = 'red';
$car2->drive('flagstaff');