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
Route::get('/contactos', function () {
	    return view('index.contactos');
	});
Route::get('/nosotros', function () {
	    return view('index.nosotros');
	});


Route::auth();
Route::group(['prefix'=> '/admin', 'middleware' => [ 'web', 'auth' ]], function(){

	//Route::get('getUsuarios', 'UsuariosController@getUsuarios');
	Route::post('usuarios/{id}', 'UsuariosController@update');
	Route::resource('usuarios', 'UsuariosController');

	Route::resource('cuentas', 'CuentasController');

	Route::resource('habitaciones','HabitacionController');

	Route::get('habitaciones/{id}/destroy',[
		'uses'	=>	'HabitacionController@destroy',
		'as'	=>	'admin.habitaciones.destroy'  
	]);
	
	Route::resource('Servicios','servicioController');
	
	Route::get('Servicios/{id}/destroy',[
		'uses'	=>	'servicioController@destroy',
		'as'	=>	'admin.Servicios.destroy'  
	]);
	
	//Route::put('habitaciones/update/{id}','HabitacionController@update');


	Route::resource('tiposer','TipoServicioController');
	Route::get('tiposer/editar', 'TipoServicioController@vista');
	Route::get('tiposer/editar/{id}', 'TipoServicioController@editardatos');
	Route::get('tiposer/{id}/destroy',[
		'uses'	=>	'tipoServicioController@destroy',
		'as'	=>	'admin.tiposer.destroy'
		]);


	Route::resource('tipohab', 'TipoHabController');
	Route::get('tipohab/editar', 'TipoHabController@vista');

	Route::resource('tipohab','TipoHabController');

		Route::get('tipohab/{id}/destroy',[
		'uses'	=>	'TipoHabController@destroy',
		'as'	=>	'admin.tipohab.destroy'  
	]);



	Route::resource('tipocuentas', 'TipoCuentasController');
	Route::get('getalltipos', 'TipoCuentasController@getipos');



	Route::resource('proveedor', 'ProveedorController');
	Route::get('getalltipos', 'TipoCuentasController@getipos');

	
	Route::get('reportes','ReportesController@create');

	Route::get('reportes','ReportesController@semanal');



	


	Route::get('/', function () {
	    return view('welcome');
	});
	
	Route::get('/home', 'HomeController@index');
});


