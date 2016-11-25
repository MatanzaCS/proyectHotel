app.controller('habitacionController', function($scope,$http) {
    var fechaHoy
    function twoDigits(d) {
        if(0 <= d && d < 10) return "0" + d.toString();
        if(-10 < d && d < 0) return "-0" + (-1*d).toString();
        return d.toString();
    }
    $scope.ponerFecha = function () {
        var f = new Date();
        fechaHoy = f.getFullYear() + "-" + twoDigits(f.getMonth()+1) + "-" + twoDigits(f.getDate());
       
    }
    $scope.enviar = function () {
        $http.post('admin/habitacion',
            {   'numero':$scope.numero,
                'habtipo_id':$('#habtipo_id').val(),
                'estado_id':$('#estado_id').val(),
                //'hotel_id':$('#hotel_id').text()
            }).then(function successCallback(response) {
                swal("Excelente!", "Se ha creado la habitación", "success")
               window.location.href = 'admin#/Habitaciones';
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }

    $scope.getHabtipos = function () {
        $http.get('admin/getHabtipos2').then(function successCallback(response) {
            console.log(response.data);
            $scope.habtipos = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    $scope.getEstados = function () {
        $http.get('admin/getEstados').then(function successCallback(response) {
            $scope.estados = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    $scope.getHabitaciones = function () {
        $http.get('admin/getHabitacions').then(function successCallback(response) {
            console.log(response.data);
            $scope.habitaciones = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    $scope.getHabitacionesDetallado = function () {
        $http.get('admin/getHabitacionsDetallado').then(function successCallback(response) {
            for(o in response.data)
            {   
                if ((response.data[o].registro).length == 0 && response.data[o].estado_id == 2 )
                    response.data[o].outdated = 1;
                else
                    response.data[o].outdated = 0;

                if ((response.data[o].registro).length == undefined) {
                    f = (response.data[o].registro.fechasalida).split(" ");
                    if (f[0] == fechaHoy)
                        response.data[o].registro.hoy = 1;
                    else
                        response.data[o].registro.hoy = 0;
                } 


            }
            $scope.habitaciones = response.data;
            console.log($scope.habitaciones);
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    $scope.dataEditar = function (data) {

        $scope.id = data.id;

        $scope.numero = data.numero;
        $('#habtipo_id').val(data.habtipo_id);
        $('#estado_id').val(data.estado_id);
        
    }
    $scope.editar = function () {
        $http.put('admin/habitacion/'+$scope.id,
            {   'numero':$scope.numero,
                'habtipo_id':$('#habtipo_id').val(),
                'estado_id':$('#estado_id').val()
            }).then(function successCallback(response) {
                $('#alertCambio').css('display','block');
                $scope.habitaciones = response.data;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    $scope.eliminar = function (id) {
        swal({   title: "¿ Estas seguro ?",
            text: "La habitación se eliminará.",
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Sí, estoy seguro!",   
            closeOnConfirm: false,
            cancelButtonText:"Cancelar",    
            }, 

            function(){

                swal("Eliminado!", 
                    "La habitación se ha eliminado.", 
                    "success"); 
                $http.delete( 'admin/habitacion/'+id ).then(function successCallback(response) {
                    $scope.habitaciones = response.data;
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
    $scope.getRegistroHab = function (id) {
        $http.get('admin/getRegistroHab/' + id).then(function successCallback(response) {
            window.location.href = 'admin#/terminarRegistro/' + response.data[0].id;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
     $scope.printDiv = function(divName) {
    /*
        var printContents = document.getElementById(divName).innerHTML;
        var popupWin = window.open('', '_blank', 'width=300,height=300');
        popupWin.document.open();
        popupWin.document.write('<html><head><link rel="stylesheet" type="text/css" href="style.css" /></head><body onload="window.print()">' + printContents + '</body></html>');
        popupWin.document.close();
    */
        elem = document.getElementById(divName);
        var domClone = elem.cloneNode(true);
    
        var $printSection = document.getElementById("printSection");
        
        if (!$printSection) {
            var $printSection = document.createElement("div");
            $printSection.id = "printSection";
            document.body.appendChild($printSection);
        }
        
        $printSection.innerHTML = "";
        
        $printSection.appendChild(domClone);

        window.print();
    }
});