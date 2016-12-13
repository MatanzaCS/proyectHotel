@extends('layouts.dashboard')

@section('content')
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>
	</head>
	<body>



        <a href="{{url('admin/ReporteHabitacionAnual')}}"><button class="btn btn-danger">Grafica Anual</button></a>
        <!--
        <a href="{{url('admin/ReporteHabitacionMensual')}}"><button class="btn btn-danger">Grafica Mensual</button></a>
        <a href="#" onclick="location.reload()"><button class="btn btn-info">Actualizar Reporte</button></a>
        -->
        <div class="table-responsive">
            <table class="table">
                <tr align="center">
                    <td>Numero de Reporte</td>
                    <td>Nombre de Reporte</td>
                    <td>Fecha del Reporte</td>
                    <td>Comentarios</td>
                    <td>Opciones</td>
                </tr>
                @foreach($resultado as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->nombre}}</td>
                    <td>{{$data->fecha_reporte}}</td>
                    <td>{{$data->comentario}}</td>
                    <td>
                        <a href="{{route('admin.reportes.show', $data->id)}}" class="btn btn-primary btn-xs">Ver Detalles</a>
                        <a href="" class="btn btn-primary btn-xs">Grafica de Reporte</a>
                        <a href="{{url('admin/ReporteHabitacion/pdf')}}" class="btn btn-primary btn-xs">Guardar Reporte</a>
                        <a href="" class="btn btn-primary btn-xs">Imprimir</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
	</body>
</html>
@endsection