@extends('layouts.dashboard')

@section('content')

	<div>
	<h1>Caracterisitcas de Habitacion</h1>
	<a class="btn btn-primary" href="{{ url('admin/caracteristicastipohab/create') }}"> Crear</a>
		<table class="table">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Icono</th>
					</tr>
			</thead>
			<tbody>
				 @foreach ($datos[0] as $s)
	            <tr>
                    <td>{{$s->nombre}} </td>
	                <td  style="max-width: 80px"><img src="../../imagen/tiposHabitaciones/{{$s->foto}}" class="img-responsive"></td>
	                <td>
	                	<a class="btn btn-success" href="{{ route('admin.tipohab.edit', $s->id) }}" >E</a>
	                	 <a onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" href="{{ route('admin.tipohab.destroy', $s->id) }}"   >X</a>
	 		   
	                </td>
	            </tr>
	            @endforeach
			</tbody>
		</table>
	</div>

@endsection
