@extends('layouts.dashboard')

@section('content')
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>
	</head>
	<body>
    <!--
        <div style="margin-bottom:250px;">  
            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        </div>
        <div>
            <div id="container2" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
        </div>
    </body>
    -->
    
    <table class="container-block">
        <tr>
            <td><img src="{{asset('images/habitaciones.jpg')}}" style="width:250px; margin:15px;    " class="img-responsive img-rounded" alt="">            
            </td>
            <td contenedor-info><p class="parrafo">Estos son los reportes de Habitaciones</p>
            <button class="btn btn-info">Ver Reporte</button>
            </td>
        </tr>
        <tr>
            <td>
                <img src="{{asset('images/servicios.jpg')}}" style="width:250px; margin:15px;"  class="img-responsive img-rounded" alt="">
            </td>
            <td><p class="parrafo">Estos son los reportes de Servicios</p>
            <button class="btn btn-info">Ver Reporte</button>
            </td>
        </tr>
        <tr>
            <td>
                <img src="{{asset('images/usuarios.jpg')}}" style="width:250px; margin:15px;" class="img-responsive img-rounded" alt="">
            </td>
            <td><p class="parrafo">Estos son los reportes de Usuario</p>
            <button class="btn btn-info">Ver Reporte</button>
            </td>
        </tr>
        <tr>
            <td>
                <img src="{{asset('images/reservas.jpg')}}" style="width:250px; margin:15px;" class="img-responsive img-rounded" alt="">
            </td>
            <td><p class="parrafo">Estos son los reportes de Reservas</p>
            <button class="btn btn-info">Ver Reporte</button>
            </td>
        </tr>
    </table>

</html> 
@endsection