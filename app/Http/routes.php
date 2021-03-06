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
// Authentication routes...
Route::get('/','ComingSoonController@index');

Route::post('/subscribe', function () {
	// pass back some data, along with the original data, just to prove it was received
   	$email = Input::get('uemail');
   	$sub = new App\Subscribe;
   	$sub->email = $email;
   	$sub->save();
   	return 'Your email is added to our database, We will send updates later on';
});
/*Route::get('/', 'Auth\AuthController@getLogin');
Route::post('/', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
*/