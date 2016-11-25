app.controller('habtipoController', function($scope,$http,$location) {
	var hotel;
	var datos;
    var gdata;
    var fechas;
    var fechas2;
    $scope.getHabTipo = function () {
        $http.get('admin/AddHab').then(function successCallback(response) {
        	$scope.habtipos=response.data;
            gdata=response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    } 

    $scope.$on('ngRepeatFinished', function(ngRepeatFinishedEvent) {
    for(x in $scope.habtipos){
            $('#'+ $scope.habtipos[x].id).html($scope.habtipos[x].descripcion);
        }
    for(x in $scope.habtipos){
                $('#'+ $scope.habtipos[x].id+'qw').html($scope.habtipos[x].descripcion);
            }

    });

    var details = Array();
    $scope.addDetalleReserva =function (data) {
      details.push(data);
      var total = 0;

      for (var i = 0; i < details.length; i++) {
        total += details[i].precio;
      }
        $scope.detalles = details;
        $scope.total = total;
    } 

    var idHabtipo;

    $scope.dataEditar = function (data) {

        idHabtipo = data.id;

        $scope.mlnombre = data.nombre;

        $('#descripcion').html("<div id='"+idHabtipo+"'></div>");
        $('#' + idHabtipo).html(data.descripcion);

        $scope.mlnropersonas = data.nropersonas;
        $scope.mlprecio = data.precio;

        $('#'+idHabtipo).froalaEditor({
            height: 350
        })

    }

       $scope.editarHabtipo = function () {

        $http.put('admin/habtipo/'+idHabtipo,
            {   'nombre':$scope.mlnombre,
                'descripcion': $('.fr-view').html(),
                'nropersonas':$scope.mlnropersonas,
                'precio':$scope.mlprecio,
            }).then(function successCallback(response) {
                 $scope.habtipos = response.data;
            }, function errorCallback(response) {
            });
    }
    $scope.eliminar = function (id) {
            swal({   title: "¿ Estas seguro ?",
            text: "Se eliminará este tipo de habitación.",
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Sí, estoy seguro!",
            cancelButtonText: "Cancelar",   
            closeOnConfirm: false }, 
            function(){

                swal("Eliminado!", 
                    "El tipo de habitación se ha eliminado.", 
                    "success"); 

                $http.delete( 'admin/habtipo/'+id ).then(function successCallback(response) {
                    $scope.habtipos = response.data;
                }, function errorCallback(response) {
                    swal("Ha ocurrido un error!", "No se puede borrar datos utilizados para otros registros.", "error");
                });
            });
    }

    $scope.goTo2 = function(data) {
         idHabtipo = data.id;
    $location.url('/HabGalery/' + idHabtipo);
    };
    $scope.goTo3 = function(data) {
         idHabtipo = data.id;
    $location.url('/habitaciones/' + idHabtipo);
    };

     $scope.ponerFecha = function () {
        var f = new Date();
        $scope.fechaini = f.getFullYear() + "-" + "0" + (f.getMonth() +1) + "-" +f.getDate();
        $scope.fechafin = f.getFullYear() + "-" + "0" + (f.getMonth() +1) + "-" +(f.getDate() + 1);
        fechas=$scope.fechaini;
        fechasi=$scope.fechafin;
        /*
        var fechaini1 = new Date($scope.fechaini);
        var fechafin1 = new Date($scope.fechafin);

        alert((fechafin1 - fechaini1)/86400000);
        */
    }
    $scope.buscar = function () {
     
        $http.get('cart/buscarHabitaciones/'+$scope.fechaini+'/'+$scope.fechafin).then(function successCallback(response) {
            $scope.tipoPerHabs = response.data;
            fechas = $scope.fechaini;
            fechas2 = $scope.fechafin;
            $scope.mayor
            $scope.menor

        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    $scope.buscarHab = function () {
        if ($('#fechaini').val() == '' || $('#fechafin').val() == '') {
            swal("", "Debes seleccionar una fecha", "warning");
        }
        else{
            $scope.car = null;
            $scope.totalq = null;
            $scope.Total = null;
            var fini = $scope.formatDate($('#fechaini').val());
            var ffin = $scope.formatDate($('#fechafin').val());

            $http.get('cart/buscarHabitaciones/'+fini+'/'+ffin ).then(function successCallback(response) {
                $scope.getDias();
                if ((response.data).hasOwnProperty('mensaje')) {
                    //$('#alertCambio').css('display','block');
                    alert(response.data.mensaje);
                }
                else{
                    $scope.tipoPerHabs = response.data;
                    fechas=$scope.fechaini;
                    fechas2=$scope.fechafin;
                    $scope.mayor;
                    $scope.menor;
                }
            
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
        }


        
        

    }
    $scope.addCarrito = function (data) {
        max = data.habitacionescount-data.habtiporeservascount;
        $http.get('cart/add/'+data.id+'/'+max,
            {
            }).then(function successCallback(response) {
                $scope.res($scope.dias);
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    $scope.res = function (fechas) {
        $scope.car = null;
        $http.get('cart/show',
            {
            }).then(function successCallback(response) {
                $scope.car = response.data;
                $scope.actualizarTotal($scope.car, fechas);
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
        
    }
    $scope.actualizarTotal = function(data, fechas){
        var total=0;
        for (x in data) {
            subp=data[x].precio*data[x].quantity;
            total+=subp;
        }
        $scope.totalN = total.toFixed(2);
        $scope.totalq = 'S/' + total + '.00';
        $scope.Total = ($scope.totalN * fechas).toFixed(2);

    }
    /**
     * Actualiza la cantidad en el carrito
     */
    $scope.actualizar = function(id, idObjeto, data){
        cantidad = $('#'+id).val();
        for (x in data) {
            if (x == idObjeto){
                data[x].quantity = cantidad;
                $http.get('cart/update/'+ idObjeto + '/' + cantidad ).then(
                function successCallback(response) {
                }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.
                });
            }
        }
        $scope.car = data;
    }
    $scope.actualizarCarrito = function () {
        data = $scope.car;
        var v = 0;
        for(y in data){
            if (parseInt(data[y].quantity) > parseInt(data[y].max) || parseInt(data[y].quantity) <= 0)
                v = 1;
        }
        if (v == 1) {
            $('#alerta-dis').css('display','block');
        }
        else
        {
            for (x in data) {
                $http.get('cart/update/'+data[x].id + '/' + data[x].quantity,
                {
                }).then(function successCallback(response) {
                }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.
                });
            }
            window.location.href = '#/micarrito';
            window.scrollTo(0,0);

        }
    }

    $scope.onDateSet = function(){
       console.log($scope.fechaini.timer);
       //outputs '10 Sep' , where i expect to find the date object
    }
    $scope.buscarAuto = function () {

        $http.get('cart/getDias',
            {
            }).then(function successCallback(response) {
                //alert($scope.formatDate(response.data.fecha_inicio));
                $('#fechaini').val($scope.formatDate(response.data.fecha_inicio));
                $('#fechafin').val($scope.formatDate(response.data.fecha_fin));
                if ((response.data).hasOwnProperty('dias')) {
                    $scope.dias = response.data.dias;
                    $scope.buscarHab();
                    $scope.res(response.data);
                }
                else{
                    $scope.dias = null;
                }
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    $scope.getDias = function () {
        $http.get('cart/getDias',
            {
            }).then(function successCallback(response) {
                $scope.dias = response.data.dias;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    $scope.getDias2 = function () {
        $http.get('cart/getDias',
            {
            }).then(function successCallback(response) {
                $scope.dias = response.data.dias;
                $scope.res(response.data);
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }

    $scope.eliminarItem = function (id) {
        $http.get('cart/delete/'+id,
            {
            }).then(function successCallback(response) {
                $scope.res();
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }

    $scope.vaciarCarrito = function () {
        $http.get('cart/trash',
            {
            }).then(function successCallback(response) {
                $scope.res();
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    $scope.formatDate = function (date) {
        date = date.split("-");
        date = date[2] + "-" + date[1] + "-" + date[0];

        return date;
    }
});