@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear Servicio</h2>
    <form class="row" method="POST" action="{{ url('admin/Servicios') }}"  style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" id="Nombre" name="numero" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Descripcion">fecha</label>
            <input type="text" id="Descripcion" name="piso" class="form-control" />
        </div>
        
        <div class="form-group"> 
            <label for="tipoServicio">Tipos Servicio</label>
            <select name="TipoServicio_id" class="form-control">
            @foreach($datos[0] as $a)
                <option value="{{$a->id}}">{{$a->Nombre}}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="reserva_id">reserva</label>
            <select name="reserva_id" class="form-control">
                @foreach($datos[0] as $s)
                    <option value="{{$a->id}}">{{$s->Nombre}}</option>
                @endforeach
            </select>              
        </div>
        
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
