@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear Tipo Docuemento</h2>
    <form class="row" method="POST" action="{{ url('admin/tipodoc') }}"  style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="Nombre">nombre</label>
            <input type="text" id="Nombre " name="Nombre" class="form-control" /> 
        </div>
                
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
