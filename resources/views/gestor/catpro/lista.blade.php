@extends('layouts.dashboard')

@section('content')

	<div>
	<h1>Lista categoria</h1>
	<a class="btn btn-primary" href="{{ url('admin/catpro/create') }}"> Crear</a>
		<table class="table">
			<thead>
				<tr>
					<th>Imagen</th>
					<th>Nombre</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				 @foreach ($datos[0] as $s)
	            <tr>
	                <td  style="max-width: 80px"><img src="../../imagen/cateproducto/{{$s->foto}}" class="img-responsive"></td>
	                <td>{{$s->Nombre}} </td>
					
	               
	                <td>
	                	<a class="btn btn-success" href="{{ route('admin.catpro.edit', $s->id) }}" >E</a>
	                	 <a onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" href="{{ route('admin.catpro.destroy', $s->id) }}"   >X</a>
	 		   
	                </td>
	            </tr>
	            @endforeach
			</tbody>
		</table>
	</div>

@endsection
