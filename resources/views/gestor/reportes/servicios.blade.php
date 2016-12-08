@extends('layouts.dashboard')

@section('content')
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>
	</head>
	<body>

        <a href="{{url('admin/ReporteServicioAnual')}}"><button class="btn btn-danger">Grafica Anual</button></a>
        <a href="{{url('admin/ReporteServicioMensual')}}"><button class="btn btn-danger">Grafica Mensual</button></a>
        <a href="#" onclick="location.reload()"><button class="btn btn-info">Actualizar Reporte</button></a>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td>ID</td>
                    <td>Nombre del Servicio</td>
                    <!--<td>Fecha</td>-->
                    <td>Tipo del Servicio</td>
                </tr>
                @foreach($servicios as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->nomservicio}}</td>
                    <!--<td>{{$data->fecha}}</td>-->
                    <td>{{$data->TipoServicio_id}}</td>
                </tr>
                @endforeach
            </table>
        </div>
	</body>
</html>
@endsection