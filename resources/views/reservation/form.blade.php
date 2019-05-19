@extends('layout.index')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="./css/reservation.css">
@endsection

@section('content')

	<div class="container sign-up">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<h1>Escenario 1 - ALFA</h1>
			</div>

			<div class="col-lg-8 col-sm-12 characteristics">
				<h2>Características del pabellón</h2>
				<ul>
					<li>Amplio Espacio para eventos de más de 500 personas.</li>
					<li>Cuenta con tarima para eventos de 100 metros</li>
					<li>Cuenta con 5 camerinos y baños privados para los camerinos</li>
				</ul>
			</div>
			<div class="col-lg-4 col-sm-12">
				<div class="carousel">
				    <button id="retroceder"><</button>
				    <div id="imagen"></div>
				    <button id="avanzar">></button>
				</div>
				<div class="text-right">
					<h2 class="red-word">PRECIO</h2>
					<span>$15.000.000 COP</span>
				</div>
			</div>

			<div class="col-lg-12 col-sm-12 form-reservation">
				<h1 class="text-center">Reservación</h1>
				<form>
					<div class="form-group">
						<label for="event-type"><b>Tipo de evento</b></label>
						<input type="text" name="event-type" id="event-type" class="form-control" placeholder="Tipo de evento que va a realizar" required>
					</div>
					<div class="form-group">
						<label for="phone"><b>Teléfono</b></label>
						<input type="text" name="phone" id="phone" class="form-control" placeholder="+573333333333" required>
					</div>
					<div class="form-group">
						<label for="date-start"><b>Fecha Incio</b></label>
						<input type="date" name="date-start" id="date-start" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="date-end"><b>Fecha Fin</b></label>
						<input type="date" name="date-end" id="date-end" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="description"><b>Qué es lo que necesitas?</b></label>
						<textarea id="description" name="description" class="form-control" placeholder="Cuéntanos con detalle que necesitas y como lo necesitas"></textarea>
					</div>
					
					<div class="col-lg-12 col-sm-12 text-right">
						<button class="btn btn-primary">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection

@section('custom_js')
<script type="text/javascript" src="./js/reservation-form.js"></script>
@endsection