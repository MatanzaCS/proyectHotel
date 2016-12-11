@extends('layouts.dashboard')

@section('content')

	<div>
	<h1>Caracterisitcas de Habitacion</h1>
	<a class="btn btn-primary" href="{{ url('admin/caracteristicas/create') }}"> Crear</a>
		<table class="table">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Foto</th>
					</tr>
			</thead>
			<tbody>
				 @foreach ($datos[0] as $s)
	            <tr>
                    <td>{{$s->nombre}} </td>
	                <td  style="width:20px" ><img src="../../imagen/Caracteristicas/{{$s->foto}}" class="img-responsive"></td>
	                <td>
	                	<a class="btn btn-success" href="{{ route('admin.caracteristicas.edit', $s->id) }}" >E</a>
	                	 <a onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" href="{{ route('admin.caracteristicas.destroy', $s->id) }}"   >X</a>
	 		   
	                </td>
	            </tr>
	            @endforeach
			</tbody>
		</table>
	</div>

@endsection
