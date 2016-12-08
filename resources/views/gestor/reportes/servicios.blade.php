@extends('layouts.dashboard')

@section('content')
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>
	</head>
	<body>

        <button class="btn btn-danger">Ver Grafica</button>
        <button class="btn btn-info">Actualizar Reporte</button>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td>ID</td>
                    <td>Nombre del Servicio</td>
                    <td>Fecha</td>
                    <td>Precio del Servicio</td>
                    <td>Tipo del Servicio</td>
                    <td>Id de la Reserva</td>
                </tr>
                <tr>
                    <td>@foreach($servicios as $data){{$data->id}}@endforeach</td>
                    <td>@foreach($servicios as $data){{$data->nomservicio}}@endforeach</td>
                    <td>@foreach($servicios as $data){{$data->fecha}}@endforeach</td>
                    <td>@foreach($servicios as $data){{$data->Precio_Servicio}}@endforeach</td>
                    <td>@foreach($servicios as $data){{$data->TipoServicio_id}}@endforeach</td>
                    <td>@foreach($servicios as $data){{$data->reserva_id}}@endforeach</td>
                    
                </tr>

            </table>
        </div>

	</body>
</html>
@endsection