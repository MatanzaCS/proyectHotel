@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear cliente</h2>
    <form class="row" method="POST" action="{{ url('admin/cliente') }}"  style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="fechain">Fecha entrada</label>
            <input type="date" id="fechain" name="fechain" class="form-control" />
        </div>
        <div class="form-group">
            <label for="fechaout">Fecha salida</label>
            <input type="date" id="fechaout" name="fechaout" class="form-control" />
        </div>

        <div class="form-group">
            <label for="persona_id">Personas</label>
            <select name="persona_id" class="form-control">
                @foreach($datos[1] as $a)
                    <option value="{{$a->id}}">{{$a->nombre}}</option>
                @endforeach
            </select>              
        </div>

       <div class="form-group">
            <label for="Procedencia_id">Procedencia</label>
            <select name="Procedencia_id" class="form-control">
                @foreach($datos[0] as $b)
                    <option value="{{$b->id}}">{{$b->Pais}}</option>
                @endforeach
            </select>              
        </div>
        
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
