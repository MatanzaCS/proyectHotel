app.controller('usuarioController', function($scope,$http) {

    $scope.enviar = function () {
        $http.post('admin/usuario',
            {   'empleado_id':$('#empleado_id').val(),
                'usuario':$scope.usuario,
                'password':$scope.password,
                'usuariotipo_id':$('#usuariotipo_id').val()
            }).then(function successCallback(response) {
                swal("Excelente!", "Usuario Creado exitosamente.", "success");
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }

    $scope.getEmpleados = function () {
        $http.get('admin/getEmpForUsers')
        .then(function successCallback(response) {

            $scope.empleados = response.data;

        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }

    $scope.getUsuarioTipos = function () {
        $http.get('admin/getUsuarioTipos')
        .then(function successCallback(response) {

            $scope.usuarioTipos = response.data;

        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }

    $scope.getUsuarios = function () {
        $http.get('admin/usuario')
        .then(function successCallback(response) {

            $scope.usuarios = response.data;

        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }

    $scope.getUsuarioActual = function () {
        $http.get('admin/getUsuario')
        .then(function successCallback(response) {
            $scope.idUsuario = response.data.id;
            $scope.usuario = response.data.usuario;

        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    $scope.actualizarUsuario = function (id) {
        $http.put('admin/usuario/'+id,
        {
            'usuario':$scope.usuarioEditar,
            'usuariotipo_id':$('#usuariotipo_id').val()
        })
        .then(function successCallback(response) {
            swal("Excelente!", "Se ha modificado información del Usuario.", "success");
            $scope.empleados = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    $scope.actualizarPassword = function (id) {
        if ($scope.passwordE == $scope.password2E) {
            $http.put('admin/usuario/'+id,
            {
                'password':$scope.passwordE
            })
            .then(function successCallback(response) {
                swal("Excelente!", "Se ha modificado tu Password.", "success");
                $scope.empleados = response.data;

            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
        }
        else {
            swal("Error!", "El Password no coincide", "error");
        }
        
    }
    $scope.activarDesactivar = function (id) {
        swal({   
            title: "¿ Estas seguro ?",
            text: "Este usuario sera cambiado.",
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Sí, estoy seguro!",   
            closeOnConfirm: false, 
            cancelButtonText:"Cancelar",
        }, 
            function(){
                swal("Excelente!", 
                    "Se ha cambiado el usuario.", 
                    "success"); 

                $http.get('admin/activarDesactivar/' + id)
                .then(function successCallback(response) {
                    $scope.empleados = response.data;
                }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.
                });

            });
    }
    
});