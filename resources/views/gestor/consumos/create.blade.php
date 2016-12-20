@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>agregar consumo</h2>
    <form class="row" method="POST" action="{{ url('admin/consumos') }}"  style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="text" id="cantidad" name="cantidad" class="form-control" />
        </div>
        <div class="form-group">
            <label for="estado">Estado </label>
            <input type="text" id="estado" name="estado" class="form-control" />
        </div>

        <div class="form-group">
            <label for="fecha">Fecha </label>
            <input type="date" id="fecha" name="fecha" class="form-control" />
        </div>
        <div class="form-group">
            <label for="producto_id">Producto</label>
            <select name="producto_id" class="form-control">
                @foreach($datos[1] as $a)
                    <option value="{{$a->id}}">{{$a->nombre}}</option>
                @endforeach
            </select>              
        </div>

        <div class="form-group">
            <label for="total">total </label>
            <input type="text" id="total" name="total" class="form-control" />
        </div>
       <div class="form-group">
            <label for="clientes_id">Cliente</label>
            <select name="clientes_id" class="form-control">
                @foreach($datos[2] as $b)
                    <option value="{{$b->id}}">{{$b->cliente_id}}</option>
                @endforeach
            </select>              
        </div>
        
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
