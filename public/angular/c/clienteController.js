app.controller('clienteController', function($scope,$http) {

    $scope.getClientes = function () {
        $http.get('admin/getclientess').then(function successCallback(response) {
            //console.log(response.data);
            $scope.cliente = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    $scope.verCliente = function (data) {
        $scope.idcliente = data.id;
        $scope.nombre = data.nombres;
        $scope.apellido = data.apellidos;
      	$scope.sexo = data.sexo;
        $scope.nacimiento = data.fecha_nac;
        $scope.dni = data.dni;
        $scope.prof_ocup = data.prof_ocup;
        $scope.direccion = data.direccion;
        $scope.celular = data.celular;
        $scope.ciudad = data.ciudad;
        $scope.pais = data.pais;
        $scope.correo= data.email;
    }

    $scope.test = function () {
        alert('Hellos');
    }
});