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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'personas'=>'PersonasController',
	'users'=>'UsersController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

]);
Route::group(['prefix'=>'admin','middleware'=>['auth','is_admin'], 'namespace' =>'Admin'],function(){
	Route::resource('users','UserController');
	Route::resource('jugadores','JugadorController');
	Route::resource('entrenadores','EntrenadorController');
	Route::resource('clubs','ClubController');
	Route::resource('registro_jugador_clubs','RegistroJugadorClubController');
	Route::resource('equipos','EquipoController');
	Route::resource('registro_jugador_equipos','RegistroJugadorEquipoController');

	Route::resource('torneos','TorneosController');
	Route::resource('escenarios_deportivos','CanchasController');
	
});

Route::get('login',function ()
{
	return view('auth.index');	
});


Route::get('up', 'ImgController@index');
Route::post('storage/create', 'ImgController@upload');
Route::post('canchas/up', 'Admin\CanchasController@store');