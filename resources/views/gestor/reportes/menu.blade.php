@extends('layouts.dashboard')

@section('content')
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>
	</head>
	<body>
    
    <table class="container-block">
        <tr>
            <td>
                <img src="{{asset('images/habitaciones.jpg')}}" style="width:250px; margin:15px;    " class="img-responsive img-rounded" alt="">           
                <p class="parrafo">Estos son los reportes de Habitaciones</p>
                <a href="{{url('admin/ReporteHabitacion')}}"><button class="btn btn-info">Ver Reporte</button></a>
            </td>
            <td>
                <img src="{{asset('images/servicios.jpg')}}" style="width:250px; margin:15px;"  class="img-responsive img-rounded" alt="">
                <p class="parrafo">Estos son los reportes de Servicios</p>
                <a href="{{url('admin/ReporteServicios')}}"><button class="btn btn-info">Ver Reporte</button></a>
            </td>
        </tr>
        <tr>
            <td>
                <img src="{{asset('images/usuarios.jpg')}}" style="width:250px; margin:15px;" class="img-responsive img-rounded" alt="">
                <p class="parrafo">Estos son los reportes de Usuario</p>
                <a href="{{url('admin/ReporteUsuarios')}}"><button class="btn btn-info">Ver Reporte</button></a>
            </td>
            <td>
                <img src="{{asset('images/reservas.jpg')}}" style="width:250px; margin:15px;" class="img-responsive img-rounded" alt="">
                <p class="parrafo">Estos son los reportes de Reservas</p>
                <a href="{{url('admin/ReporteReservas')}}"><button class="btn btn-info">Ver Reporte</button></a>
            </td>
        </tr>
    </table>

</html> 
@endsection