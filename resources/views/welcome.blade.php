@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido Usuario {{Auth::user()->Nombres}}  {{Auth::user()->Apellidos}}</div>

                <div class="panel-body">
                    Nuevo Proceso.
                    o
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
