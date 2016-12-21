@extends('layouts.dashboard')

@section('content')
    <h1>Listado de usuarios</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Tipo Usuario</th>
            <th>Nombres</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($datos[0] as $s)
            <tr>
                <td>{{$s->username}}</td>
                <td>{{$s->password}}</td>
                <td>{{$s->tipousuario_id}}</td>
                <td>{{$s->persona_id}}</td>
                
                <td>
                    <a href="{{ route('admin.usuarios.show', $s->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('admin.usuarios.edit', $s->id) }}" class="btn btn-primary">Editar</a>
                       
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
