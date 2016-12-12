@extends('layouts.dashboard')

@section('content')

	<div>
	<h1>Tipos de Servicio</h1>
	<a class="btn btn-primary" href="{{ url('admin/tiposer/create') }}"> Crear</a>
		<table class="table">
			<thead>
				<tr>
					<th>Imagen</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>precio</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				 @foreach ($datos[0] as $s)
	            <tr>
	                <td  style="max-width: 80px"><img src="../../imagen/tiposservicios/{{$s->foto}}" class="img-responsive"></td>
	                <td>{{$s->Nombre}} </td>
	                <td>{{$s->Descripcion}}</td>
	                <td>{{$s->precio}} </td>
	                <td>
	               		  <a class="btn btn-info" href="{{route('admin.tiposer.edit', $s->id)}}"   >E</a>
	                  	 <a onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" href="{{ route('admin.tiposer.destroy', $s->id) }}"   >X</a>

	                  	  <a href="{{ route('admin.tiposer.show', $s->id) }}" class="btn btn-info">Ver</a>
          				  <a href="{{ route('admin.tiposer.edit', $s->id) }}" class="btn btn-primary">Editar</a>
	                	<!--<button class="btn btn-success" href="{{ url('admin/tiposer/editar/') }}">E</button>
	                	<button class="btn btn-danger">X</button>-->
	                </td>
	            </tr>
	            @endforeach
			</tbody>
		</table>
	</div>

@endsection
