@extends('layouts.dashboard')

@section('content')

	<div>
	<h1>TipoDocumento</h1>
	<a class="btn btn-primary" href="{{ url('admin/tipodoc/create') }}"> Crear</a>
		<table class="table">
			<thead>
				<tr>
					<th>nombre</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				 @foreach ($datos[0] as $s)
	            <tr>
	                <td>{{$s->Nombre}} </td>
	                
	                <td>
	               		  <a class="btn btn-info" href="{{route('admin.tipodoc.edit', $s->id)}}">E</a>
	                  	 <a onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" href="{{ route('admin.tipodoc.destroy', $s->id) }}">X</a>
	                	<!--<button class="btn btn-success" href="{{ url('admin/tiposer/editar/') }}">E</button>
	                	<button class="btn btn-danger">X</button>-->
	                </td>
	            </tr>
	            @endforeach
			</tbody>
		</table>
	</div>

@endsection
