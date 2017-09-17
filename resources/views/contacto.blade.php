@extends('layouts.generalvinos')

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
			<br>
			 <div class="input-group">
			 
					<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					<input id="email"name="email" class="form-control" placeholder="Email" required>
			</div>
			<br>
			<br>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					<input id="subject" name="subject" class="form-control" placeholder="Asunto" required>
				</div>
			</div>
			<br>


			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					<textarea id="message" name="message" class="textarea" placeholder="Escriba su mensaje aqui.." required></textarea>
				</div> 
			</div>

			<input type="submit" value="Send Message" class="btn btn-success">

				</form>
			</div>
		</div>
	</div>
</div>

<!-- Contact Container 
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Swing by for a cup of coffee, or whatever.</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;Chicago, US</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;+00 1515151515</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;test@test.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label>I Like it!</label>
      <button type="submit" class="w3-button w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>

<!-- Google Maps --
<div id="googleMap" style="width:100%;height:420px;"></div>
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

@endsection