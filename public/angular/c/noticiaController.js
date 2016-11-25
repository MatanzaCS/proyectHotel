app.controller('noticiaController', function($scope,$http) {
     $scope.getNoticias = function () {
        $http.get('admin/getNoticias').then(function successCallback(response) {
            $scope.noticia = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    } 
     $scope.$on('ngRepeatFinished', function(ngRepeatFinishedEvent) {
        for (var i = 0; i < $scope.noticia.length; i++) {
                $('#contenido'+i).html($scope.noticia[i].contenido);
            }
    }); 
     $scope.getNoticiash = function () {
        $http.get('admin/getNoticias').then(function successCallback(response) {
            $scope.noticias = response.data[0];
            var ultima =$scope.noticias.contenido;
            $('#contenidohtml').html(ultima);
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    var idNot;
    $scope.dataEditar = function (data) {

        idNot = data.id;
        $scope.idNot=data.id;
        $scope.mltitulo = data.titulo;
        $scope.mlfuente = data.fuente;
        $scope.mlfecha = data.fecha;
    
        $scope.mlestado = data.estado;

        $('#descripcion').html("<div id='"+idNot+"'></div>");
        $('#' + idNot).html(data.contenido);

        $('#'+idNot).froalaEditor({
            height: 350
        })
    }
     $scope.editarNot = function () {

        $http.put('admin/noticia/'+idNot,
            {   'titulo':$scope.mltitulo,
                'contenido':$('.fr-view').html(),
                'fecha':$scope.mlfecha,
                'fuente':$scope.mlfuente,
                'estado':$scope.mlestado,
            }).then(function successCallback(response) {
                $scope.noticia = response.data;
                swal("Excelente!", "Se a editado la noticia", "success")
            }, function errorCallback(response) {
                
            });
    }

     $scope.eliminar = function (id) {
        swal({   title: "¿ Estas seguro ?",
            text: "Se eliminará esta noticia.",
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Sí, estoy seguro!",
            cancelButtonText: "Cancelar",   
            closeOnConfirm: false }, 
            function(){

                swal("Eliminado!", 
                    "La noticia se ha eliminado.", 
                    "success"); 

                $http.delete( 'admin/noticia/'+id ).then(function successCallback(response) {
                    $scope.noticia = response.data;
                }, function errorCallback(response) {
                    swal("Ha ocurrido un error!", "No se puede borrar datos utilizados para otros registros.", "error");
                });
            }
        );
    }       
});