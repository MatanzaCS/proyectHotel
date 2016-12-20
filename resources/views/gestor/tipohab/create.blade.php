@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear Tipo de habitacion</h2>
    <form class="row" method="POST" action="{{ url('admin/tipohab') }}" ccept-charset="UTF-8" enctype="multipart/form-data" style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" id="Nombre" name="Nombre" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Descripcion">Descripcion</label>
             <textarea rows="4" cols="5" id="Descripcion" name="Descripcion" style="resize:none" class="form-control"></textarea>
       
        </div>
        <div class="form-group">
            <label for="precio_habitacion">Precio</label>
            <input type="text" name="precio_habitacion" class="form-control" />
        </div>
        <div class="form-group">
            <label for="foto">foto</label>
            <input type="file" name="foto" class="" />
            
        </div>
        <div>
    
          
       
        </div>
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
