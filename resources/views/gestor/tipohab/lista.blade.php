@extends('layouts.dashboard')

@section('content')

	<div>
	<h1>Tipos de Habitacion</h1>
	<a class="btn btn-primary" href="{{ url('admin/tipohab/create') }}"> Crear</a>
		<table class="table">
			<thead>
				<tr>
					<th>Imagen</th>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				 @foreach ($datos[0] as $s)
	            <tr>
	                <td  style="max-width: 80px"><img src="../../imagen/tiposHabitaciones/{{$s->foto}}" class="img-responsive"></td>
	                <td>{{$s->Nombre}} </td>
	                <td>{{$s->precio_habitacion}}</td>
	                <td>
	                	<button class="btn btn-success">E</button>
	                	<button class="btn btn-danger">X</button>
	                </td>
	            </tr>
	            @endforeach
			</tbody>
		</table>
	</div>

@endsection
