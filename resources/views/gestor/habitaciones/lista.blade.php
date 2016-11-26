@extends('layouts.dashboard')

@section('content')

	<div>
	<h1>Lista de Habitaciones</h1>
	<a class="btn btn-primary" href="{{ url('admin/tipohab/create') }}"> Mostrar</a>
		<table class="table">
			<thead>
				<tr>
                    <th>Imagen</th>
					<th>Numero</th>
					<th>piso</th>
					<th>estado</th>
					
				</tr>
			</thead>
			<tbody>
				 @foreach ($datos[0] as $s)
	            <tr>
	                <td  style="max-width: 80px"><img src="../../imagen/tipohabitaciones/{{$s->foto}}" class="img-responsive"></td>
	                <td>{{$s->numero}} </td>
	                <td>{{$s->piso}}</td>
                    <td>{{$s->estado}}</td>
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
