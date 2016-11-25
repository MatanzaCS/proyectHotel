app.controller('tipocuentaController', function($scope, $http) {

    $scope.get = function () {
        $http.get('getalltipos').then(function successCallback(response) {
                $scope.tipos = response.data;
                console.log($scope.tipos);
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }

     $scope.guardar = function () {

        $http.post('tipocuentas',
            {   'nombre':$scope.mlnombre,
          
            }).then(function successCallback(response) {
                 $scope.get();
            });
      }
});