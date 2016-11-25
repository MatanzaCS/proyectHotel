@extends('layouts.dashboard')

@section('content')

	<div>
	<h1>Tipos de Servicio</h1>
	<a class="btn btn-primary" href="{{ url('admin/tipohab/create') }}"> Crear</a>
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
	                <td>{{$s->precio}}</td>
	                <td>{{$s->Descripcion}} </td>
	                <td>{{$s->precio}}</td>
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
