<?php

namespace App\Http\Controllers;
use Request;
use App\Model\Game;

class GameController extends Controller{
	public function viewAll(){
		$games = Game::getAll();
		return view('all_games', ['games' => $games]);
	}

	public function view($id){
		return view('game', ['game' => Game::get($id)]);
	}

	public function create(){
		return view('new_game');
	}

	public function postCreate(){
		$game = new Game();
		$game->name = Request::input('name');
		$game->year = Request::input('year');
		$game->save();
		return redirect('games');
	}

	public function edit($id){
		return view('edit_game', ['game' => Game::get($id)]);
	}

	public function postEdit($id){
		$game = new Game();
		$game->id = $id;
		$game->name = Request::input('name');
		$game->year = Request::input('year');
		$game->save();
		return redirect('games');
	}

	public function delete(){

	}
}