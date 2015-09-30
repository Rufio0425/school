<?php 
namespace App\Http\Controllers;

use PDO;
use Request;

class RacerController extends Controller{
	public function getRacers(){
		try {
			$db = new PDO('mysql:host=localhost;dbname=race;charset=utf8', 'root');
			$statement = $db->prepare('select * from racers');
			$statement->execute();
			$results = $statement->fetchAll();
			// print_r($results);
	    	return view('racers', ['racers' => $results]);
		} catch (PDOException $e) {
			echo "you did something {$e->getMessage()}";
			}
	}

	public function getRacerDetails($racerID){
		try {
			$db = new PDO('mysql:host=localhost;dbname=race;charset=utf8', 'root');
			$statement = $db->prepare('select * from racers where racerID ='.$racerID);
			$statement->execute();
			$racer = $statement->fetch();
			// print_r($racer);

			return view('theRacers',['racer' => $racer, 'racerID' => $racerID]);

		} catch (PDOException $e) {
			echo "you did something wrong {$e->getMessage()}";
			}
	}

	public function deleteRacer($id){
		$racerID = $id;

		$db = new PDO('mysql:host=localhost;dbname=race;charset=utf8', 'root');
		$sql = "delete from racers where racerID = :racerID";
		$statement = $db->prepare($sql);
		$statement->execute([":racerID" =>$racerID]);
		$sql = "delete from raceRacers where racerID = :racerID";
		$statement = $db->prepare($sql);
		$statement->execute([":racerID" =>$racerID]);
		return redirect('/racers');
	}

	public function addRacer(){
		return view('AddRacer');
	}

	public function createRacer(){
		$name = Request::input('name');

		$age = Request::input('age', 0);

		$db = new PDO('mysql:host=localhost;dbname=race;charset=utf8', 'root');
		$sql = "insert into racers (name, age) values(:name, :age)";
		$statement = $db->prepare($sql);
		$statement->execute([":name"=>$name, ":age"=>$age]);

		echo "Inserted one record";
		return redirect('/racers');
	}

	public function editRacer($racerID){
		try {
			$db = new PDO('mysql:host=localhost;dbname=race;charset=utf8', 'root');
			$statement = $db->prepare('select * from racers where racerID ='.$racerID);
			$statement->execute();
			$racer = $statement->fetch();
			// print_r($racer);

			return view('edit',['racer' => $racer]);

		} catch (PDOException $e) {
			echo "you did something wrong {$e->getMessage()}";
		}
	}

	public function updateRacer($racerID){
		$name = Request::input('name');

		$age = Request::input('age', 0);
		$db = new PDO('mysql:host=localhost;dbname=race;charset=utf8', 'root');
		$sql = "update racers set name = :name, age = :age where racerID = :racerID";
		$statement = $db->prepare($sql);
		$statement->execute([":name"=>$name, ":age"=>$age, ":racerID"=>$racerID]);

		echo "Updated racer";
		return redirect("/racers/$racerID");

	}
	
}

?>