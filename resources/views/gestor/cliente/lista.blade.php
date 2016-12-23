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
					<th>Procedencia</th>
					<th>Nombre</th>
					<th> Apellidos </th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				 @foreach ($clientes as $s)
	            <tr>
	                <td>{{$s->fechain}} </td>
	                <td>{{$s->fechaout}} </td>
					@foreach ($Procedencias as $o)
								@if($o->id == $s->Procedencia_id)
	                				<td>{{$o->Pais}}-{{$o->departamento}}-{{$o->Ciudad}}  </td>
								@endif						
					 @endforeach
	                  @foreach ($personas as $p)
								@if($p->id == $s->persona_id)
	                				<td>{{$p->nombre}} </td>
									<td>{{$p->apellidos}} </td>
								@endif						
					 @endforeach   

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
