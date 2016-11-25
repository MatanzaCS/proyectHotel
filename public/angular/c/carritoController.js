app.controller('carritoController', function($scope,$http) {

    $scope.enviarhab = function () {
        $http.post('service/carrito',
            {   'nombre':$scope.nombre,
                'capacidad':$scope.capacidad,
                'precio':$scope.precio
            }).then(function successCallback(response) {
                $scope.mensaje = response.data.mensaje;
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
    $scope.cambioFormaPago = function () {
        if ($scope.formaPago.name != 'pagoCero'){
            $('#divPorcenBan').css('display','block');
            if ($scope.formaPago.name == 'pagoDeposito')
                $('#divBanco').css('display','block');
            else
                $('#divBanco').css('display','none');
        }
        else
            $('#divPorcenBan').css('display','none');
    }
    $scope.actualizarTotal = function(data, fechas){
        var total=0;
        for (x in data) {
            subp=data[x].precio*data[x].quantity;
            total+=subp;
        }
        $scope.totalN = total.toFixed(2);
        $scope.totalq = 'S/ ' + total + '.00';
        $scope.Total = ($scope.totalN * fechas.dias).toFixed(2);

    }
    $scope.guardarCliente = function () {
        elemento = document.getElementById("test5");
        opciones = document.getElementsByName("opciones");
        porcen = document.getElementsByName("group1");
        var seleccionado = false;
        var cobro = false;

        for(var i=0; i<porcen.length; i++) {    
          if(porcen[i].checked) {
            cobro = true;
            break;
          }
        }
        for(var i=0; i<opciones.length; i++) {    
          if(opciones[i].checked) {
            seleccionado = true;
            break;
          }
        }
        if( !elemento.checked ) {
            swal("Faltan datos", "Tienes que aceptar los terminos de condiciones", "warning");
        }
        else{
            if(!seleccionado) {
                swal("Faltan datos", "Debes seleccionar un método de pago", "warning");
            }
            else
            {
               if (!cobro && !(test1.checked) ) {
                    swal("Faltan datos", "Debes seleccionar un porcentaje de pago", "warning");   
                }
                else{
                    if ( test3.checked && $('#banco').val() == null) {
                        swal("Faltan datos", "Debes seleccionar un banco.", "warning");
                    }
                    else {
                        $('#modalBlanco').css( "display", "block" );
                        
                        $http.post('cart/cliente',
                        {   'nombres':$scope.nombres,
                            'apellidos':$scope.apellidos,
                            'dni':$scope.dni,
                            'porcentaje':$scope.porcentajeRadio.name,
                            'email':$scope.email,
                            'banco_id':$('#banco').val()
                        }).then(function successCallback(response) {
                             $scope.pagar();
                        }, function errorCallback(response) { 
                        });
                    }
                } 
            }    
        }  
    }
    
    $scope.pagar = function () {
        if(test1.checked == true){
            $scope.PagoCero();
        }
        if(test2.checked == true){
            $scope.PagoPaypal();
        }
        if(test3.checked == true){
            $scope.PagoDeposito();
        }
    }
    $scope.PagoCero = function (){
        $http.get('operacionPagoCero').then(function successCallback(response) {
            window.location.href = '#/operacionPagoCero';
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }
    $scope.PagoPaypal = function (){
        window.location.href = 'payment';
    }
    $scope.PagoDeposito = function (){
        $http.get('operacionPagoDeposito').then(function successCallback(response) {
            window.location.href = '#/operacionPagoDeposito';
        }, function errorCallback(response) {
        // called asynchronously if an error occurs
        // or server returns response with an error status.
        });
    }

    $scope.getTipoCambio = function () {
        $http.get('admin/getTipoCambio').then(function successCallback(response) {
                $scope.tipoCambio = response.data.tipocambio;
            }, function errorCallback(response) {
            });
    }

    $scope.$on('ngRepeatFinished', function(ngRepeatFinishedEvent) {

       
        $('#banco').material_select();

    });
    var Fechas;
    $scope.getDias = function () {
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
    $scope.getTiposPago = function () {
        $http.get('admin/getTiposPago').then(function successCallback(response) {
                $scope.pagoCero = response.data[0].activo;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }
    $scope.activarBtn = function () {
        if ($scope.terminos)
            $('#btn-res').prop("disabled",false);
        else
            $('#btn-res').prop("disabled",true);
    }

    $scope.calcularTotal = function () {
        totalR = $scope.Total * $scope.porcentajeRadio.name;
        totalRDolares = totalR / $scope.tipoCambio;
        $('#TotalR').text('Total: S/' + totalR.toFixed(2) + ' ó $' + totalRDolares.toFixed(2)) ;
    }

    $scope.porcentajeRadio = {
        name:0
    }
    $scope.formaPago = {
        name:'pagoCero'
    }

    $scope.getBancos = function () {
        $http.get('admin/banco').then(function successCallback(response) {
                $scope.bancos = response.data;
            }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            });
    }

   
});