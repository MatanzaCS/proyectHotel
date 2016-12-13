@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear Categoria</h2>
    <form class="row" method="POST" action="{{ url('admin/catpro') }}" ccept-charset="UTF-8" enctype="multipart/form-data" style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" id="Nombre" name="Nombre" class="form-control" />
        </div>
       
        <div class="form-group">
            <label for="foto">foto</label>
            <input type="file" name="foto" class="" />
        </div>
        
        
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
