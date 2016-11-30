@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear Procedencia</h2>
    <form class="row" method="POST" action="{{ url('admin/procedencia') }}"  style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="Pais">Pais</label>
            <input type="text" id="Pais " name="Pais" class="form-control" /> 
        </div>
        <div class="form-group">
            <label for="departamento">Departamento</label>
            <input type="text" id="departamento" name="departamento" class="form-control" />
        </div>Departamento
        <div class="form-group">
            <label for="region">Region</label>
            <input type="text" id="region" name="region" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Ciudad">Ciudad</label>
            <input type="text" id="Ciudad" name="Ciudad" class="form-control" />
        </div>
        
        <div class="form-group"> 
            <label for="cliente_id"> Cliente</label>
            <select name="cliente_id" class="form-control">
            @foreach($datos[0] as $a)
                <option value="{{$a->id}}">{{$a->Nombre}}</option>
            @endforeach
            </select> 
        </div>

        
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
