@extends('layouts.dashboard')

@section('content')
    <h1>Listado de cuentas</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Codigo</th>
            <th>Apellidos y nombres</th>
            <th>Correo</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($datos[0] as $s)
            <tr>
                <td>{{$s->Codigo}}</td>
                <td>{{$s->Apellidos}} {{$s->Nombres}}</td>
                <td>{{$s->CorreoElect}}</td>
                <td>{{$s->estado}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
