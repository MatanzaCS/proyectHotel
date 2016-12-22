@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Editar Categoria {{$catpro->Nombre}}</h2>
    <form class="row" method="PUT" action="{{route('admin.catpro.update',$catpro->id)}}" ccept-charset="UTF-8" enctype="multipart/form-data" style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="catpro">Nombre</label>
            <input type="text" id="Nombre" name="Nombre" class="form-control" value="{{$catpro->Nombre}}" />
        </div>

        <div class="form-group">
            <label for="foto">foto</label>
            <input type="file" name="foto" class="" id="foto" value="{{$catpro->foto}}"/>
        </div>
     
        <button type="submit">Editar</button>
    </form>
</div>
@endsection
