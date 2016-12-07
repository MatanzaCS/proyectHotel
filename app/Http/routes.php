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
// route de la fecha
Route::post('/test/save', ['as' => 'save-date',
                           'uses' => 'DateController@showDate', 
                            function () {
                                return '';
                            }]);





Route::auth();
Route::group(['prefix'=> '/admin', 'middleware' => [ 'web', 'auth' ]], function(){

	//Route::get('getUsuarios', 'UsuariosController@getUsuarios');
	Route::post('usuarios/{id}', 'UsuariosController@update');
	Route::resource('usuarios', 'UsuariosController');

	Route::resource('cuentas', 'CuentasController');

	Route::resource('habitaciones','HabitacionController');
	Route::get('habitaciones/update/{id}',[
		'uses'	=>	'HabitacionController@update',
		'as'	=>	'admin.habitaciones.update'  
	]);
	Route::get('habitaciones/{id}/destroy',[
		'uses'	=>	'HabitacionController@destroy',
		'as'	=>	'admin.habitaciones.destroy'  
	]);
	
	//route: Controller tipoHabitacion
	Route::resource('tipohab', 'TipoHabController');
	Route::get('tipohab/editar', 'TipoHabController@vista');

	Route::resource('tipohab','TipoHabController');
		Route::get('tipohab/update/{id}',[
			'uses' => 'TipoHabController@update',
			'as' => 'admin.tipohab.update'
		]);

		Route::get('tipohab/{id}/destroy',[
		'uses'	=>	'TipoHabController@destroy',
		'as'	=>	'admin.tipohab.destroy'  
	]);





// controlador de personas
	Route::resource('personas', 'personaController');
	Route::get('personas/editar', 'personaController@vista');

	Route::resource('personas','personaController');
		Route::get('personas/{id}/destroy',[
		'uses'	=>	'personaController@destroy',
		'as'	=>	'admin.personas.destroy'  
	]);





	Route::resource('Servicios','servicioController');
	
	Route::get('Servicios/{id}/destroy',[
		'uses'	=>	'servicioController@destroy',
		'as'	=>	'admin.Servicios.destroy'  
	]);
	
	//Route::put('habitaciones/update/{id}','HabitacionController@update');
	// controlador de cliente
	Route::resource('cliente','ClienteController');
	
	Route::get('cliente/{id}/destroy',[
		'uses'	=>	'ClienteController@destroy',
		'as'	=>	'admin.cliente.destroy'
		]);

	//route:Controller Procedencia
	Route::resource('procedencia','ProcedenciaController');
	
	Route::get('procepencia/editar', 'ProcedenciaController@vista');
	Route::get('procepencia/editar/{id}', 'ProcedenciaController@editardatos');
	Route::get('procedencia/{id}/destroy',[
		'uses'	=>	'ProcedenciaController@destroy',
		'as'	=>	'admin.procedencia.destroy'
		]);

	//route: Controller tipoServicio
	Route::resource('tiposer','TipoServicioController');
	Route::get('tiposer/editar', 'TipoServicioController@vista');
	Route::get('tiposer/editar/{id}', 'TipoServicioController@editardatos');
	Route::get('tiposer/{id}/destroy',[
		'uses'	=>	'tipoServicioController@destroy',
		'as'	=>	'admin.tiposer.destroy'
		]);
	//route: Controller TIPO PRODUCTO
	Route::resource('tipopro','tipoproController');
	Route::get('tipopro/editar', 'tipoproController@vista');
	Route::get('tipopro/editar/{id}', 'tipoproController@editardatos');
	Route::get('tipopro/{id}/destroy',[
		'uses'	=>	'tipoproController@destroy',
		'as'	=>	'admin.tipopro.destroy'
		]);



	Route::resource('tipocuentas', 'TipoCuentasController');
	Route::get('getalltipos', 'TipoCuentasController@getipos');



	Route::resource('proveedor', 'ProveedorController');
	Route::get('getalltipos', 'TipoCuentasController@getipos');

	
	//Route::get('reportes/{tipReporte}','ReportesController@tipoReporte');
	Route::get('MenuReportes','ReportesController@Menu');
	/*Route::get('ReporteMensual','ReportesController@ReporteMensual');
	Route::get('ReporteAnual','ReportesController@ReporteAnual');
	*/
	Route::get('ReporteHabitacion','ReportesController@ReporteHabitacion');
	Route::get('ReporteServicios','ReportesController@ReporteServicios');
	Route::get('ReporteUsuarios','ReportesController@ReporteUsuarios');
	Route::get('ReporteReservas','ReportesController@ReporteReservas');

	Route::get('/', function () {
	    return view('welcome');
	});
	
	Route::get('/home', 'HomeController@index');
});


