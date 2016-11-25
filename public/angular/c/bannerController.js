app.controller('bannerController', function($scope,$http) {
     $scope.getBanners2 = function () {
        $http.get('admin/getBanners').then(function successCallback(response) {
            $scope.banners = response.data;
            if (screen.width<758) 
            {
                $('#bookingR').css('display','none');
                $('#book').css('display','block');
            }
                
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    $scope.getBanners3 = function () {
        $http.get('admin/getBanners2').then(function successCallback(response) {
            $scope.banners2 = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }

   var idBanner;

   $scope.idslider = 0;

    $scope.dataEditar = function (data) {

        idBanner = data.id;
        $scope.idslider=data.id;
        $scope.mltitulo = data.titulo;
        $scope.mlcontenido = data.contenido;
        $scope.mlestado = data.estado;
        $scope.mlorden = data.orden;
    }
     $scope.editarBanner = function () {

        $http.put('admin/banner/'+idBanner,
            {   'titulo':$scope.mltitulo,
                'contenido':$scope.mlcontenido,
                'estado':$scope.mlestado,
                'orden':$scope.mlorden,
            }).then(function successCallback(response) {
                $('#alertCambio').css('display','block');
                $scope.banners2 = response.data;
            }, function errorCallback(response) {
                
            });
    }

     $scope.eliminar = function (id) {
        swal({   title: "¿ Estas seguro ?",
            text: "Se eliminara este banner",
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Sí, estoy seguro!",   
            closeOnConfirm: false,
            cancelButtonText:"Cancelar",
        }, 
            function(){

                swal("Eliminado!", 
                    "El banco se ha eliminado.", 
                    "success"); 

                $http.delete( 'admin/banner/'+id ).then(function successCallback(response) {
                    $scope.banners2 = response.data;
                }, function errorCallback(response) {
                    swal({   
                            title: "Ha ocurrido un error!",   
                            text: "No se puede borrar datos utilizados para otros registros.",   
                            timer: 3000,   
                            showConfirmButton: false 
                        });
                });

            });
    }

});