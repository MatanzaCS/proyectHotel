@extends('layouts.dashboard')

@section('content')

	<div>
	<h1>Lista productos</h1>
	<a class="btn btn-primary" href="{{ url('admin/productos/create') }}"> Crear</a>
		<table class="table">
			<thead>
				<tr>
                    <th>Categoria</th>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Acciones</th>
					
				</tr>
			</thead>
			<tbody>
		@foreach ($datos[0] as $s)
	            <tr>
                    @foreach ($datos[1] as $o)
                        @if ($o->id == $s->CategoriaProducto_id)
                            <td width="90s"><img src="../imagen/cateproducto/{{$o->foto}}" class="img-responsive"></td>
                        @endif
                    @endforeach
                    
			        <td>{{$s->nombre}} </td>
	                <td>{{$s->precio}}</td>

                    <td>{{$s->cantidad}}</td>
					
	                <td> 
	    			   <a class="btn btn-info" href="{{route('admin.productos.edit', $s->id)}}"   >E</a>
	                   <a onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger" href="{{ route('admin.productos.destroy', $s->id) }}"   >X</a>
	 		   
	                </td>
	            </tr>
	            @endforeach
			</tbody>
		</table>
	</div>

@endsection
