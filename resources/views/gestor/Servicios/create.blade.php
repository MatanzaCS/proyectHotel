@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear Servicio</h2>
    <form class="row" method="POST" action="{{ url('admin/Servicios') }}"  style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="nomservicio">Nombre</label>
            <input type="text" id="nomservicio " name="nomservicio" class="form-control" />
        </div>
        <div class="form-group">
            <label for="fecha">fecha</label>
            <input type="date" id="fecha" name="fecha" class="form-control" />
        </div>
        <div class="form-group">
            <label for="estado">estado</label>
            <input type="text" id="estado" name="estado" class="form-control" />
        </div>
        
        <div class="form-group"> 
            <label for="tiposervicio">Tipos Servicio</label>
            <select name="TipoServicio_id" class="form-control">
            @foreach($datos[0] as $a)
                <option value="{{$a->id}}">{{$a->Nombre}}</option>
            @endforeach
            </select>
        </div>

        
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
