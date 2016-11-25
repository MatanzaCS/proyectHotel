app.controller('monedaController', function($scope,$http) {
	$scope.enviar = function () {
        $http.post('admin/moneda',
            {   'moneda':$scope.moneda,
                'siglas':$scope.siglas,
                'tipocambio':$scope.tipocambio
            }).then(function successCallback(response) {
                swal("Excelente!", "Se ha registrado la moneda.", "success");
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    
    $scope.getMonedas = function () {
        $http.get('admin/moneda').then(function successCallback(response) {
                $scope.monedas = response.data;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }

    $scope.dataEditar = function (data) {

        $scope.id = data.id;
        $scope.moneda = data.moneda;
        $scope.siglas = data.siglas;
        $scope.tipocambio = data.tipocambio;
    }

    $scope.editar = function () {
        $http.put('admin/moneda/'+$scope.id,
            {   'moneda':$scope.moneda,
                'siglas':$scope.siglas,
                'tipocambio':$scope.tipocambio
            }).then(function successCallback(response) {
                swal("Excelente!", "Se ha editado la moneda.", "success");
                $scope.monedas = response.data;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    $scope.eliminar = function (id) {

        swal({   title: "¿ Estas seguro ?",
            text: "Se eliminará esta moneda.",
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Sí, estoy seguro!",
            cancelButtonText: "Cancelar",   
            closeOnConfirm: false }, 
            function(){

                swal("Eliminado!", 
                    "La moneda se ha eliminado.", 
                    "success"); 

                $http.delete( 'admin/moneda/'+id ).then(function successCallback(response) {
                    $scope.monedas = response.data;
                }, function errorCallback(response) {
                    swal("Ha ocurrido un error!", "No se puede borrar datos utilizados para otros registros.", "error");
                });
            }
        );
    }
    
});