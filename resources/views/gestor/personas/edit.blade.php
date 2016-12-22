@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Editar Tipo habitacion {{$personas->nombre}}</h2>
    <form class="row" method="PUT" action="{{route('admin.personas.update',$personas->id)}}" ccept-charset="UTF-8" enctype="multipart/form-data" style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="{{$personas->nombre}}" />
        </div>
        <div class="form-group">
              <label for="apellidos">Apellidos</label>
            <textarea rows="4" cols="5" id="apellidos" name="apellidos"class="form-control" style="resize:none" />{{$personas->apellidos}}</textarea>
          
            
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="text" name="edad" class="form-control" value="{{$personas->edad}}"/>
        </div>
         <div class="form-group">
            <label for="sexo">Sexo</label>
            <input type="text" name="sexo" class="form-control" value="{{$personas->sexo}}"/>
        </div>   
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" name="telefono" class="form-control" value="{{$personas->telefono}}"/>
        </div>  
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" value="{{$personas->email}}"/>
        </div>
        <div class="form-group">
            <label for="TipoDocumento">Tipo de Documento</label>
            <input type="text" name="TipoDocumento" class="form-control" value="{{$personas->TipoDocumento}}"/>
        </div>    
         <div class="form-group">
            <label for="numdocumento">Numero de Documento</label>
            <input type="text" name="numdocumento" class="form-control" value="{{$personas->numdocumento}}"/>
        </div>                   
        <button type="submit">Editar</button>
    </form>
</div>
@endsection
