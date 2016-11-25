app.controller('buscarController', function($scope,$http , $routeParams) {

    $scope.ponerFecha = function () {
        var f = new Date();
        $scope.fechaini = f.getFullYear() + "-" + "0" + (f.getMonth() +1) + "-" +f.getDate();
        $scope.fechafin = f.getFullYear() + "-" + "0" + (f.getMonth() +1) + "-" +(f.getDate() + 1);
        /*
        var fechaini1 = new Date($scope.fechaini);
        var fechafin1 = new Date($scope.fechafin);

        alert((fechafin1 - fechaini1)/86400000);
        */
    }
	$scope.buscar = function () {
        $http.get('admin/buscar/'+$scope.fechaini+'/'+$scope.fechafin).then(function successCallback(response) {
            $scope.tipoPerHabs = response.data;
            //ordenarPorTipo(response.data);
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
});