<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administrador</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('panel/bootstrap/css/bootstrap.min.css')}}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('panel/font-awesome/css/font-awesome.min.css')}}" />
    <!-- NProgress -->
     <link rel="stylesheet" href="{{asset('panel/nprogress/nprogress.css')}}" />
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('panel/iCheck/skins/flat/green.css')}}" />
    <!-- bootstrap-progressbar -->
    <link rel="stylesheet" href="{{asset('panel/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('panel/jqvmap/dist/jqvmap.min.css')}}" />
    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="{{asset('panel/build/css/custom.min.css')}}" />

    <link rel="stylesheet" href="{{asset('panel/build/css/estilo.css')}}" />

    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/highcharts.js"></script>
<script src="../js/exporting.js"></script>
</head>
<body class="nav-md" ng-app="App">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ url('admin') }}" class="site_title"><i class="fa fa-cubes"></i> <span>Sistema </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="{{asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>{{Auth::user()->username}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-calendar"></i> Reservas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('admin/reservas/show')}}">Lista de Reservas</a></li>
                      <li><a href="{{url('admin/reservas/create')}}">Crear Reserva</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bed"></i> Habitaciones <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/habitaciones/create') }}">Agregar habitaciones</a></li>
                      <li><a href="{{ url('admin/habitaciones') }}">Listado de habitaciones</a></li>
                      <li><a href="{{ url('admin/tipohab') }}">Tipos de habitaciones</a></li>
                       <li><a href="{{ url('admin/caracteristicas') }}">Caracteristicas Tipo Habitaicon</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> registros <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                   
                     <li><a><i class="fa fa-user"></i> Consumos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/consumos') }}">Lista Consumos</a></li>
                      </ul>
                      </li>

                    <li><a><i class="fa fa-user"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/cliente/create') }}">Agregar Cliente</a></li>
                      <li><a href="{{ url('admin/cliente') }}">Lista Clientes</a></li>
                      <li><a href="{{ url('admin/procedencia') }}">Procedencias</a></li></ul>
                      </li>

                      <li><a><i class="fa fa-user"></i> Productos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                   
                     <li><a href="{{ url('admin/productos/create') }}">crear producto</a></li>
                      <li><a href="{{ url('admin/productos') }}">lista producto</a></li>
                      <li><a href="{{ url('admin/catpro') }}">lista categoria</a></li></ul>
                      </li>
                    <li><a><i class="fa fa-user"></i> Datos Personas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/personas') }}">Personas</a></li>
                    </ul>
                  </li>

                    </ul>
                  </li>

                  <li><a><i class="fa fa-tags"></i> Servicios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/Servicios/create') }}">Agregar Servicio</a></li>
                      <li><a href="{{ url ('admin/Servicios')}}">Lista de Servicios</a></li>
                      <li><a href="{{ url('admin/tiposer') }}">Tipos de servicio</a></li>
                    </ul>
                  </li>
                  <li><a href=""><i class="fa fa-pie-chart"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!--<li><a href="{{ url('admin/MenuReportes') }}">Menu</a></li>-->
                      <li><a href="{{ url('admin/ReporteHabitacion') }}">Reporte Habitaciones</a></li>
                      <li><a href="{{ url('admin/ReporteServicios') }}">Reporte Servicios</a></li>
                      <li><a href="{{ url('admin/ReporteUsuarios') }}">Reporte Usuarios</a></li>
                      <li><a href="{{ url('admin/ReporteReservas') }}">Reporte Reservas</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i>Usuarios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/usuarios/create') }}">Crear usuario</a></li>
                      <li><a href="{{ url('admin/usuarios') }}">Usuarios</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('images/img.jpg')}}" alt="">{{Auth::user()->Nombres}}, {{Auth::user()->Apellidos}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <!--<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>-->
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->

        <div class="right_col" role="main" style="min-height: 750px">
          @yield('content')
        </div>
      </div>
    </div>

     <!-- jQuery -->
    <script src="{{asset('panel/jquery/dist/jquery.min.js')}}"></script>
    <!-- angular -->
    <script src="{{asset('angular/angular.min.js')}}"></script>
    <script src="{{asset('angular/angular-route.min.js')}}"></script>
    <script src="{{asset('angular/main.js')}}"></script>


    <!-- Controlladores Angular -->
    <script src="{{asset('angular/controllers/tipocuentaController.js')}}"></script>



    <!-- Bootstrap -->
    <script src="{{asset('panel/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('panel/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('panel/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('panel/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('panel/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('panel/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('panel/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('panel/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('panel/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('panel/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('panel/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('panel/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('panel/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('panel/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('panel/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('panel/DateJS/build/date.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('panel/moment/moment.min.js')}}"></script>
    <script src="{{asset('panel/datepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('panel/build/js/custom.min.js')}}"></script>

    <!-- Flot -->
    <script>
      $(document).ready(function() {
        var data1 = [
          [gd(2012, 1, 1), 17],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 6), 85],
          [gd(2012, 1, 7), 7]
        ];

        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
          data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
          colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
          xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });

        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
    <!-- /Flot -->
    <!-- /JQVMap -->

    <!-- Skycons -->
    <script>
      $(document).ready(function() {
        var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;

        for (i = list.length; i--;)
          icons.set(list[i], list[i]);

        icons.play();
      });
    </script>
    <!-- /Skycons -->
    <!-- /Doughnut Chart -->

    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {

        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>
  </body>
</html>
