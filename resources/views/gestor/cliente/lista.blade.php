@extends('layouts.dashboard')

@section('content')

	<div>
	<h1>Clientes</h1>
	<a class="btn btn-primary" href="{{ url('admin/cliente/create') }}"> Crear</a>
		<table class="table">
			<thead>
				<tr>
					<th>fecha entrada</th>
					<th>Fecha salida</th>
					<th>Persona</th>
					<th>Procedencia</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				 @foreach ($datos[0] as $s)
	            <tr>
	                <td>{{$s->fechain}} </td>
	                <td>{{$s->fechaout}} </td>
	                <td>{{$s->persona_id}} </td>
	                <td>{{$s->Procedencia_id}} </td>

	                <td>
	               		  <a class="btn btn-info" href="{{route('admin.cliente.edit', $s->id)}}">E</a>
	                  	 <a onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" href="{{ route('admin.cliente.destroy', $s->id) }}">X</a>
	                	<!--<button class="btn btn-success" href="{{ url('admin/tiposer/editar/') }}">E</button>
	                	<button class="btn btn-danger">X</button>-->
	                </td>
	            </tr>
	            @endforeach
			</tbody>
		</table>
	</div>

@endsection
