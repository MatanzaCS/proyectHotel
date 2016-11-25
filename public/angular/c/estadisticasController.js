app.controller('estadisticasController', function($scope,$http) {
    $scope.buscarE = function ()
    {   
        a = $('#year').val();
        m = $('#mes').val();
        $http.get('admin/estadisticas/'+m+'/'+ a).then(function successCallback(response) {
                    $scope.estadisticas = response.data;
                    $scope.todo = $scope.estadisticas.arribosPorDia;
                    $scope.arribosTipo = response.data.arribosPorTipo;
                    $scope.paices = response.data.arriposPorPais;
                    $scope.paicesP = response.data.pernoctacionesPorPais;
                    $scope.regionA = response.data.arribosPorRegion;
                    $scope.regionN = response.data.pernoctacionesPorRegion;
                    for(q in $scope.todo){
                       $scope.diasC = $scope.todo[q].fechaentrada.split(" ");
                       $scope.todo[q].dia = $scope.diasC[0];
                    }
                }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.
                });
    }
    $scope.generar = function (){
        $('.tabq').css('visibility','visible')
    }
});