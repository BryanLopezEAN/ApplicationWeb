@extends('layout.index')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="./css/event.css">
@endsection

@section('content')

<div class="container contex">

	<h1>EVENT 1</h1>
	
	<p class="stilep">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
	The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
	
	<div class="container">
	
		<div class="row">
			<div class="col-sm-4  espaciado ">
				
				<h5 estiloinfo>Desde: 2018-05-17</h5>
				<h5>Hasta: 2018-06-02</h5>
				<h5>Hora: De 7:00 am a 8:00 pm</h5>
				<h5>Direccion: Cra. 37 #24-67, Bogotá</h5>
				<a href="#" class="estiloa">Escenarios</a>
			</div>
			
			<div class="col-sm-8 moverimagen ">
				<img class="img-fluid" src="./images/Filbo-2018.png" >
			</div>
		</div>
		
	</div>


	</div>
	
</div>

@endsection