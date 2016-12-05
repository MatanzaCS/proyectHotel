@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>registrar datos</h2>
    <form class="row" method="POST" action="{{ url('admin/personas') }}"  style="max-width: 350px">{{ csrf_field() }}
        <div class="form-group">
            <label for="Nombres">Nombres</label>
            <input type="text" id="Nombres" name="nombre" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Apellidos">Apellidos</label>
            <input type="text" id="Apellidos" name="apellidos" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Edad">Edad</label>
            <input type="text" id="Edad" name="edad" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Generos">Genero</label>
            <input type="text" id="Generos" name="sexo" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Telefonos">Telefonos</label>
            <input type="text" id="Telefonos" name="telefono" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Email">Correo Electronico</label>
            <input type="text" id="Email" name="email" class="form-control" />
        </div>
        <div class="form-group">
            <label for="TipoDocumentos">Tipo Documento</label>
            <select name="TipoDocumento" class="form-control">
                <option value="DNI">DNI</option>
                <option value="CE">Carnet Extranjeria</option>
                <option value="LM">Libreta Militar</option>   
                 <option value="LC">Licencia Conducir</option>  
                  <option value="other">OTROS</option>     
            </select>             
        </div>
        <div class="form-group">
            <label for="NumDocumentos">Numero Documento</label>
            <input type="text" id="NumDocumentos" name="numdocumento" class="form-control" />
        </div>
        
        
        
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
