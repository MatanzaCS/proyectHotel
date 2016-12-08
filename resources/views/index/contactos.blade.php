@extends('layouts.home')
@section('content')
<script>
$(document).ready(function() {
  $('#con').addClass('current');
});
</script>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contactos</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
</head>
<body>
	<header>
		<div class="container">
			<h2><center>CONTÁCTANOS</h2></center>
		</div>
	</header>

	<!--Separacion de Texto-->

	<div class="container">
		<section class="main">
			<article class="12u">
				<p>
				Si tienes alguna pregunta, por favor contáctanos vía email o telefónicamente. Te responderemos tan pronto como sea posible. Esperamos con interés su contacto.
				</p>
			</article>
		</section>
	<!--Seccion Mapa-Numeros-->
	<div class="row">
			<div class="6u 12u">
				<p>
				Mediante  este  formulario  puede realizar cualquier consulta que  tenga con  respecto al hostal y sus servicios.
				En este  formulario NO debe solicitar reservas, para ello esta el formulario.
				</p>
			</div>
			<div class="6u 12u">
				<p>
					Telefono: 053-470352
					Celular: 953 660 708
					E-mail: hostal.keymar@gmail.com
					Dirección: Av.Simon Bolívar A-2 (Frente al Estadio)
				</p>
			</div>	
		</div>
	</div>
</body>	
</html>
@endsection
