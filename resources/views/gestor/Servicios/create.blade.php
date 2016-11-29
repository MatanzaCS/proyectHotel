@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear Servicios</h2>
    <form class="row" method="POST" action="{{ url('admin/Servicios') }}"  style="max-width: 350px">{{ csrf_field() }}
        
        <div class="form-group">
            <label for="nomservicio">nombre</label>
            <input type="text" id="nomservicio" name="nomservicio" class="form-control" />
        </div>

        <div class="form-group">
            <label for="fecha">fecha</label>
            <input type="text" id="fecha" name="Fecha" class="form-control" />
        </div>


        <div class="form-group">
            <label for="TipoServicio_id">Tipo Servicio</label>
            <select name="TipoServicio_id" class="form-control">
                @foreach($datos[0] as $a)
                    <option value="{{$a->id}}">{{$a->Nombre}}</option>
                @endforeach
            </select>              
        </div>
        <div class="form-group">
            <label for="reserva_id">Reserva</label>
            <select name="reserva_id" class="form-control">
                @foreach($datos[0] as $b)
                    <option value="{{$a->id}}">{{$a->Nombre}}</option>
                @endforeach
            </select>              
        </div>

        <!--<div class="form-group">
          <label for="Precio_Servicio">Precios</label>
            <select name="Precios" class="form-control">
                <option value="libre">Libre</option>
                <option value="Mantenimiento">Mantenimiento</option>
                <option value="Ocupado">Ocupado</option>    
            </select>       */      
        </div>-->
         
        
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
