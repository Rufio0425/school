<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('games');
});
// View All Games
Route::get('games', 'GameController@viewAll');
// Create Game
Route::get('games/create', 'GameController@create');
Route::post('games/create', 'GameController@postCreate');
// 
Route::get('games/{id}', 'GameController@view');
// Edit Game
Route::get('games/{id}/edit', 'GameController@edit');
Route::post('games/{id}/edit', 'GameController@postEdit');
// Delete Game
Route::get('games/{id}/delete', 'GameController@delete');
