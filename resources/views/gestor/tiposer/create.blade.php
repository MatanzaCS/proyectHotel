@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear Tipo de servicio</h2>
    <form class="row" method="POST" action="{{ url('admin/tiposer') }}" ccept-charset="UTF-8" enctype="multipart/form-data" style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" id="Nombre" name="Nombre" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Descripcion">Descripcion</label>
            <input type="text" id="Descripcion" name="Descripcion" class="form-control" />
        </div>
        <div class="form-group">
            <label for="precio">precio</label>
            <input type="text" id="precio" name="precio" class="form-control" />
        </div>
        
        <div class="form-group">
            <label for="foto">foto</label>
            <input type="file" name="foto" class="" />
        </div>
        
        <button type="submit" href="{{ url('admin/tiposer') }}">Guardar</button>
    </form>
</div>
@endsection
