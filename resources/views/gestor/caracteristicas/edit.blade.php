@extends('layouts.dashboard')
@section('content')
<div class="container">
    <h2>Editar caracteristicas {{$caracteristica->nombre}}</h2>
    <form class="row" method="PUT" action="{{route('admin.caracteristicas.update',$caracteristica->id)}}" ccept-charset="UTF-8" enctype="multipart/form-data" style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="{{$caracteristica->nombre}}" />
           <div class="form-group">
            <label for="foto">foto</label>
            <input type="file" name="foto" class="" />
        </div>        
        <button type="submit">Editar</button>
    </form>
</div>
@endsection
