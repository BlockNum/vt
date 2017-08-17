@extends('layouts.navbarlogreg')

@section('content')

<!--Estilo CSS de la View-->

<head>
<link rel="stylesheet" href="css/estilos.css"></head>
<meta name="csrf-token" content="{{ csrf_token() }}"/> 
<div class="fondocontacto">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="contenedor-formulario">

				<title>Contacto</title>
				<h3 class="panel-title"> ¡Envianos un email! </h3>

				<form class="formulario" action="{{ url('contacto') }}" method="POST">
			@if (Session::has('Correcto')) 

		<div class="alert alert-info"> 
			<a class="close" data-dismiss="alert"></a> <strong>¡Consulta enviada!</strong> {!!Session::get('Correcto')!!} 
		</div> 

			@endif

		<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
			{!! csrf_field() !!} 
			<!--Cuerpo del formulario-->
			 <div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					<label name="email">Email</label>
					<input id="email"name="email" class="form-control" placeholder="Email" required>
			</div>

			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					<label name="subjet">Asunto</label>
					<input id="subject" name="subject" class="form-control" placeholder="Asunto" required>
				</div>
			</div>

			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					<label name="message">Mensaje:</label>
					<textarea id="message"name="message" class="textarea" placeholder="Escriba su mensaje aqui.." required></textarea>
				</div> 
			</div>

			<input type="submit" value="Send Message" class="btn btn-success">

				</form>
			</div>
		</div>
	</div>
</div>

@endsection