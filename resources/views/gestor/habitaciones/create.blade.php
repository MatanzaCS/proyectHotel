@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear habitacion</h2>
    <form class="row" method="POST" action="{{ url('admin/habitaciones') }}"  style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="Nombre">numero</label>
            <input type="text" id="Nombre" name="numero" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Descripcion">Piso</label>
            <input type="text" id="Descripcion" name="piso" class="form-control" />
        </div>
        <div class="form-group">
            <label for="precio_habitacion">estado</label>
            <select name="estado" class="form-control">
                <option value="libre">Libre</option>
                <option value="Mantenimiento">Mantenimiento</option>
                <option value="Ocupado">Ocupado</option>    
            </select>             
        </div>
         <div class="form-group">
            <label for="precio_habitacion">Tipo Habitacion</label>
            <select name="TipoHabitacion_id" class="form-control">
            @foreach($datos[0] as $a)
                <option value="{{$a->id}}">{{$a->Nombre}}</option>
            @endforeach
            </select>              
        </div>
        
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
