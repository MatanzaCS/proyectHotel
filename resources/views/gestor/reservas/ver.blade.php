@extends('layouts.dashboard')

@section('content')
    <h1>Listado de Reservas</h1>
    <div class="row">
        <a href="{{url('admin/reservas/create')}}"><button class="btn btn-primary">Nueva Reserva</button></a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Numero de Reserva</th>
            <th>Cliente</th>
            <th>Fecha de Reserva</th>
            <th>Fecha de Pago</th>
            <th>Fecha de Ingreso</th>
            <th>Fecha de Salida</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>
          @foreach($resultado[0] as $dato)

            <tr>
                <td>{{$dato->id}}</td>
                <td>{{$dato->nombre}}</td>
                <td>{{$dato->fecha_reserva}}</td>
                <td>{{$dato->FechaPago}}</td>
                <td>{{$dato->fecha_ingresa}}</td>
                <td>{{$dato->fecha_salida}}</td>
                <td align="center">
                @if($dato->estado=='Pagado')
                    <button class="btn btn-success btn-xs">{{$dato->estado}}</button>
                @else
                    <button class="btn btn-danger btn-xs">{{$dato->estado}}</button>
                @endif
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
@endsection
