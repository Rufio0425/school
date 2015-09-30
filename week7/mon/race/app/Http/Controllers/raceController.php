<?php 

namespace App\Http\Controllers;
use PDO;
use Request;

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

	public function editRace($raceID){
		try {
			$db = new PDO('mysql:host=localhost;dbname=race;charset=utf8', 'root');
			$statement = $db->prepare('select * from races where raceID ='.$raceID);
			$statement->execute();
			$race = $statement->fetch();
			// print_r($racer);

			return view('editor',['race' => $race]);

		} catch (PDOException $e) {
			echo "you did something wrong {$e->getMessage()}";
		}
	}

	public function updateRace($raceID){
		$raceName = Request::input('raceName');

		$length = Request::input('length');

		$location = Request::input('location');

		$startDate = Request::input('startDate');

		
		$db = new PDO('mysql:host=localhost;dbname=race;charset=utf8', 'root');
		$sql = "update races set raceName = :raceName, length = :length, location = :location, startDate = :startDate where raceID = :raceID";
		$statement = $db->prepare($sql);
		$statement->execute([":raceName"=>$raceName, ":length"=>$length, ":location"=>$location, ":startDate"=>$startDate, ":raceID"=>$raceID]);

		echo "Updated racer";
		return redirect("/races/$raceID");

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