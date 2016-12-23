@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear ususario</h2>
    <form class="row" method="POST" action="{{ url('admin/usuarios') }}" style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="username">Usuario</label>
            <input type="text" id="username" name="username" class="form-control" />
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" class="form-control" />
        </div>
                
        <div class="form-group">
            <label for="Tipo_Usuario">Tipo Usuario</label>
            <select class="form-control" name="TipoUsuario_id">
                @foreach ($tipos as $s)
                    <option value="{{$s->id}}">{{$s->nombre}}</option>
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label for="Persona">persona</label>
            <select class="form-control" name="persona_id">
                @foreach ($persona as $o)
                    <option value="{{$o->id}}">{{$o->nombre}}</option>
                @endforeach 
            </select>
        </div>
        <button type="submit">Guardar</button>
    </form> 
</div>
@endsection
