@extends('layouts.dashboard')

@section('content')

	<div>
	<h1>Consumos</h1>
	<a class="btn btn-primary" href="{{ url('admin/consumos/create') }}"> Crear</a>
		<table class="table">
			<thead>
				<tr>
					<th>Cantidad </th>
					<th>Estado </th>
					<th>Fecha</th>
					<th>Producto</th>
					<th>total</th>
					<th>Cliente</th>
					
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				 @foreach ($datos[0] as $s)
	            <tr>
	                <td>{{$s->cantidad}} </td>
	                <td>{{$s->estado}} </td>
	                <td>{{$s->fecha}} </td>
	                <td>{{$s->producto_id}} </td>
	                <td>{{$s->total}}</td>
	                <td>{{$s->clientes_id}} </td>

	                <td>
	               		  <a class="btn btn-info" href="{{route('admin.consumos.edit', $s->id)}}">E</a>
	                  	 <a onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" href="{{ route('admin.consumos.destroy', $s->id) }}">X</a>
	                	<!--<button class="btn btn-success" href="{{ url('admin/tiposer/editar/') }}">E</button>
	                	<button class="btn btn-danger">X</button>-->
	                </td>
	            </tr>
	            @endforeach
			</tbody>
		</table>
	</div>

@endsection
