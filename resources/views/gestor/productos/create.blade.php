@extends('layouts.dashboard')

@section('content')
<div class="container">
                  
    <h2>Crear producto </h2>

    <form class="row" method="POST" action="{{ url('admin/productos') }}"  style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" id="Nombre" name="nombre" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Precio">Precio</label>
            <input type="text" id="Precio" name="precio" class="form-control" />
        </div> 
        <div class="form-group">
            <label for="Cantidad">Cantidad</label>
            <input type="text" id="Cantidad" name="cantidad" class="form-control" />
        </div>
        
         <div class="form-group">
            <label for="CategoriaProducto_id">Categoria</label>
            <select name="CategoriaProducto_id" class="form-control">
                @foreach($datos[0] as $a)
                    <option value="{{$a->id}}">{{$a->Nombre}}</option>
                @endforeach
            </select>              
        </div>
        
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
