@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Reservar</h2>
    <form class="row" method="POST" action="{{ url('proveedor') }}" style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            @include('gestor.reservas.search')
        </div>
        <div class="form-group">
            <label for="DNI">Nombre</label>
            <input type="text" id="DNI" name="DNI" class="form-control" />
        </div>
        <div class="form-group">
            <label for="DNI">Primer Apellido</label>
            <input type="text" id="DNI" name="DNI" class="form-control" />
        </div>
        <div class="form-group">
            <label for="DNI">Segundo Apellido</label>
            <input type="text" id="DNI" name="DNI" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Tipoproveedor_id">Habitacion</label>
            <select class="form-control" name="Tipoproveedor_id">
                <option value="simple">simple</option>
                <option value="doble">doble</option>
                <option value="matrimonial">matrimonial</option>
                <option value="presidencial">presidencial</option>
            </select>
        </div>
        <div class="form-group">
            <label for="RazonSocial">Fecha de Llegada</label>
            <input type="text" id="RazonSocial" name="RazonSocial" class="form-control" />
        </div>
        <div class="form-group">
            <label for="RazonSocial">Fecha de Salida</label>
            <input type="text" id="RazonSocial" name="RazonSocial" class="form-control" />
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
</div>
@endsection
