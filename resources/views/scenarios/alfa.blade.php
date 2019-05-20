@extends('layout.index')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="./css/list.css">
@endsection

@section('content')
	<div class="container scnearios">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<h1>Escenario 1 - ALFA</h1>
			</div>

			<div class="col-lg-6 col-sm-12">
				<div class="row">
					<div class="col-lg-6 col-sm-12">
						<img src="./images/slide1.jpg" alt="imagen 1">
					</div>
					<div class="col-lg-6 col-sm-12">
						<h3>Economía</h3>
						<p>Económico, pero cuenta con grandes salones de exposición y presentación.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="row">
					<div class="col-lg-6 col-sm-12">
						<img src="./images/slide2.jpg" alt="imagen 2">
					</div>
					<div class="col-lg-6 col-sm-12">
						<h3>Amplio</h3>
						<p>Cuenta con una amplia gama de salones y cada salón cuenta con espacio amplio de trabajo.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="row">
					<div class="col-lg-6 col-sm-12">
						<img src="./images/slide3.jpg" alt="imagen 3">
					</div>
					<div class="col-lg-6 col-sm-12">
						<h3>Características</h3>
						<p>Cuenta con diferentes tarimas, exclusividad a camerinos y estos a su vez cuenta con baños privados.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="row">
					<div class="col-lg-6 col-sm-12">
						<img src="./images/event1.jpg" alt="imagen 4">
					</div>
					<div class="col-lg-6 col-sm-12">
						<h3>Otros</h3>
						<p>Capacidad para 1500 personas y disponibilidad de mesas y sillas.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection