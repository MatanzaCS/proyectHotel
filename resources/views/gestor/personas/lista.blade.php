@extends('layouts.dashboard')

@section('content')

	<div>
	<h1>Lista Datos personas</h1>
	<a class="btn btn-primary" href="{{ url('admin/personas/create') }}"> Crear</a>
		<table class="table">
			<thead>
				<tr>
                    <th>Nombres</th>
					<th>Apellidos</th>
					<th>Edad</th>
					<th>Genero</th>
					<th>Telefonos</th>
					<th>Email</th>
					<th>TipoDoc</th>
					<th>NumDoc</th>
					<th>Accion</th>
					
				</tr>
			</thead>
			<tbody>
		@foreach ($datos[0] as $s)
	            <tr>                           
			        <td>{{$s->nombre}} </td>
	                <td>{{$s->apellidos}}</td>
                    <td>{{$s->edad}}</td>
                    <td>{{$s->sexo}} </td>
                    <td>{{$s->telefono}} </td>
	                <td>{{$s->email}}</td>
                    <td>{{$s->TipoDocumento}}</td>
                    <td>{{$s->numdocumento}} </td>
	               
	                <td>
	    			   <a class="btn btn-info" href="{{route('admin.personas.edit', $s->id)}}"   >E</a>
	                   <a onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" href="{{ route('admin.personas.destroy', $s->id) }}"   >X</a>
	 		   
	                </td>
	            </tr>
	            @endforeach
			</tbody>
		</table>
	</div>

@endsection
