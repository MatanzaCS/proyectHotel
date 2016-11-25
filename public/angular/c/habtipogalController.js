var IdHab=0;
app.controller('habtipogalController', function($scope,$http, $routeParams) {
    var IdHab=0;
	$scope.habId =$routeParams.habtipoId;
	IdHab=$scope.habId;
     $scope.getHabTipoGal= function () { 
            $http.get('admin/habtipoF/'+ IdHab).then(function successCallback(response) {
            	$scope.habfotos=response.data;  
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
           
        }
    var iconos;
    $scope.gethabitacionG= function () { 
            $http.get('admin/gethabitaciones/'+IdHab).then(function successCallback(response) {
                $scope.habfotos = response.data;
                $scope.galeria = response.data[0].habtipofotos;
                $scope.contenido = response.data[0].descripcion;
                iconos=response.data[0].habtipo_serviciointernos;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
           
        }
    $scope.$on('ngRepeatFinished', function(ngRepeatFinishedEvent) {
        $('#descrip').html($scope.contenido)
    });

    $scope.GuardarIcon= function () { 
            for (var i = 0; i < iconos.length; i++) {
                if ($('#'+iconos[i].id).prop('checked')){
                    //alert('entro')
                    iconos[i].estado='true';
                }
                else
                    iconos[i].estado='false';
                $http.put('admin/icono/'+iconos[i].id,{   
                    'serviciointerno_id':iconos[i].serviciointerno_id,
                    'habtipo_id':iconos[i].habtipo_id,
                    'estado':iconos[i].estado
                    }).then(function successCallback(response) {
                    }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.
                });
            } 
            swal("Excelente!", "Se guardaron los cambios!", "success");   
        }
    $scope.eliminar = function (id) {

        swal({   title: "¿ Estas seguro ?",
            text: "Se eliminara la imagen de la galeria",
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Sí, estoy seguro!",   
            closeOnConfirm: false,
            cancelButtonText:"Cancelar",
        }, 
            function(){

                swal("Eliminado!", 
                    "Imagen eliminada.", 
                    "success"); 

                 $http.delete( 'admin/habtipoF/'+id ).then(function successCallback(response) {
                    window.location.reload()
                }, function errorCallback(response) {
                    swal("Ha ocurrido un error!", "No se puede borrar datos utilizados para otros registros.", "error");
                });

            });
    }
    $scope.$on('ngRepeatFinished', function(ngRepeatFinishedEvent) {
         var galleryTop = new Swiper('.gallery-top', {
          nextButton: '.swiper-button-next',
          prevButton: '.swiper-button-prev',
          spaceBetween: 10,
          effect: 'fade',
      });
      var galleryThumbs = new Swiper('.gallery-thumbs', {
          spaceBetween: 10,
          centeredSlides: true,
          slidesPerView: 'auto',
          touchRatio: 0.2,
          slideToClickedSlide: true
      });
      galleryTop.params.control = galleryThumbs;
      galleryThumbs.params.control = galleryTop;  
      $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
      });
   
    });


    $scope.buscarHab = function () {
        if ($('#fechaini').val() == '' || $('#fechaini').val() == '') {
            swal("", "Debes seleccionar 2 fechas.", "warning");
        }
        else
        {   var fini = $scope.formatDate($('#fechaini').val());
            var ffin = $scope.formatDate($('#fechafin').val());
        
            $http.get('cart/buscarHabitaciones/'+fini+'/'+ffin ).then(function successCallback(response) {
                    for(x in response.data){
                        if(response.data[x].id == $scope.habfotos[0].id)
                            $scope.busqueda = response.data[x];
                    }
                    $scope.getDias();
                    $('#buscar').css({'display':'none'});
                    $('#reservar').css({'display':'block'});
                }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.
                });
        
                $('.hab').css({'display':'none'});
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
                $scope.res($scope.dias);
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