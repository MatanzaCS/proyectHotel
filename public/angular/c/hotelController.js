app.controller('hotelController', function($scope,$http) {

    $scope.enviar = function () {
        $http.post('admin/hotel',
            {   'nombre':$scope.nombre,
                'pais':$scope.pais,
                'region_estado':$scope.region,
                'ciudad':$scope.ciudad,
                'direccion':$scope.direccion,
                'telefono':$scope.telefono,
                'correo':$scope.correo
            }).then(function successCallback(response) {
                $('#alertCambio').css('display','block');
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }

    $scope.getHoteles = function () {
        $http.get('admin/getHoteles').then(function successCallback(response) {
            $scope.hoteles = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
        $http.get('admin/social').then(function successCallback(response) {
            $scope.social = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }

     $scope.getHotelesF = function () {
        $http.get('/getHotelF').then(function successCallback(response) {
            $scope.infos = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
        $http.get('admin/social').then(function successCallback(response) {
            $scope.social = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }

    $scope.$on('ngRepeatFinished', function(ngRepeatFinishedEvent) {

        for( i in $scope.social ){
            if ($scope.social[i].estado == 'true') {
                $('#'+$scope.social[i].id +'c').prop('checked',true);
                $scope.verI($scope.social[i].id);
                $('#'+$scope.social[i].id +'face').val($scope.social[i].link);
            }
        }
    });

    $scope.verI = function (id){
        if( $('#'+id +'c').prop('checked') ) {
            $('#' + id + 'face').css('visibility','visible')
        }
        else
        {
            $('#' + id + 'face').css('visibility','hidden');
            $('#' + id + 'face').val(" ");
        }
            
        
    }

    var dataAdmin;
    $scope.dataCrearAdmin = function (hotel_id) {
        $scope.hotel_id = hotel_id;
    }
    $scope.crearAdminHotel = function () {
        $http.post('admin/crearAdminHotel',
            {   'usuario':$scope.usuario,
                'password':$scope.password,
                'nombres':$scope.nombre,
                'apellidos':$scope.apellido,
                'sexo':$('input[name="sexo"]:checked', '#myForm').val(),
                'fecha_nac':$scope.nacimiento,
                'dni':$scope.dni,
                'direccion':$scope.direccion,
                'celular':$scope.celular,
                'emptipo_id':1,
                'hotel_id':$scope.hotel_id
            }).then(function successCallback(response) {
                $scope.hoteles = response.data;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }

    /**
     * Al hacer click en Editar admin 
     */
    $scope.dataEditarAdmin = function (data, hotel_id) {
        $scope.hotel_id = hotel_id;
        dataAdmin = data;

        $scope.nombre = data.nombres;
        $scope.apellido = data.apellidos;
        $scope.nacimiento = data.fecha_nac;
        $scope.dni = data.dni;
        $scope.direccion = data.direccion;
        $scope.celular = data.celular;

        $scope.idUsuario = data.usuario.id;
    }

    $scope.guardarAdminHotel = function () {
        $http.post('admin/guardarAdminHotel',
            {   'usuario':$scope.usuario,
                'password':$scope.password,
                'nombres':$scope.nombre,
                'apellidos':$scope.apellido,
                'sexo':$('input[name="sexo"]:checked', '#myForm2').val(),
                'fecha_nac':$scope.nacimiento,
                'dni':$scope.dni,
                'direccion':$scope.direccion,
                'celular':$scope.celular,
                'emptipo_id':1,
                'hotel_id':$scope.hotel_id,
                'empleado':dataAdmin.id 
            }).then(function successCallback(response) {
                $scope.hoteles = response.data;
                swal("Excelente!", "Se edito la información del Administrador", "success");
            }, function errorCallback(response) {
            });
    }

    $scope.actualizarAdministrador = function () {
        $http.put('admin/updateAdminHotel/' + dataAdmin.id,
            {
                'nombres':$scope.nombre,
                'apellidos':$scope.apellido,
                'sexo':$('input[name="sexo"]:checked', '#myForm5').val(),
                'fecha_nac':$scope.nacimiento,
                'dni':$scope.dni,
                'direccion':$scope.direccion,
                'celular':$scope.celular,
                'emptipo_id':1,
                'hotel_id':$scope.hotel_id
            }).then(function successCallback(response) {
                $scope.hoteles = response.data;
                swal("Excelente!", "Se ha modificado la información de Administrador.", "success");
            }, function errorCallback(response) {
            });
    }

    var idHotel;
    $scope.dataEditar = function (data) {

        idHotel = data.id;

        $scope.nomHotel = data.nombre;
        $scope.paisHotel = data.pais;
        $scope.regHotel = data.region_estado;
        $scope.ciuHotel = data.ciudad;
        $scope.dirHotel = data.direccion;
        $scope.fonoHotel = data.telefono;
        $scope.correo = data.correo;
    }
    $scope.editarHotel = function () {
        for (var i = 0; i < $scope.social.length; i++) {
                if ($('#'+ $scope.social[i].id +'c').prop('checked')){
                    //alert('entro')
                    ids =  $scope.social[i].id;
                    $scope.social[i].estado='true';
                    $scope.social[i].link=$('#' + ids + 'face').val();
                }
                else
                {
                    $scope.social[i].estado='false';
                }

                $http.put('admin/social/'+$scope.social[i].id,{   
                    'estado':$scope.social[i].estado,
                    'link':$scope.social[i].link
                    }).then(function successCallback(response) {
                    }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.
                });
            }
        for (var i = 0; i < $scope.iconoshotel.length; i++) {
                if ($('#'+ $scope.iconoshotel[i].id +'i').prop('checked')){
                    ids =  $scope.iconoshotel[i].id;
                    $scope.iconoshotel[i].estado='true';
                }
                else
                {
                    $scope.iconoshotel[i].estado='false';
                }

                $http.put('admin/icogeneral/'+$scope.iconoshotel[i].id,
                {   'estado':$scope.iconoshotel[i].estado
                }).then(function successCallback(response) {
                }, function errorCallback(response) {
                    
                });
            }  
        $http.put('admin/hotel/'+idHotel,
            {   'nombre':$scope.nomHotel,
                'pais':$scope.paisHotel,
                'region_estado':$scope.regHotel,
                'ciudad':$scope.ciuHotel,
                'direccion':$scope.dirHotel,
                'telefono':$scope.fonoHotel,
                'correo':$scope.correo
            }).then(function successCallback(response) {
                 
            }, function errorCallback(response) {
                
            });
            swal("Excelente!", "Se edito la información del hotel", "success");
    }

    $scope.eliminar = function (id) {
        $http.delete( 'admin/hotel/'+id ).then(function successCallback(response) {
            $scope.hoteles = response.data;
        }, function errorCallback(response) {
            swal("Ha ocurrido un error!", "No se puede borrar datos utilizados para otros registros.", "error");
        });
    }
    
    $scope.configCheckout = function () {
        $http.post('admin/configHoraHotel',
            {   'checkin':$scope.checkin,
                'checkout':$scope.checkout
            }).then(function successCallback(response) {
                swal("Excelente!", "Se han modificado las horas Check-in Check-out", "success");  
            }, function errorCallback(response) {
            });
    }
    $scope.getHotel = function () {
        $http.get('admin/getHotel').then(function successCallback(response) {
            $scope.checkin = response.data.checkin;
            $scope.checkout = response.data.checkout;

        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }

    $scope.actualizarUsuario = function () {

        $http.put('admin/updateAdmin/'+$scope.idUsuario,
        {
            'usuario':$scope.usuario,
            'usuariotipo_id': 2
        })
        .then(function successCallback(response) {
            swal("Excelente!", "Se ha modificado tu nombre de usuario.", "success");
            $scope.idUsuario = response.data.id;
            $scope.usuario = response.data.usuario;
            $('#editarAdministrador').modal('toggle');
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });

    }
    $scope.actualizarPassword = function () {
        if ($scope.password == $scope.password2) {
            $http.put('admin/updateAdmin/'+$scope.idUsuario,
            {
                'password':$scope.password
            })
            .then(function successCallback(response) {
                swal("Excelente!", "Se ha modificado tu password.", "success");
                $scope.idUsuario = response.data.id;
                $scope.usuario = response.data.usuario;
                $('#editarAdministrador').modal('toggle');
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
        }
        else {
            swal("", "El password no coincide.", "warning");
        }
    }
    $scope.iconografia = function (){
        $http.get('admin/misicnonos').then(function successCallback(response) {
            $scope.iconoshotel = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
});