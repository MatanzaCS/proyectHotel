@extends('layouts.app')

@section('content')
<div class="container2">
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="titulo">Login</div>
                <div class="">
                    <form class="" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <section class="row cont-inputs">
                            <div class="col-xs-3">
                            <i class="fa fa-user st" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                    <label id="icon" for="username" class="col-md-4 control-label">usuario</label>

                                    <div class="col-xs-12">
                                        <input id="usuario" type="text" class="form-control" name="username" value="{{ old('username') }}">

                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </section>
                         <section class="row cont-inputs">
                            <div class="col-xs-3">
                            <i class="fa fa-lock st" aria-hidden="true"></i></i>
                            </div>
                            <div class="col-xs-9">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Contraseña</label>

                                    <div class="col-xs-12">
                                        <input id="password" type="password" class="form-control" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </section>
                        

                        <div class="form-group">
                            <div class="col-md-12">

                            
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Iniciar
                                </button>


                                <a href="/" class="btn btn-danger">
                                    <i class="fa fa-btn fa-sign-out"></i> Salir
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
