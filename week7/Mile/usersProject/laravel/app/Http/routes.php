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


Route::get('/', function() {
    return redirect('users');
});

// Create

Route::get('users/create', 'UserController@create');
Route::post('users/create', 'UserController@postCreate');

Route::get('users', 'UserController@viewAll');
Route::get('users/{id}', 'UserController@view');

// Update
Route::get('users/{id}/update', 'UserController@update');
Route::post('users/{id}/update', 'UserController@postUpdate');


// Delete
Route::get('users/{id}/delete', 'UserController@delete');


