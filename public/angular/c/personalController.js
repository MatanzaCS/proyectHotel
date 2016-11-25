app.controller('personalController', function($scope,$http) {

	$scope.getHoteles = function() {

		$http.get('admin/getHotelesSimple').then(function successCallback(response) {
            $scope.hoteles = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
	}

	$scope.buscar = function() {
		
		$http.post('admin/buscarPersonal', {
			modelo : $('#modelo').val(),
			hotel : $('#hotel').val()
		}).then(function successCallback(response) {
            $scope.personal = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
	}
	$scope.cabeceraTabla = function() {
		$scope.tModelo = $('#modelo').val();
		$scope.tHotel = $('#hotel').val();
	}
});