@extends('layouts.home')

@section('content')
<section class="wrapper style1">
                    <div class="container" >
                        <header class="major">
                            <h2>Habitaciones </h2>

                        </header>
                    </div>
                </section>

<section>
	@foreach ($datos[0] as $s)
	<div class="row cont-hab">
		<div class="6u 12u(narrower)"><img src="../../imagen/tiposHabitaciones/{{$s->foto}}" class="img-responsive"></div>
		<div class="6u 12u(narrower)">
			<div>{{$s->Nombre}} </div>
		<div><TEXTAREA COLS=10 ROWS=13 NAME="Texto">{{$s->Descripcion}}</TEXTAREA> 
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
