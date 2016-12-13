<!DOCTYPE HTML>
<!--
    Arcana by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Hostal Keymar Spa</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/index.css')}}" />
        <script src="assets/js/jquery.min.js"></script>
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    </head>
    
    <body>
       
        <div id="page-wrapper">

            <!-- Header -->
                <div id="header">

                    <!-- Logo -->
                        <h1><a href="index.html" id="logo">Hostal Keymar Spa</a></h1>

                    <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li id="inicio"><a href="{{ url('/') }}"><i class="fa fa-home"></i>Inicio</a></li>
                                <li id="nos"><a href="{{ url('/nosotros') }}">Nosotros</a></li>
                                <li id="hab"><a href="{{ url('/habitaciones') }}">Habitaciones</a></li>
                                <li id="ser"><a href="{{ url('/servicios') }}">Servicios</a></li>
                                <li id="sp"><a href="{{ url('/Spa') }}">Spa</a></li>
                                <li id="con"><a  href="{{ url('/contactos') }}">Contactos</a></li>
                            </ul>
                        </nav>

                </div>
    <a href="{{ url('/admin') }}" class="btn-sing">
        <i>Iniciar Secion</i>
    </a>
    @yield('content')

   <!-- Footer -->
                <div id="footer">
                    <div class="container">
                        <div class="row">
                            <section class="3u 3u$(narrower) 12u$(mobilep)">
                                <h3>Habitaciones</h3>
                                <ul class="links">
                                    <li><a href="#">Simple</a></li>
                                    <li><a href="#">Doble</a></li>
                                    <li><a href="#">Triple</a></li>
                                    <li><a href="#">Familiar</a></li>
                                    <li><a href="#">Matrimonial</a></li>
                                    <li><a href="#">Matrimonial con Jacuzzi</a></li>
                               
                                </ul>
                            </section>
                            
                            <section class="3u 3u$(narrower) 12u$(mobilep)">
                                <h3>Hostal Keymar Spa</h3>
                                <ul class="links">
                                    <li><a href="#">Teléfono: 053-470352</a></li>
                                    <li><a href="#">Celular:   953-660-708</a></li>
                                    <li><a href="#">E-mail: hostal.keymar@gmail.com</a></li>
                                    <li><a href="#">Av. Simón Bolivar A-2 (Frente al Estadio)</a></li>
                                    <li><a href="#">Moquegua, Perú</a></li>
                                    
                                   
                                </ul>
                            </section>
                             <section class="3u 3u$(narrower) 12u$(mobilep)">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3811.646947609566!2d-70.92876100000001!3d-17.187376999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91449c151cdccb7b%3A0x4a4a5e2664f6b03b!2sHostal+Keymar+Spa!5e0!3m2!1ses-419!2spe!4v1481600176532" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                           
                            </section>
                            
                        </div>
                    </div>

                    <!-- Icons -->
                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        </ul>

                    <!-- Copyright -->
                        <div class="copyright">
                            <ul class="menu">
                                <li>&copy; Copyright © 2016 - 2018. Hostal Keymar Spa.</li><li><p>Todos los derechos reservados.</p></li>
                            </ul>
                        </div>

                </div>

        </div>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.dropotron.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>

    </body>
</html>