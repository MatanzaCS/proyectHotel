@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Editar Servicio {{$Servicios->nomservicio}}</h2>
    <form class="row" action="{{route('admin.Servicios.update',$Servicios->id)}}"  method="PUT" cept-charset="UTF-8" enctype="multipart/form-data" style="max-width: 350px">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="nomservicio">nomservicio</label>
            <input type="text" id="nomservicio" name="nomservicio" class="form-control" value="{{$Servicios->nomservicio}}"/>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="text" id="fecha" name="fecha" class="form-control" value="{{$Servicios->fecha}}"/>
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
            
            </select>              
        </div>
        
        <button type="submit" href="">Editar</button>
    </form>
</div>
@endsection
