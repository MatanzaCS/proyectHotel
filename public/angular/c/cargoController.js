app.controller('cargoController', function($scope,$http) {

    $scope.enviar = function () {
        $http.post('admin/emptipo',
            {   'tipo':$scope.tipo,
                'descripcion':$scope.descripcion
            }).then(function successCallback(response) {
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    
    $scope.getCargos = function () {
        $http.get('admin/getEmptipos').then(function successCallback(response) {
                $scope.cargos = response.data;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }

    $scope.dataEditar = function (data) {

        $scope.id = data.id;
        $scope.tipo = data.tipo;
        $scope.descripcion = data.descripcion;
    }

    $scope.editar = function () {
        $http.put('admin/emptipo/'+$scope.id,
            {   'tipo':$scope.tipo,
                'descripcion':$scope.descripcion
            }).then(function successCallback(response) {
                $scope.cargos = response.data;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    $scope.eliminar = function (id) {
        r = confirm("¿Deseas eliminar este cargo?");

        if (r) {
            $http.delete( 'admin/emptipo/'+id ).then(function successCallback(response) {
                $scope.cargos = response.data;
            }, function errorCallback(response) {
                swal({   
                        title: "Ha ocurrido un error!",   
                        text: "No se puede borrar datos utilizados para otros registros.",   
                        timer: 3000,   
                        showConfirmButton: false 
                    });
            });
        }
    }
    
});