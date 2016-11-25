@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear ususario</h2>
    <form class="row" method="POST" action="{{ url('usuarios') }}" style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="codigo">Codigo</label>
            <input type="text" id="codigo" name="codigo" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Nombres">Nombres</label>
            <input type="text" id="Nombres" name="Nombres" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Apellidos">Apellidos</label>
            <input type="text" id="Apellidos" name="Apellidos" class="form-control" />
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" id="telefono" name="telefono" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Correoelect">Correo Electronico</label>
            <input type="text" id="CorreoElect" name="CorreoElect" class="form-control" />
        </div>
        <div class="form-group">
            <label for="username">Usuario</label>
            <input type="text" id="username" name="username" class="form-control" />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" id="password" name="password" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Direccion">Direccion</label>
            <input type="text" id="Direccion" name="Direccion" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Tipo_Usuario">Tipo Usuario</label>
            <select class="form-control" name="TipoUsuario_id">
                @foreach ($datos[0] as $s)
                    <option value="{{$s->id}}">{{$s->nombre}}</option>
                @endforeach 
            </select>
        </div>
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
