app.controller('serviciosController', function($scope,$http, $routeParams,$location) {
    var IdSer=0;
	$scope.Cat =$routeParams.catId;
    $scope.url =$routeParams.idSer;
	IdCat=$scope.Cat;
    Idser=$scope.url;

     $scope.getServicios= function () { 
            $http.get('admin/getServicios').then(function successCallback(response) {
                $scope.ser=response.data;  
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
           
        }
    $scope.$on('ngRepeatFinished', function(ngRepeatFinishedEvent) {

            for(x in $scope.ser){
                $('#'+ $scope.ser[x].id+'k').html($scope.ser[x].descripcion);
                for(y in $scope.ser[x].servicios)
                {
                    $('#'+ $scope.ser[x].servicios[y].id+'j').html($scope.ser[x].servicios[y].descripcion);
                }
            }

    });
   
    $scope.getServiciosD= function () { 
            $http.get('admin/CategoriaServicio/'+ IdCat).then(function successCallback(response) {
                $scope.infoser=response.data[0];  
                $scope.catser=response.data[0].servicios;  
                console.log($scope.habfotos);
            }, function errorCallback(response) {
            // called asynchronously ialertf an error occurs
            // or server returns response with an error status.
            });
           
        }
    $scope.main = function (){
        $http.get('admin/getmainservices').then(function successCallback(response) {
                $scope.main=response.data[0];
                $('#contmain').html($scope.main.contenido);
            }, function errorCallback(response) {
            // called asynchronously ialertf an error occurs
            // or server returns response with an error status.
            });
    }

        $scope.goTo2 = function(data) {
         catId = data.id;
        $location.url('/Servicios/' + catId);
        };

        $scope.geturl = function (data) {
        dataAdmin = data;

        $scope.categoria_id =Idser ;
    }
    $scope.dataEditar = function (data) {

        $scope.id = data.id;
        $scope.servicio = data.servicio;
        $('#descripcionq').html("<div id='"+$scope.id+"e'></div>");
        $('#' + $scope.id+'e').html(data.descripcion);
        $('#'+$scope.id+'e').froalaEditor({
            height: 200
        })

        
    }
    $scope.editar = function () {
        $http.put('admin/servicio/'+$scope.id,
            {   'servicio':$scope.servicio,
                'descripcion': $('.fr-view').html()
            }).then(function successCallback(response) {
                window.location.reload();
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    $scope.eliminar = function (id) {
       
        swal({   title: "¿ Estas seguro ?",
            text: "Se eliminará esta servicio.",
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Sí, estoy seguro!",
            cancelButtonText: "Cancelar",   
            closeOnConfirm: false }, 
            function(){

                swal("Eliminado!", 
                    "El servicio se ha eliminado.", 
                    "success"); 

                $http.delete( 'admin/servicio/'+id ).then(function successCallback(response) {
                    window.location.reload();
                }, function errorCallback(response) {
                    swal("Ha ocurrido un error!", "No se puede borrar datos utilizados para otros registros.", "error");
                });
            }
        );
    }
    $scope.dataEditarCat = function (data) {

        $scope.id = data.id;
        $scope.nombre = data.nombre;
        $('#descripcion').html("<div id='"+$scope.id+"'></div>");
        $('#' + $scope.id).html(data.descripcion);
        $('#'+$scope.id).froalaEditor({
            height: 350
        })

        
    }
    $scope.editarCat = function () {
        $http.put('admin/categoria/'+$scope.id,
            {   'nombre':$scope.nombre,
                'descripcion': $('.fr-view').html()
            }).then(function successCallback(response) {
                window.location.reload();
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    $scope.eliminarCat = function (id) {

        swal({   title: "¿ Estas seguro ?",
            text: "Se eliminará esta categoria.",
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Sí, estoy seguro!",
            cancelButtonText: "Cancelar",   
            closeOnConfirm: false }, 
            function(){

                swal("Eliminado!", 
                    "La categoria se ha eliminado.", 
                    "success"); 

                $http.delete( 'admin/categoria/'+id ).then(function successCallback(response) {
                    window.location.reload();
                }, function errorCallback(response) {
                    swal("Ha ocurrido un error!", "No se puede borrar datos utilizados para otros registros.", "error");
                });
            }
        );
    }

    $scope.dataMain = function () {
        $scope.idMain = $scope.main.id;
        $scope.nombreE = $scope.main.nombre;
        $scope.contenidoE = $scope.main.contenido;
        $('#descripcionM').html("<div id='"+$scope.idMain+"p'></div>");
        $('#' + $scope.idMain+'p').html($scope.contenidoE);
        $('#'+$scope.idMain+'p').froalaEditor({
            height: 350
        })
    }
    
});