@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Editar Tipo Servicio {{$tipos->Nombre}}</h2>
    <form class="row" method="PUT" action="{{route('admin.tiposer.update',$tipos->id)}}" ccept-charset="UTF-8" enctype="multipart/form-data" style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" id="Nombre" name="Nombre" class="form-control" value="{{$tipos->Nombre}}" />
        </div>
        <div class="form-group">
            <label for="Descripcion">Descripcion</label>
            <input type="text" id="Descripcion" name="Descripcion" class="form-control" value="{{$tipos->Descripcion}}" />
        </div>
        <div class="form-group">
            <label for="Precio">Precio</label>
            <input type="text" name="precio" class="form-control" value="{{$tipos->precio}}"/>
        </div>
        <div class="form-group">
            <label for="foto">foto</label>
            <input type="file" name="foto" class="form-control" />
        </div>
        
        <button type="submit">Editar</button>
    </form>
</div>
@endsection
