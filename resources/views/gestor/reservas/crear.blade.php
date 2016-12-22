@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Reservar</h2>
    <form class="row" autocomplete="off" method="POST" action="{{ url('admin/reservas') }}" style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="tipo_reserva">Tipo de Reserva</label>
            <select class="form-control" name="tipo_reserva">
                <option value="">Web</option>
                <option value="">Presencial</option>
            </select>
        </div>

        <div class="form-group">
            <label for="fecha_ingresa">Fecha de Llegada</label>
            <input type="date" id="fecha_ingresa" name="fecha_ingresa" class="form-control" />
        </div>
        <div class="form-group">
            <label for="fecha_salida">Fecha de Salida</label>
            <input type="date" id="fecha_salida" name="fecha_salida" class="form-control" />
        </div>
        <div class="form-group">
            <label for="costo_alojamiento">Costo de Alojamiento</label>
            <input type="text" id="costo_alojamiento" name="costo_alojamiento" class="form-control" />
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" name="estado">
                <option value="Por pagar">Por pagar</option>
                <option value="Pagado">Pagado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="clientes_id">Cliente</label>
            <input type="text" id="clientes_id" name="clientes_id" class="form-control" />
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
</div>
@endsection