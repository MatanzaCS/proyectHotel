app.controller('registroController', function($scope,$http , $routeParams) {
    
    function twoDigits(d) {
        if(0 <= d && d < 10) return "0" + d.toString();
        if(-10 < d && d < 0) return "-0" + (-1*d).toString();
        return d.toString();
    }
    $scope.ponerFecha = function () {
        var f = new Date();
        $scope.fechaini = f.getFullYear() + "-" + twoDigits(f.getMonth()+1) + "-" + twoDigits(f.getDate());
        f = f.getTime();
        f = f + 1*24*60*60*1000;
        f = new Date(f);
        $scope.fechafin = f.getFullYear() + "-" + twoDigits(f.getMonth()+1) + "-" + twoDigits(f.getDate());
        $scope.tomorrow = f.getFullYear() + "-" + twoDigits(f.getMonth()+1) + "-" + twoDigits(f.getDate());
        
    }
    $scope.ponerFecha2 = function () {
        var f = new Date();
        $scope.desde = f.getFullYear() + "-" + twoDigits(f.getMonth()+1) + "-" + twoDigits(f.getDate());
        $scope.hoy = f.getFullYear() + "-" + twoDigits(f.getMonth()+1) + "-" + twoDigits(f.getDate());
        f = f.getTime();
        f = f + 1*24*60*60*1000;
        f = new Date(f);
        $scope.hasta = f.getFullYear() + "-" + twoDigits(f.getMonth()+1) + "-" + twoDigits(f.getDate());
    
        /*
        var fechaini1 = new Date($scope.fechaini);
        var fechafin1 = new Date($scope.fechafin);

        alert((fechafin1 - fechaini1)/86400000);
        */
    }
    /*
	$scope.buscar = function () {
        $http.get('admin/buscar/'+$scope.fechaini+'/'+$scope.fechafin).then(function successCallback(response) {
            if ((response.data).hasOwnProperty('mensaje')) {
                alert("No se encontraron habitaciones disponibles");
                $scope.tipoPerHabs = null;
            }
            else
                $scope.tipoPerHabs = response.data;
            //ordenarPorTipo(response.data);
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }*/
    $scope.buscar = function () {
        $http.get('admin/registrosBusqueda/'+$scope.fechaini+'/'+$scope.fechafin).then(function successCallback(response) {
            if ((response.data).hasOwnProperty('mensaje')) {
                swal("", "No se encontraron habitaciones disponibles.", "error");
                $scope.tipoPerHabs = null;
            }
            else{
                $scope.tipoPerHabs = response.data;
            }
            //ordenarPorTipo(response.data);
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }

    $scope.getHabtipos = function () {
        $http.get('admin/AddHab').then(function successCallback(response) {
            $scope.habtipos = response.data;
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }

    var habsSeleccionadas = new Array();
    $scope.clickOnCheck = function (habitacion) {
        
        if ($('#'+habitacion.numero).prop('checked'))
            habsSeleccionadas.push(habitacion);
        else
            habsSeleccionadas.splice(habsSeleccionadas.indexOf(habitacion),1);

        if (habsSeleccionadas.length > 0)
            $("#guardarChecks").css("display","block");
        else
            $("#guardarChecks").css("display","none");

        $scope.countChecked();
        $scope.checkSoloDisponibles();
    }

    $scope.countChecked = function () {
        count = $scope.tipoPerHabs;
        for(j in count) {
            c = 0
            for(i in habsSeleccionadas) {
                if (habsSeleccionadas[i].habtipo_id == count[j].id) {
                    c++;
                }
            }
            count[j].checkedCount = c;
        }
        $scope.countHabschecked = count;
    }
    $scope.checkSoloDisponibles = function () {

        for( i in $scope.countHabschecked){
            if ($scope.countHabschecked[i].checkedCount == $scope.countHabschecked[i].disponibles) {
                $('.th'+$scope.countHabschecked[i].id).prop("disabled",true);
            } 
        }

    }

    $scope.guardarRegistros = function () {
        for (var i = 0; i < habsSeleccionadas.length; i++) {
            $http.post('admin/registro',
            {   'fechaini':$scope.fechaini,
                'fechafin':$scope.fechafin,
                'habitacion_id':habsSeleccionadas[i].id
            }).then(function successCallback(response) {
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            }); 
        }
        swal("Excelente!", "Se han asignado las habitaciones.", "success");
        window.location.href = 'admin#/DetalleHabitaciones';
    }
    $scope.getReservaInfo = function () {
        $scope.idReserva = $routeParams.idReserva;

        $http.get('admin/getReserva/' + $scope.idReserva).then(function successCallback(response) {
            $scope.Reservas = response.data[0];
            var fi = $scope.Reservas.fecha_inicio;
            fi = fi.split(" ");
            $scope.fechaini = fi[0];
            var ff = $scope.Reservas.fecha_fin;
            ff = ff.split(" ");
            $scope.fechafin = ff[0];
    
            $scope.buscar();
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });   
        
    }
    $scope.buscarRegistro = function () {
        $scope.idRegistro = $routeParams.idRegistro;

        $http.get('admin/buscarRegistro/' + $scope.idRegistro).then(function successCallback(response) {
            
            $scope.registro = response.data[0];
            $scope.f = $scope.registro.fechaentrada.split(" ");
            $scope.registro.fe = $scope.f[0];
            $scope.registro.he = $scope.f[1];

            $scope.f2 = $scope.registro.fechasalida.split(" ");
            $scope.registro.fe2 = $scope.f2[0];
            $scope.registro.he2 = $scope.f2[1];

            $scope.regClientes =  $scope.registro.regclientes

            $scope.cantHuesped = ($scope.regClientes).length;
            $scope.btnAdd();
            
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    $scope.inputRegion = function () {
        if ($scope.pais == 'Perú') {
            $('#region').css('display','block');
            $('#regText').css('display','none');  
        } else {
            $('#region').css('display','none');
            $('#regText').css('display','block');
        }
    }

    $scope.finalizar = function (id) {
        $http.get('admin/finalizarRegistro/' + id).then(function successCallback(response) {
            
            swal("Excelente!", "Se ha finalizado la estadía.", "success");
            window.location.href = 'admin#/DetalleHabitaciones';
            
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    $scope.buscarHuesped = function () {
        $http.get('admin/buscarHuesped/' + $scope.dni).then(function successCallback(response) {
            
            if ((response.data).length > 0){
                $scope.huesped = 'true';

                $scope.idHuesped = response.data[0].id; 
                $scope.nombres = response.data[0].nombres;
                $scope.apellidos = response.data[0].apellidos;
                $scope.sexo = response.data[0].sexo;
                $scope.estadoCivil = response.data[0].estado_civil;
                $scope.fechanac = response.data[0].fecha_nac;
                $scope.pais = response.data[0].pais;
                
                $scope.ciudad = response.data[0].ciudad;

                $scope.celular = response.data[0].celular;
                $scope.email = response.data[0].email;
                $scope.prof_ocup = response.data[0].prof_ocup;
            }
            else{
                $('#nom').focus();
                $scope.huesped = 'false';
                $scope.nombres = "";
                $scope.apellidos = "";
                $scope.fechanac = "";
                $scope.pais = "";
                $scope.ciudad = "";
                $scope.celular = "";
                $scope.prof_ocup = "";
                $scope.procedencia = "";
                $scope.estadoCivil = "";
                $scope.destino = "";
                $scope.email = "";

            }
            if ($scope.pais == 'Perú') {
                $('#region').css('display','block');
                $('#regText').css('display','none');
                $('#ciudad').val($scope.ciudad);
            }
            else{
                $('#region').css('display','none');
                $('#regText').css('display','block');
                $('#ciudadText').val($scope.ciudad);
            }
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
        
            
    }
    
    $scope.nuevoHuesped = function () {
        if ($scope.pais == 'Perú')
            ciudad = $('#ciudad').val();
        else
            ciudad = $('#ciudadText').val();
        $http.post('admin/cliente',
            {   'nombres':$scope.nombres,
                'apellidos':$scope.apellidos,
                'sexo':$scope.apellidos,
                'fecha_nac':$scope.fechanac,
                'dni':$scope.dni,
                'pais':$scope.pais,
                'ciudad':ciudad,
                'procedencia':$scope.procedencia,
                'estado_civil':$scope.estadoCivil,
                'destino':$scope.destino,
                'prof_ocup':$scope.prof_ocup,
                'celular':$scope.celular,
                'email':$scope.email,
                'registro_id':$scope.registro.id,
                
            }).then(function successCallback(response) {
                
                $scope.regClientes = response.data;
                
                c = $scope.cantHuesped;
                $scope.cantHuesped = c + 1;
                $scope.btnAdd();

                $scope.dni = "";
                $scope.nombres = "";
                $scope.apellidos = "";
                $scope.fechanac = "";
                $scope.pais = "";
                $scope.ciudad = "";
                $scope.celular = "";
                $scope.prof_ocup = "";
                $scope.procedencia = "";
                $scope.estadoCivil = "";
                $scope.destino = "";
                $scope.email = "";
                document.getElementById("caja").style.width = "0px"; 
                document.getElementById("caja").style.transition = "all 1s"; 

            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            }); 
    }
    $scope.btnAdd = function () {
        if ($scope.cantHuesped < $scope.registro.habitacion.habtipo.nropersonas) 
            $('#btnAdd').prop("disabled", false);
        else
            $('#btnAdd').prop("disabled", true);
    }
    
    $scope.editarHuesped = function () {
        if ($scope.pais == 'Perú')
            ciudad = $('#ciudad').val();
        else
            ciudad = $('#ciudadText').val();

        $http.put('admin/cliente/' + $scope.idHuesped,
            {   'nombres':$scope.nombres,
                'apellidos':$scope.apellidos,
                'sexo':$('#sexo').val(),
                'fecha_nac':$scope.fechanac,
                'dni':$scope.dni,
                'pais':$scope.pais,
                'ciudad':ciudad,
                'procedencia':$scope.procedencia,
                'estado_civil':$scope.estadoCivil,
                'destino':$scope.destino,
                'prof_ocup':$scope.prof_ocup,
                'celular':$scope.celular,
                'registro_id':$scope.registro.id,
                
            }).then(function successCallback(response) {
                
                $scope.regClientes = response.data;
                c = $scope.cantHuesped;
                $scope.cantHuesped = c + 1;
                $scope.btnAdd();

                $scope.dni = "";
                $scope.nombres = "";
                $scope.apellidos = "";
                $scope.fechanac = "";
                $scope.pais = "";
                $scope.ciudad = "";
                $scope.celular = "";
                $scope.prof_ocup = "";
                $scope.procedencia = "";
                $scope.destino = "";
                document.getElementById("caja").style.width = "0px"; 
                document.getElementById("caja").style.transition = "all 1s"; 
                cnt = $('#cantidadp').html();
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });   
    }
    $scope.eliminarHuesped = function (id) {
        
        $http.delete( 'admin/regClienteEliminar/'+id ).then(function successCallback(response) {
            $scope.regClientes = response.data;
            c = $scope.cantHuesped;
            $scope.cantHuesped = c - 1;
            $scope.btnAdd();

        }, function errorCallback(response) {
            swal("Ha ocurrido un error!", "No se puede borrar datos utilizados para otros registros.", "error");
        });
    }

    $scope.getRegistros = function () {
        $http.get('admin/getRegistros/'+$scope.fechaini+'/'+$scope.fechafin).then(function successCallback(response) {

            data = response.data;
            for(i in data){
                if (data[i].cliente.fecha_nac != null)
                    data[i].cliente.edad = $scope.dateDiff(data[i].cliente.fecha_nac);
                else
                    data[i].cliente.edad = null;

                $scope.fe = data[i].registro.fechaentrada.split(" ");
                data[i].registro.solofe = $scope.fe[0];
                data[i].registro.solohe = $scope.fe[1];

                $scope.fs = data[i].registro.fechasalida.split(" ");
                data[i].registro.solofs = $scope.fs[0];
                data[i].registro.solohs = $scope.fs[1];
            }
            $scope.registros = data;
            //ordenarPorTipo(response.data);
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }

    $scope.dateDiff = function (fecha) {
        fecha = fecha.split("=");

        var todayDate = new Date(),
            todayYear = todayDate.getFullYear(),
            todayMonth = todayDate.getMonth(),
            todayDay = todayDate.getDate(),
            age = todayYear - parseInt(fecha[0]);

        if (todayMonth < parseInt(fecha[1]) - 1) {
            age--;
        }

        if (parseInt(fecha[1] - 1 === todayMonth && todayDay < parseInt(fecha[2]))) {
            age--;
        }

        return $scope.age = age;
    }


    $scope.getDisponibilidad = function () {
        $http.get('admin/grillaDisponibilidad/'+$scope.desde+'/'+$scope.hasta).then(function successCallback(response) {
            $('#grid').css('display','block');

            $scope.grid = response.data;
            for( i in $scope.grid) {
                var f = new Date(i);
                f = f.getTime();
                var fa = new Date($scope.hoy);
                fa = fa.getTime();

                for( j in $scope.grid[i]) {
                    if (f < fa)
                        $scope.grid[i][j].outdated = 1;
                    else
                        $scope.grid[i][j].outdated = 0;
                }
            }
            $scope.tipohabs = response.data[$scope.desde];
            //for(x in response.data)
                //$scope.tipohabs = response.data[x];
            //ordenarPorTipo(response.data);
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }

    $scope.$on('ngRepeatFinished', function(ngRepeatFinishedEvent) {
        for(i in $scope.tipoPerHabs){
            if ($scope.tipoPerHabs[i].disponibles == 0) {
                $('.th'+$scope.tipoPerHabs[i].id).prop("disabled",true);
            } 
        }
    });

    $scope.printDiv = function(divName) {
    
    var printContents = document.getElementById(divName).innerHTML;
        var popupWin = window.open('', '_blank', 'width=300,height=300');
        popupWin.document.open();
        popupWin.document.write('<html><head><link rel="stylesheet" type="text/css" href="style.css" /></head><body onload="window.print()">' + printContents + '</body></html>');
        popupWin.document.close();
/*
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

        window.print();*/
    }

    $scope.printDiv2 = function(divName) {
    
        var printContents = document.getElementById(divName).innerHTML;
        var popupWin = window.open('', '_blank', 'width=1024,height=768');
        popupWin.document.open();
        popupWin.document.write('<html><head><link rel="stylesheet" type="text/css" href="style.css" /></head><body onload="window.print()">' + printContents + '</body></html>');
        popupWin.document.close();
/*
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

        window.print();*/
    }
});