@extends('layout.index')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{ url('/css/list.css') }}">
@endsection

@section('content')
	<div class="container scnearios">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<h1>Escenarios disponibles</h1>
			</div>

			<div class="col-lg-6 col-sm-12">
				<figure class="figure">
					<img src="{{ url('/images/slide1.jpg') }}">
					<figcaption class="figure-caption">Escenario 1 - Alfa</figcaption>
				<figure class="figure">
				<div class="text-center button-margin">
					<button class="btn btn-success">Rentar</button>
					<button class="btn btn-primary">Más info</button>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<figure class="figure">
					<img src="{{ url('/images/slide2.jpg') }}">
					<figcaption class="figure-caption">Escenario 2 - Beta</figcaption>
				<figure class="figure">
				<div class="text-center button-margin">
					<button class="btn btn-success">Rentar</button>
					<button class="btn btn-primary">Más info</button>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<figure class="figure">
					<img src="{{ url('/images/slide3.jpg') }}">
					<figcaption class="figure-caption">Escenario 3 - Omega</figcaption>
				<figure class="figure">
				<div class="text-center button-margin">
					<button class="btn btn-success">Rentar</button>
					<button class="btn btn-primary">Más info</button>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<figure class="figure">
					<img src="{{ url('/images/slide1.jpg') }}">
					<figcaption class="figure-caption">Escenario 4 - Metro</figcaption>
				<figure class="figure">
				<div class="text-center button-margin">
					<button class="btn btn-success">Rentar</button>
					<button class="btn btn-primary">Más info</button>
					</div>
			</div>
		</div>
	</div>
@endsection