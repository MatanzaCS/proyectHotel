app.controller('porcentajeController', function($scope,$http) {
	$scope.enviar = function () {
        $http.post('admin/porcentaje',
            {   'porcentaje':$scope.porcentaje,
            }).then(function successCallback(response) {
                alert(response.data.mensaje);
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    
    $scope.getPorcentajes = function () {
        $http.get('admin/porcentaje').then(function successCallback(response) {
                $scope.porcentajes = response.data;
                for (x in response.data) {
                    if(response.data[x].porcentaje == 0)
                        $scope.reservasCero = 'Se aceptan las Reservas por S/. 0.00';
                    else
                        $scope.reservasCero = 'No se aceptan las Reservas por S/. 0.00';

                } 
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }

    $scope.dataEditar = function (data) {

        $scope.id = data.id;
        $scope.porcentaje = data.porcentaje;
        
    }

    $scope.editar = function () {
        $http.put('admin/porcentaje/'+$scope.id,
            {   'porcentaje':$scope.porcentaje
            }).then(function successCallback(response) {
                $scope.porcentajes = response.data;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    $scope.eliminar = function (id) {
        r = confirm("¿Deseas eliminar esta porcentaje?");

        if (r) {
            $http.delete( 'admin/porcentaje/'+id ).then(function successCallback(response) {
                window.location.reload()

            }, function errorCallback(response) {
                alert("Ha ocurrido un error, No se puede borrar datos utilizados para otros registros");
            });
        }
    }

    $scope.getTiposPago = function () {
        $http.get('admin/pago').then(function successCallback(response) {
                $scope.pagoCero = response.data[0];
                for (i in response.data) {
                    if (response.data[i].activo == 0) {
                        (response.data).splice(i,1);
                    }
                }
                $scope.pagoTipos = response.data;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    $scope.cambiarEstado = function (data) {
        if (data.activo == 1) 
            data.activo = 0;
        else
            data.activo = 1;
        $http.put('admin/pago/' + data.id, {
            'activo': data.activo
        })
        .then(function successCallback(response) {
            $scope.pagoCero = response.data[0];
                for (i in response.data) {
                    if (response.data[i].activo == 0) {
                        (response.data).splice(i,1);
                    }
                }
                $scope.pagoTipos = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
        
    }
});