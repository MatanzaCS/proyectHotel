@extends('layouts.dashboard')

@section('content')
    <h1>Listado de Reservas</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Numero de Reserva</th>
            <th>Cliente</th>
            <th>Habitacion</th>
            <th>Fecha de Reserva</th>
            <th>Fecha de Ingreso</th>
            <th>Fecha de Salida</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>
          @foreach($resultado as $dato)
            <tr>
                <td>{{$dato->id}}</td>
                <td>{{$dato->nombre}}</td>
                <td>{{$dato->numero}}</td>
                <td>{{$dato->fecha_reserva}}</td>
                <td>{{$dato->fecha_ingresa}}</td>
                <td>{{$dato->fecha_salida}}</td>
                <td>{{$dato->estado}}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
@endsection
