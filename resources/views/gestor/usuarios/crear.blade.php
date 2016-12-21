@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear ususario</h2>
    <form class="row" method="POST" action="{{ url('usuarios') }}" style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="username">Usuario</label>
            <input type="text" id="username" name="username" class="form-control" />
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="text" id="password" name="password" class="form-control" />
        </div>
                
        <div class="form-group">
            <label for="Tipo_Usuario">Tipo Usuario</label>
            <select class="form-control" name="TipoUsuario_id">
                @foreach ($datos[0] as $s)
                    <option value="{{$s->id}}">{{$s->nombre}}</option>
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label for="Persona">Datos</label>
            <select class="form-control" name="persona_id">
                @foreach ($datos[1] as $s)
                    <option value="{{$s->id}}">{{$s->nombre}}</option>
                @endforeach 
            </select>
        </div>
        <button type="submit">Guardar</button>
    </form> 
</div>
@endsection
