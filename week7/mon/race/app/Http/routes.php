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

Route::get('/races/{id}/editor', "raceController@editRace");

Route::post('/races/{id}/editor', "raceController@updateRace");

Route::post('/api/removeRace', "raceController@removeRace");

Route::get('/racers', "RacerController@getRacers");

Route::get('/racers/{id}', "RacerController@getRacerDetails");

Route::post('/racers/{id}/delete', "RacerController@deleteRacer");

Route::get('/AddRacer', "RacerController@addRacer");

Route::post('/AddRacer', "RacerController@createRacer");

Route::get('/racers/{id}/edit', "RacerController@editRacer");

Route::post('/racers/{id}/edit', "RacerController@updateRacer");