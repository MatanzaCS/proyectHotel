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
	    return view('index.inicio');
	});
Route::get('/habitaciones', function () {
	    return view('index.habitaciones');
	});
Route::get('/', function () {
	    return view('index.inicio');
	});
Route::get('/habitaciones', function () {
	    return view('index.habitaciones');
	});
Route::get('/servicios', function () {
	    return view('index.servicios');
	});
Route::get('/Spa', function () {
	    return view('index.Spa');
	});



Route::auth();
Route::group(['prefix'=> '/admin', 'middleware' => [ 'web', 'auth' ]], function(){

	//Route::get('getUsuarios', 'UsuariosController@getUsuarios');
	Route::post('usuarios/{id}', 'UsuariosController@update');
	Route::resource('usuarios', 'UsuariosController');

	Route::resource('cuentas', 'CuentasController');

	Route::resource('habitaciones','HabitacionController');
	//ruta eliminar habitaciones
	Route::get('habitaciones/{id}/destroy',[
		'uses'	=>	'HabitacionController@destroy',
		'as'	=>	'admin.habitaciones.destroy'  
	]);
	
	
	Route::resource('tiposer','TipoServicioController');
	Route::get('tiposer/editar', 'TipoHabController@vista');
	Route::get('tipohser/editar/{id}', 'TipoServicioController@editardatos');


	Route::resource('tipohab', 'TipoHabController');
	Route::get('tipohab/editar', 'TipoHabController@vista');
	Route::get('tipohab/editar/{id}', 'TipoHabController@editardatos');


	Route::resource('tipocuentas', 'TipoCuentasController');
	Route::get('getalltipos', 'TipoCuentasController@getipos');

	Route::resource('proveedor', 'ProveedorController');
	Route::get('getalltipos', 'TipoCuentasController@getipos');

	
	Route::get('/', function () {
	    return view('welcome');
	});
	
	Route::get('/home', 'HomeController@index');
});


