@extends('layouts.home')
<script>
$(document).ready(function() {
  $('#inicio').addClass('current');
});
</script>
@section('content')

    <!-- Banner -->
  
   
                <section id="banner">
                    <header>
                        <h2><em>Hotel Hostal Keymar Spa Viva la Experiencia ...</em></h2>
                        <a href="#" class="button">Reserve Ahora</a>
                    </header>
                </section>
<!-- Gigantic Heading -->
                <section class="wrapper style2">
                    <div class="container" >
                        <header class="major">
                            <h2>Contamos con los mejores servicios</h2>
                            <p>Tenemos todo lo usted necesita a su alcance</p>
                        </header>
                    </div>
                </section>
            <!-- Highlights -->
                <section class="wrapper style1">
                    <div class="container">
                        <div class="row">
                            <section class="4u 12u(narrower)">
                                <div class="box highlight">
                                    <h3>Desayunos</h3>
                                    <img id="imap" src="images/d01.jpg"><br><br>
                                    <p>Desayuno Americano y Continental</p>
                                </div>
                            </section>
                            <section class="4u 12u(narrower)">
                                <div class="box highlight">
                                    <h3>Cafeteria</h3>
                                    <img id="imap" src="images/d02.jpg"><br><br>
                                <!--<img id="imap" src="../images/habitaciones.jpg">-->
                                <p>Servicio de Cafeteria Bar</p>
                                </div>
                            </section>
                            <section class="4u 12u(narrower)">
                                <div class="box highlight">
                                    <h3>Spa</h3>
                                    <img id="imap" src="images/spa01.jpg"><br><br>
                                    <p>Ofrecemos Exclusivo salon de Spa</p>
                                </div>
                            </section>

                         
                        </div>
                    </div>
                </section>


                
        <!-- Feature 1 -->
			<article id="first" class="container box01 style7 right">
				<a href="#" class="image fit"><img src="images/pro01.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<center><h2>Tenemos<br />
						Promociones para ti</h2></center>
					</header>
					
				</div>
			</article>

		<!-- Feature 2 -->
			<article class="container box01 style7 left">
				<a href="#" class="image fit"><img src="images/pro02.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<center><h2>Descuentos<br />
						por elegir nuestros servicios</h2></center>
                        <p>todos los fines de semana los esperamos para nuestras promociones </p>                                                                                                         </p>
					</header>
					
				</div>
			</article>
        

            <!-- Gigantic Heading -->
                <section class="wrapper style2">
                    <div class="container">
                        <header class="major">
                            <h2>Tenemos todo tipo de habitaciones</h2>
                            <p>visitanos estaremos esperandolo</p>
                        </header>
                    </div>
                </section>

            <!-- Posts -->
                <section class="wrapper style1">
                    <div class="container">
                        <div class="row">
                            <section class="6u 12u(narrower)">
                                <div class="box post">
                                    <h3>Decoraciones</h3>
                                    <a href="#" class="image left"><img src="images/dec04.jpg" alt="" /></a>
                                    <div class="inner">
                            </div>
                            
                                </div>
                                <p>Tenemos las mejores decoraciones para toda ocasion</p>
                            </section>
                            <section class="6u 12u(narrower)">
                                <div class="box post">
                                    <h3>Lujosas</h3>
                                    <a href="#" class="image left"><img src="images/dec05.jpg" alt="" /></a>
                                    <div class="inner">
                                        
                                        
                                    </div>
                                </div>
                                <p>Tenemos habitaciones espaciosas</p>
                            </section>
                           
                        </div>
                        
                        </div>
                    </div>
                </section>

            <!-- CTA -->
                <section id="cta" class="wrapper style3">
                    <div class="container">
                        
                    </div>
                </section>

@endsection
