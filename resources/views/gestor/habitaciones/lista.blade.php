@extends('layouts.dashboard')

@section('content')

	<div>
	<h1>Lista de Habitaciones</h1>
	<a class="btn btn-primary" href="{{ url('admin/habitaciones/create') }}"> Crear</a>
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
                    @foreach ($datos[1] as $o)
                        @if ($o->id == $s->TipoHabitacion_id)
                            <td width="90s"><img src="../imagen/tiposHabitaciones/{{$o->foto}}" class="img-responsive"></td>
                        @endif
                    @endforeach
                    
			        <td>{{$s->numero}} </td>
	                <td>{{$s->piso}}</td>

                    <td>{{$s->estado}}</td>
	                <td>
	    			   <a class="btn btn-info" href="{{route('admin.habitaciones.edit', $s->id)}}"   >E</a>
	                   <a onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" href="{{ route('admin.habitaciones.destroy', $s->id) }}"   >X</a>
	 		   
	                </td>
	            </tr>
	            @endforeach
			</tbody>
		</table>
	</div>

@endsection
