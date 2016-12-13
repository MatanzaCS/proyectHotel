@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear cliente</h2>
    <form class="row" method="POST" action="{{ url('admin/cliente') }}"  style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="Cantidad"> Cantidad</label>
            <input type="text" id="Cantidad" name="cantidad" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Estado"> Estado</label>
            <input type="text" id="Estado" name="estado" class="form-control" />
        </div>
         <div class="form-group">
            <label for="Fecha"> Fecha</label>
            <input type="date" id="Fecha" name="fecha" class="form-control" />
        </div>

        <div class="form-group">
            <label for="producto_id">Productos</label>
            <select name="producto_id" class="form-control">
                @foreach($datos[2] as $a)
                    <option value="{{$a->id}}">{{$a->nombre}}</option>
                @endforeach
            </select>              
        </div>
        <div class="form-group">
            <label for="total"> total</label>
            <input type="date" id="total" name="total" class="form-control" />
        </div>
       <div class="form-group"> 
            <label for="clientes_id">Clientes</label>
            <select name="clientes_id" class="form-control">
                @foreach($datos[1] as $b)
                    <option value="{{$b->id}}">{{$b->persona_id}}</option>
                @endforeach
            </select>              
        </div>
        
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
