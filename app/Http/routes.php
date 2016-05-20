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
    return redirect('home');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::controller('/tests', 'Tests');

Route::any('comments', function(){
	return [
		[
			'id' => time() + rand(100, 200),
			'author' => "WTF " . time() .  + rand(100, 200),
			'text' => "Some rando text"
		],
		[
			'id' => time() + rand(100, 200),
			'author' => "WTF " . time() . rand(100, 200),
			'text' => "Some rando text"
		]
	];
});