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
Route::get('habitaciones', 'TipoHabController@principal');

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
	
	Route::get('reservas/show','ReservasController@show');	
	Route::get('reservas/create','ReservasController@create');

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

	Route::resource('caracteristicas','CaracteristicaController');
		Route::get('caracteristicas/{id}/destroy',[
		'uses'	=>	'CaracteristicaController@destroy',
		'as'	=>	'admin.caracteristicas.destroy'
	]);
		Route::get('caracteristicas/{id}/update',[
			'uses'	=>	'CaracteristicaController@update',
			'as'	=>	'admin.caracteristicas.update'
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

	Route::get('procedencia/editar', 'ProcedenciaController@vista');
	Route::get('procedencia/editar/{id}', 'ProcedenciaController@editardatos');
	Route::get('procedencia/{id}/destroy',[
		'uses'	=>	'ProcedenciaController@destroy',
		'as'	=>	'admin.procedencia.destroy'
		]);

	//route: Controller tipoServicio
	
	Route::resource('tiposer', 'TipoServicioController');
	Route::get('tiposer/editar', 'TipoServicioController@vista');
	Route::resource('tiposer','TipoServicioController');
	Route::get('tiposer/update/{id}',[
			'uses' => 'TipoServicioController@update',
			'as' => 'admin.tiposer.update'
		]);

		Route::get('tiposer/{id}/destroy',[
		'uses'	=>	'TipoServicioController@destroy',
		'as'	=>	'admin.tiposer.destroy'
	]);
	//route: Controller caterogia
	Route::resource('catpro','CategoriaController');

	Route::get('catpro/editar', 'CategoriaController@vista');
	Route::get('catpro/editar/{id}', 'CategoriaController@editardatos');
	Route::get('catpro/{id}/destroy',[
		'uses'	=>	'CategoriaController@destroy',
		'as'	=>	'admin.catpro.destroy'
		]);

	//route: Controller Producto
	Route::resource('productos','productoController');
	Route::get('productos/update/{id}',[
		'uses'	=>	'productoController@update',
		'as'	=>	'admin.productos.update'
	]);
	Route::get('productos/{id}/destroy',[
		'uses'	=>	'productoController@destroy',
		'as'	=>	'admin.productos.destroy'
	]);

	//conmtroller consumo
	Route::resource('consumos','consumoController');

	Route::get('consumos/{id}/destroy',[
		'uses'	=>	'consumoController@destroy',
		'as'	=>	'admin.consumos.destroy'
		]);

	/*Route::resource('consumos','consumoController');
	Route::get('consumos/update/{id}',[
		'uses'	=>	'consumoController@update',
		'as'	=>	'admin.consumos.update'
	]);
	Route::get('consumos/{id}/destroy',[
		'uses'	=>	'consumoController@destroy',
		'as'	=>	'admin.consumos.destroy'
	]);*/


	Route::resource('tipocuentas', 'TipoCuentasController');
	Route::get('getalltipos', 'TipoCuentasController@getipos');



	Route::resource('proveedor', 'ProveedorController');
	Route::get('getalltipos', 'TipoCuentasController@getipos');



	//RUTAS PARA LOS REPORTES
	Route::get('MenuReportes','ReportesController@Menu');
	//Route::get('ReporteMensual','ReportesController@ReporteMensual');
	//Route::get('ReporteAnual','ReportesController@ReporteAnual');
	Route::get('ReporteHabitacion','ReportesController@ReporteHabitacion');
	Route::get('ReporteServicios','ReportesController@ReporteServicios');
	Route::get('ReporteUsuarios','ReportesController@ReporteUsuarios');
	Route::get('ReporteReservas','ReportesController@ReporteReservas');
	Route::get('ReporteHabitacionAnual','ReportesController@ReporteHabAnual');
	Route::get('ReporteHabitacionMensual','ReportesController@ReporteHabAnual');
	Route::get('ReporteServicioAnual','ReportesController@ReporteHabAnual');
	Route::get('ReporteServicioMensual','ReportesController@ReporteHabAnual');
	Route::get('ReporteUsuarioAnual','ReportesController@ReporteHabAnual');
	Route::get('ReporteUsuarioMensual','ReportesController@ReporteHabAnual');
	Route::get('ReporteReservaAnual','ReportesController@ReporteHabAnual');
	Route::get('ReporteReservaMensual','ReportesController@ReporteHabAnual');
	/*Route::resource('ReporteHabitacion/pdf','PDFController');


	Route::get('ReporteHabitacion/reportes/show={id}',[
			'uses'	=>	'ReportesController@show',
			'as'	=>	'admin.reportes.show'
		]);
	Route::get('ReporteHabitacion/reportes/graficar={id}',[
			'uses'	=>	'ReportesController@graficar',
			'as'	=>	'admin.reportes.graficar'
		]);
	Route::get('ReporteHabitacion/generar={id}',[
			'uses'	=>	'ReportesController@crearReporteHabitacion',
			'as'	=>	'admin.reportes.reportehabitacion'
		]);*/


	Route::get('/', function () {
	    return view('welcome');
	});

	Route::get('/home', 'HomeController@index');
});

/*Route::get('pdf', function () {
		$pdf =PDF::loadview('vistapdf');
		return $pdf->download('REPORTES.pdf');
});*/
