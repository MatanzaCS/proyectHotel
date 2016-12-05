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
        </div>
        <div class="form-group">
            <label for="Ciudad">Ciudad</label>
            <input type="text" id="Ciudad" name="Ciudad" class="form-control" />
        </div>
        
        <div class="form-group">
            <label for="Direccion">Direccion</label>
            <input type="text" id="Direccion" name="Direccion" class="form-control" />
        </div>
              
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
