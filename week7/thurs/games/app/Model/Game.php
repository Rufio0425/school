<?php

namespace App\Model;

use DB;

class Game {
	public $id;
	public $name;
	public $year;

	public function save(){
		if (empty($this->id)){
			$this->insert();
		}else{
			$this->update();
		}
	}
	private function insert(){
		// SQL
		$sql = "insert into game (name, year) values(:name, :year)";
		// Execute
		DB::insert($sql, ['name'=> $this->name, 'year'=> $this->year]);
	} 

	private function update(){
		// SQL
		$sql = "update game set name = :name, year = :year where id = :id";
		// Execute
		DB::update($sql, ['name'=> $this->name, 'year'=> $this->year, 'id'=>$this->id]);
	}

	public static function delete($id){

	}

	public static function get($id){
		// SQL
		$sql = "select * from game where id = :id";
		// Execute
		$row = DB::selectOne($sql, ['id' => $id]);
		// Statrt a new Game Object
		$game = new Game();
		$game->id = $row['id'];
		$game->name = $row['name'];
		$game->year = $row['year'];
		return $game;
	}

	public static function getAll(){
		// SQL
		$sql = "select * from game";
		// Execute
		$rows = DB::select($sql);

		$games = [];
		foreach($rows as $row){
			// print_r($row);
			$game = new Game();
			$game->id = $row['id'];
			$game->name = $row['name'];
			$game->year = $row['year'];
			$games[] = $game;
		}
		return $games;
	}
}