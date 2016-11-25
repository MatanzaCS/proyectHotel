@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear Cuenta</h2>
    <form class="row" method="POST" action="{{ url('cuentas') }}" style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="codigo">Codigo</label>
            <input type="text" id="codigo" name="codigo" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" id="Nombres" name="Nombre" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Saldo">Saldo</label>
            <input type="text" id="Saldo" name="Saldo" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Secuencia">Secuencia</label>
            <input type="text" id="Secuencia" name="Secuencia" class="form-control" />
        </div>
        <div class="form-group">
            <label for="tipoCuenta_id">Tipo Usuario</label>
            <select class="form-control" name="tipoCuenta_id">
                @foreach ($datos[0] as $s)
                    <option value="{{$s->id}}">{{$s->nombre}}</option>
                @endforeach 
            </select>
        </div>
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
