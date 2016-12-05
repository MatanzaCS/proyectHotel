@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear Tipo producto</h2>
    <form class="row" method="POST" action="{{ url('admin/tipopro') }}" ccept-charset="UTF-8" enctype="multipart/form-data" style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" id="Nombre" name="Nombre" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Precios">Precio</label>
            <input type="text" id="Precios" name="precio" class="form-control" />
        </div>
        
        <div class="form-group">
            <label for="foto">foto</label>
            <input type="file" name="foto" class="" />
        </div>
        
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
