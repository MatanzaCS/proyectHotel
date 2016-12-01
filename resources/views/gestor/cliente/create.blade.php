@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear cliente</h2>
    <form class="row" method="POST" action="{{ url('admin/cliente') }}"  style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="fechain">Fecha entrada</label>
            <input type="text" id="fechain" name="fechain" class="form-control" />
        </div>
        <div class="form-group">
            <label for="fechaout">Fecha salida</label>
            <input type="text" id="fechaout" name="fechaout" class="form-control" />
        </div>
<!--
        <div class="form-group">
            <label for="precio_habitacion">estado</label>
            <select name="estado" class="form-control">
                <option value="libre">Libre</option>
                <option value="Mantenimiento">Mantenimiento</option>
                <option value="Ocupado">Ocupado</option>    
            </select>             
        </div>*/-->

       <div class="form-group">
            <label for="Personas">Personas</label>
            <select name="persona_id" class="form-control">
                @foreach($datos[0] as $a)
                    <option value="{{$a->id}}">{{$a->Nombre}}</option>
                @endforeach
            </select>              
        </div>
        
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
