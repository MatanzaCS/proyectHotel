
@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Editar habitacion numero {{$habitaciones->numero}}</h2>
    <form class="row" action="{{route('admin.habitaciones.update',$habitaciones->id)}}"  method="PUT" cept-charset="UTF-8" enctype="multipart/form-data" style="max-width: 350px">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="Nombre">numero</label>
            <input type="text" id="Nombre" name="numero" class="form-control" value="{{$habitaciones->numero}}"/>
        </div>
        <div class="form-group">
            <label for="Descripcion">Piso</label>
            <input type="text" id="Descripcion" name="piso" class="form-control" value="{{$habitaciones->piso}}"/>
        </div>
        <div class="form-group">
            <label for="precio_habitacion">estado</label>
            <select name="estado" class="form-control" >
                <option value="libre">Libre</option>
                <option value="Mantenimiento">Mantenimiento</option>
                <option value="Ocupado">Ocupado</option>    
            </select>             
        </div>
         <div class="form-group">
            <label for="precio_habitacion">Tipo Habitacion</label>
            <select name="TipoHabitacion_id" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
            </select>              
        </div>
        
        <button type="submit" href="">Editar</button>
    </form>
</div>
@endsection

