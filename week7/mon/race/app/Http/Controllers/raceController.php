<?php 

namespace App\Http\Controllers;
use PDO;

class RaceController extends Controller{
	public function getRaces(){
		try {
			$db = new PDO('mysql:host=localhost;dbname=race;charset=utf8', 'root');
			$statement = $db->prepare('select * from races');
			$statement->execute();
			$results = $statement->fetchAll();
			// print_r($results);
	    	return view('races', ['races' => $results]);
		} catch (PDOException $e) {
			echo "you did something {$e->getMessage()}";
			}
	}

	public function getRaceDetails($raceID){
		try {
			$db = new PDO('mysql:host=localhost;dbname=race;charset=utf8', 'root');
			$statement = $db->prepare('select * from races where raceID ='.$raceID);
			$statement->execute();
			$race = $statement->fetch();
			// print_r($race);

			return view('raceDetails',['race' => $race, 'raceID' => $raceID]);

		} catch (PDOException $e) {
			echo "you did something wrong {$e->getMessage()}";
			}
	}

	public function getRacer($raceID){
		try {
			$db = new PDO('mysql:host=localhost;dbname=race;charset=utf8', 'root');
			$statement = $db->prepare("select * from racers as r, raceRacers as rr where r.racerID = rr.racerID and rr.raceID = $raceID;");
			$statement->execute();
			$racers = $statement->fetchAll();
			// print_r($racers);

    		return view('racers', ['racers' => $racers]);
		} catch (PDOException $e) {
			echo "you did something wrong {$e->getMessage()}";
			}
	}

	public function editRaceView(){
		return view('editor');
	}

	public function createNewRace(){
		$raceName = "";
		$length = 0;
		$location = "";

		if(isset($_POST['raceName'])){
			$raceName = $_POST["raceName"];
		}

		if(isset($_POST['length'])){
			$length = $_POST["length"];
		}

		if(isset($_POST['location'])){
			$location = $_POST["location"];
		}

		if(isset($_POST['startDate'])){
			$startDate = $_POST["startDate"];
		}

		$db = new PDO('mysql:host=localhost;dbname=race;charset=utf8', 'root');
		$sql = "insert into races (raceName, length, location, startDate) values(:raceName, :length, :location, :startDate)";
		$statement = $db->prepare($sql);
		$statement->execute(["raceName"=>$raceName, "length"=>$length, "location"=>$location, "startDate"=>$startDate]);

		echo "Inserted one record";
		return redirect('/races');

	}

	public function removeRace(){
		$raceID = 0;

		if(isset($_POST['raceID'])){
			$raceID = $_POST["raceID"];
		}
		$db = new PDO('mysql:host=localhost;dbname=race;charset=utf8', 'root');
		$sql = "delete from races where raceID = :raceID";
		$statement = $db->prepare($sql);
		$statement->execute(["raceID" =>$raceID]);
		$sql = "delete from raceRacers where raceID = :raceID";
		$statement = $db->prepare($sql);
		$statement->execute(["raceID" =>$raceID]);
		return redirect('/races');
	}

}

?>