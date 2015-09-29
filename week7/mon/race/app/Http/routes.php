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
    return view('welcome');
});

Route::get('/races', "raceController@getRaces");

Route::get('/races/{id}', "raceController@getRaceDetails");

Route::get('/races/{id}/racers', "raceController@getRacer");

Route::get('/editor', "raceController@editRaceView");

Route::post('/editor', "raceController@createNewRace");

Route::post('/api/removeRace', "raceController@removeRace");


