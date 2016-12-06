@extends('layouts.dashboard')

@section('content')

	<div>
	<h1>Tipos de Producto</h1>
	<a class="btn btn-primary" href="{{ url('admin/tipopro/create') }}"> Crear</a>
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
	                <td  style="max-width: 80px"><img src="../../imagen/tipoproducto/{{$s->foto}}" class="img-responsive"></td>
	                <td>{{$s->Nombre}} </td>
	                <td>{{$s->precio}}</td>
	                <td>
	                	<a class="btn btn-success" href="{{ route('admin.tipopro.edit', $s->id) }}" >E</a>
	                	 <a onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" href="{{ route('admin.tipopro.destroy', $s->id) }}"   >X</a>
	 		   
	                </td>
	            </tr>
	            @endforeach
			</tbody>
		</table>
	</div>

@endsection
