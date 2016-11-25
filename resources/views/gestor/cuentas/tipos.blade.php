@extends('layouts.dashboard')

@section('content')
    <div ng-controller="tipocuentaController" ng-init="get()">
        <h1>Listado de Tipos de cuentas</h1>
        <table class="table" >
            <thead>
            <tr>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Nuevo +</button></td>
            </tr>
            <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Accion</th>
            </tr>
            </thead>
            <tbody>
                <tr ng-repeat="x in tipos">
                    <td>@{{$index+1}}</td>
                    <td>@{{x.nombre}}</td>
                    <td>
                        <button class="btn btn-success">E</button>
                        <button class="btn btn-danger">X</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Nueva tipo de cuenta</h4>
              </div>
              <div class="modal-body">
                
                    <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        <input type="text" id="Nombres" name="Nombre" ng-model="mlnombre" class="form-control" />
                    </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" ng-click="guardar()" data-dismiss="modal">Guardar</button>
              </div>
            </div>
          </div>
        </div>
    </div>
    
@endsection
