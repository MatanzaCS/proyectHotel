@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Editar Tipo habitacion {{$tipos->Nombre}}</h2>
    <form class="row" method="PUT" action="{{route('admin.tipohab.update',$tipos->id)}}" ccept-charset="UTF-8" enctype="multipart/form-data" style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" id="Nombre" name="Nombre" class="form-control" value="{{$tipos->Nombre}}" />
        </div>
        <div class="form-group">
              <label for="Descripcion">Descripcion</label>
            <textarea rows="4" cols="5" id="Descripcion" name="Descripcion"class="form-control" style="resize:none" />{{$tipos->Descripcion}}</textarea>
            <label for="Descripcion">Descripcion</label>
            
        </div>
        <div class="form-group">
            <label for="precio_habitacion">Precio</label>
            <input type="text" name="precio_habitacion" class="form-control" value="{{$tipos->precio_habitacion}}"/>
        </div>
        <div class="form-group">
            <label for="foto">foto</label>
            <input type="file" name="foto" class="" id="foto" value="{{$tipos->foto}}"/>
        </div>
     
        <button type="submit">Editar</button>
    </form>
</div>
@endsection
