app.controller('graficasController', function($scope,$http) {
     $scope.getgrafCircle = function () {
        $http.get('admin/report').then(function successCallback(response) {


            $scope.habit = response.data['habitaciones'];

            $scope.diasRegistros = response.data['diasRegistros'];
            $scope.mesesRegistros = response.data['mesesRegistros'];
            $scope.yearsRegistros = response.data['yearsRegistros'];



            var totoal=0;
            for (var i = 0; i < $scope.habit.length; i++) {
                totoal+=$scope.habit[i].user_count;
            }
            for (var i = 0; i < $scope.habit.length; i++) {
                $scope.habit[i].value = ($scope.habit[i].user_count * 100 / totoal).toFixed(1);
                $scope.habit[i].label = $scope.habit[i].nombre;
                $scope.habit[i].formatted = 'aprox. ' + $scope.habit[i].value + '%';
            }
            Morris.Donut({
                element: 'graph',
                data:$scope.habit,
                  formatter: function (x, data) { return data.formatted; }
            });

            $scope.diasReservas = response.data['diasReservas'];
            $scope.mesesReservas = response.data['mesesReservas'];
            $scope.yearsReservas = response.data['yearsReservas'];

            for (var i = 0; i < $scope.diasReservas.length; i++) {
                    $scope.diasReservas[i].x = $scope.diasReservas[i].fecha_inicio;
                    $scope.diasReservas[i].y = $scope.diasReservas[i].cantidad;
                }

                Morris.Bar({
                  element: 'reservasdias',
                  data:$scope.diasReservas,
                  xkey: 'x',
                  ykeys: ['y'],
                  labels: ['Cantidad']
                }).on('click', function(i, row){
                  console.log(i, row);
                })

            for (var i = 0; i < $scope.mesesReservas.length; i++) {
                    $scope.mesesReservas[i].x = $scope.mesesReservas[i].fecha_inicio;
                    $scope.mesesReservas[i].y = $scope.mesesReservas[i].cantidad;
                }

                Morris.Bar({
                  element: 'reservasmeses',
                  data:$scope.mesesReservas,
                  xkey: 'x',
                  ykeys: ['y'],
                  labels: ['Cantidad']
                }).on('click', function(i, row){
                  console.log(i, row);
                })

            for (var i = 0; i < $scope.yearsReservas.length; i++) {
                    $scope.yearsReservas[i].x = $scope.yearsReservas[i].fecha_inicio;
                    $scope.yearsReservas[i].y = $scope.yearsReservas[i].cantidad;
                }

                Morris.Bar({
                  element: 'reservasaños',
                  data:$scope.yearsReservas,
                  xkey: 'x',
                  ykeys: ['y'],
                  labels: ['Cantidad']
                }).on('click', function(i, row){
                  console.log(i, row);
                })
            

             for (var i = 0; i < $scope.diasRegistros.length; i++) {
                    $scope.diasRegistros[i].x = $scope.diasRegistros[i].fecha;
                    $scope.diasRegistros[i].y = $scope.diasRegistros[i].total;
                }
                console.log($scope.diasRegistros);
                Morris.Bar({
                  element: 'ganaciasdias',
                  data:$scope.diasRegistros,
                  xkey: 'x',
                  ykeys: ['y'],
                  labels: ['Soles']
                }).on('click', function(i, row){
                  console.log(i, row);
                })

            for (var i = 0; i < $scope.mesesRegistros.length; i++) {
                    $scope.mesesRegistros[i].x = $scope.mesesRegistros[i].fecha;
                    $scope.mesesRegistros[i].y = $scope.mesesRegistros[i].total;
                }

                Morris.Bar({
                  element: 'ganaciasmeses',
                  data:$scope.mesesRegistros,
                  xkey: 'x',
                  ykeys: ['y'],
                  labels: ['Soles']
                }).on('click', function(i, row){
                  console.log(i, row);
                })
                for (var i = 0; i < $scope.yearsRegistros.length; i++) {
                    $scope.yearsRegistros[i].x = $scope.yearsRegistros[i].fecha;
                    $scope.yearsRegistros[i].y = $scope.yearsRegistros[i].total;
                }

                Morris.Bar({
                  element: 'ganaciasaños',
                  data:$scope.yearsRegistros,
                  xkey: 'x',
                  ykeys: ['y'],
                  labels: ['Soles']
                }).on('click', function(i, row){
                  console.log(i, row);
                })

        }, function errorCallback(response) {
        });
    }
    $scope.getRervasE = function () {
         var fecha = $('#dtime').val();

        $http.get('admin/report/reservas/' + fecha).then(function successCallback(response) {

            $scope.diasReservas = response.data['diasReservas'];
            $scope.mesesReservas = response.data['mesesReservas'];
            $scope.yearsReservas = response.data['yearsReservas'];

            for (var i = 0; i < $scope.diasReservas.length; i++) {
                    $scope.diasReservas[i].x = $scope.diasReservas[i].fecha_inicio;
                    $scope.diasReservas[i].y = $scope.diasReservas[i].cantidad;
                }

                Morris.Bar({
                  element: 'reservasdias',
                  data:$scope.diasReservas,
                  xkey: 'x',
                  ykeys: ['y'],
                  labels: ['Cantidad']
                }).on('click', function(i, row){
                  console.log(i, row);
                })

            for (var i = 0; i < $scope.mesesReservas.length; i++) {
                    $scope.mesesReservas[i].x = $scope.mesesReservas[i].fecha_inicio;
                    $scope.mesesReservas[i].y = $scope.mesesReservas[i].cantidad;
                }

                Morris.Bar({
                  element: 'reservasmeses',
                  data:$scope.mesesReservas,
                  xkey: 'x',
                  ykeys: ['y'],
                  labels: ['Cantidad']
                }).on('click', function(i, row){
                  console.log(i, row);
                })

            for (var i = 0; i < $scope.yearsReservas.length; i++) {
                    $scope.yearsReservas[i].x = $scope.yearsReservas[i].fecha_inicio;
                    $scope.yearsReservas[i].y = $scope.yearsReservas[i].cantidad;
                }

                Morris.Bar({
                  element: 'reservasaños',
                  data:$scope.yearsReservas,
                  xkey: 'x',
                  ykeys: ['y'],
                  labels: ['Cantidad']
                }).on('click', function(i, row){
                  console.log(i, row);
                })   
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    $scope.getIngresoE = function () {
        fecha = $('#ftime').val();
        $http.get('admin/report/ingreso/' + fecha).then(function successCallback(response) {

            $scope.diasRegistros = response.data['diasRegistros'];
            $scope.mesesRegistros = response.data['mesesRegistros'];
            $scope.yearsRegistros = response.data['yearsRegistros'];

             for (var i = 0; i < $scope.diasRegistros.length; i++) {
                    $scope.diasRegistros[i].x = $scope.diasRegistros[i].fecha;
                    $scope.diasRegistros[i].y = $scope.diasRegistros[i].total;
                }
                console.log($scope.diasRegistros);
                Morris.Bar({
                  element: 'ganaciasdias',
                  data:$scope.diasRegistros,
                  xkey: 'x',
                  ykeys: ['y'],
                  labels: ['Soles']
                }).on('click', function(i, row){
                  console.log(i, row);
                })

            for (var i = 0; i < $scope.mesesRegistros.length; i++) {
                    $scope.mesesRegistros[i].x = $scope.mesesRegistros[i].fecha;
                    $scope.mesesRegistros[i].y = $scope.mesesRegistros[i].total;
                }

                Morris.Bar({
                  element: 'ganaciasmeses',
                  data:$scope.mesesRegistros,
                  xkey: 'x',
                  ykeys: ['y'],
                  labels: ['Soles']
                }).on('click', function(i, row){
                  console.log(i, row);
                })
                for (var i = 0; i < $scope.yearsRegistros.length; i++) {
                    $scope.yearsRegistros[i].x = $scope.yearsRegistros[i].fecha;
                    $scope.yearsRegistros[i].y = $scope.yearsRegistros[i].total;
                }

                Morris.Bar({
                  element: 'ganaciasaños',
                  data:$scope.yearsRegistros,
                  xkey: 'x',
                  ykeys: ['y'],
                  labels: ['Soles']
                }).on('click', function(i, row){
                  console.log(i, row);
                })

        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
});