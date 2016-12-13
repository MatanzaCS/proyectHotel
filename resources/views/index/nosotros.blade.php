@extends('layouts.home')

@section('content')

<!--Puntero-->
<script>
$(document).ready(function() {
  $('#nos').addClass('current');
});
</script>
<!--Contenido-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nosotros</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		div.container{
			width: 100%;
			max-width: 750px;
			margin: 0 auto;
		}
		img {
			width: 100%;
			height: auto;
		}
	</style>
	<style>
		
	</style>
</head>
<body>
	<h1>QUINES SOMOS</h1>
		<div class="container">
			<img src="images/Hotel.jpg" width="100%">
		</div>
	<div class="container">
		<div class="12u ">
			<h1 style="text-align: center;">EL HOSTAL KEYMAR SPA LES DA LA BIENVENIDA</h1>
			<p style="text-align: justify;">
				Déjese seducir por éste magnífico Hostal de 3 estrellas y por nuestra insuperable atención y cordialidad hacia Ud. Nuestro hostal se encuentra a su entera disposición, muy cerca del corazon de Moquegua.
				<br>
				Una ubicación inmejorable. Quedará encantado por la excelente ubicación. Una zona auténtica, lejos de las tiendas en donde bulle la vida cotidiana. Queremos que disfrute su estancia con nosotros: nuestro hostal está tan solo unos minutos del centro de la ciudad, dando un agradable paseo.
				<br>
				Confort, encanto, tranquilidad… Porque cada uno de nuestros huéspedes son únicos, y les proponemos el poder elegir entre un amplio abanico de 30 habitaciones totalmente equipadas, que harán que su estancia sea lo mas placentera posible para su descanso y comodidad
			</p>
		</div>
		<div class="row">
			<div class="6u 12u">
				<h1>MISION</h1>
				<p style="text-align: justify;">
					Servir con excelencia y cubrir las expectativas de las necesidades de nuestro cliente local, nacional e internacional asumiendo el compromiso de hacer realidad los sueños de quienes confian en nosotros, para lograr una estadia agradable y cómoda, con toda la tecnología disponible en nuestros establecimientos, creando ademas experiencias autenticas que van más allá de lo que el turista o viajero desea recibir, siendo la excelencia en el servicio nuestra folosofía del trabajo. 
				</p>
			</div>	
			<div class="6u 12u">
			<h1>VISION</h1>
			<p style="text-align: justify;">
				Ser el lugar preferido de nuestra ciudad, por los huéspedes de negocios, como funcionarios de negocios y ejecutivos de empresas en la ciudad de Moquegua, así también mantenernos a la vanguardia para posicionarnos como el hostal que ofrece el mejor ambiente, comodidad y seguridad para el éxito de su trabajo. Para el turismo receptivo y nacional, y ser la puerta de ingreso de la zona sur del país.
			</p>	
			</div>
		</div>
	</div>	
</body>
</html>


@endsection
