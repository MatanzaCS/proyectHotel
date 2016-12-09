@extends('layouts.home')

@section('content')
<h1><center>Habitaciones</center></h1>

<section>
	@foreach ($datos[0] as $s)
	<div class="row cont-hab">
		<div class="6u 12u(narrower)"><img src="../../imagen/tiposHabitaciones/{{$s->foto}}" class="img-responsive"></div>
		<div class="6u 12u(narrower)">
			<div>{{$s->Nombre}} </div>
			<div>{{$s->Descripcion}}</div>
	    	<div>{{$s->precio_habitacion}}</div>
		</div>
	</div>
	@endforeach
</section>

<script>
$(document).ready(function() {
  $('#hab').addClass('current');
});
</script>
@endsection
