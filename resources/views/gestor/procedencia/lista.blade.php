@extends('layouts.dashboard')

@section('content')

	<div>
	<h1>Procedencias</h1>
	<a class="btn btn-primary" href="{{ url('admin/procedencia/create') }}"> Crear</a>
		<table class="table">
			<thead>
				<tr>
					<th>Pais</th>
					<th>Departamento</th>
					<th>Ciudad</th>
					<th>Direccion</th>
					<th>cliente</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				 @foreach ($datos[0] as $s)
	            <tr>
	                <td>{{$s->Pais}} </td>
	                <td>{{$s->departamento}} </td>
	                <td>{{$s->Ciudad}} </td>
	                <td>{{$s->Direccion}}</td>
	                <td>{{$s->cliente_id}}</td>

	                <td>
	               		  <a class="btn btn-info" href="{{route('admin.procedencia.edit', $s->id)}}">E</a>
	                  	 <a onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" href="{{ route('admin.procedencia.destroy', $s->id) }}">X</a>
	                	<!--<button class="btn btn-success" href="{{ url('admin/tiposer/editar/') }}">E</button>
	                	<button class="btn btn-danger">X</button>-->
	                </td>
	            </tr>
	            @endforeach
			</tbody>
		</table>
	</div>

@endsection
