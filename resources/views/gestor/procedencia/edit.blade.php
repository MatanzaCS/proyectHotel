
@extends('layouts.dashboard')

@section('content')
<div class="container">


          <h2>Editar habitacion numero {{$procedencias->Pais}}</h2>   

  <form class="row" action="{{route('admin.procedencia.update',$procedencias->id)}}" model="habitaciones" method="PUT" cept-charset="UTF-8" enctype="multipart/form-data" style="max-width: 350px">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="Pais">Pais</label>
            <input type="text" id="Pais" name="Pais" class="form-control" value="{{$procedencias->Pais}}"/>
        </div>
       <div class="form-group">
            <label for="departamento">Departamento</label>
            <input type="text" id="departamento" name="depertamento" class="form-control" value="{{$procedencias->departamento}}"/>
        </div>
     <div class="form-group">
            <label for="Ciudad">Ciudad</label>
            <input type="text" id="Ciudad" name="depertamento" class="form-control" value="{{$procedencias->Ciudad}}"/>
        </div>
    
           <div class="form-group">
            <label for="Direccion">Direccion</label>
            <input type="text" id="Direccion" name="depertamento" class="form-control" value="{{$procedencias->Direccion}}"/>
        </div>
    
      
       
        <button type="submit" href="">Editar</button>

    </form>
 
</div>
@endsection