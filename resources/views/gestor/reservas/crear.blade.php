@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear Cuenta</h2>
    <form class="row" method="POST" action="{{ url('proveedor') }}" style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="RUC">RUC</label>
            <input type="text" id="RUC" name="RUC" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Tipoproveedor_id">Tipo</label>
            <select class="form-control" name="Tipoproveedor_id">

            </select>
        </div>
        <div class="form-group">
            <label for="RazonSocial">Razon Social</label>
            <input type="text" id="RazonSocial" name="RazonSocial" class="form-control" />
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
</div>
@endsection
