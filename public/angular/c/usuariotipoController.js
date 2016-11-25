app.controller('usuariotipoController', function($scope,$http) {

    $scope.enviar = function () {
        $http.post('admin/usuariotipo',
            {   'nombre':$scope.nombre
            }).then(function successCallback(response) {
                $scope.mensaje = response.data.mensaje;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    
});