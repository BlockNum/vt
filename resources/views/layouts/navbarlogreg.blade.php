<!--Estilos CSS-->

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

<!-- Estilos de los Input/Label y demas de los formularios-->

<link rel="stylesheet" href="css/estilos.css">

<link rel="stylesheet" href="css/estiloslogin.css">

<link rel="stylesheet" href="css/estilosregister.css">

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<!--Imagen de fondo-->

<style>
    .fondocontacto
            {
            background-image: url("fondo.jpg");
            height: 100%;
            width: 100%;
            background-position: center;
            background-attachment: fixed;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            }
</style>

<!--Icono-->

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<!doctype html>
<html lang="{{ config('app.locale') }}">
<!--Cabeceras, Fuente poner siempre en el head, recomendacion de Google-->
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  @yield('styles')
</head>
<body>
@include('layouts.generalvinos')
<div class="container">
@yield('contents')
</div>

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@yield('scripts')
</body>
</html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <style>
      body  {
            font-family: 'Josefin Sans', sans-serif;
            font-size: 18px;
            }
    </style>
</head>

<head>
          <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
          <title> Vinoteca </title>
</head>
<!--Cuerpo-->
<body>
<!--<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div> -->

<!-- Navbar (sit on top) -->
<div class="w3-left">
  <div class="w3-bar w3-red w3-wide w3-padding w3-card-2">
         <a href="/sentinel/public/" class="w3-bar-item w3-button"><b>Vt</b> Vinoteca</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
          <a href="/sentinel/public/" class="w3-bar-item w3-button">Inicio</a>
          <a href="/sentinel/public/productos" class="w3-bar-item w3-button">Productos</a>
          <a href="/sentinel/public/contacto" class="w3-bar-item w3-button">Contacto</a>
          <a href="/sentinel/public/register" class="w3-bar-item w3-button">Registrarse</a>
          <a href="/sentinel/public/login" class="w3-bar-item w3-button">Ingresar</a>
       

     
    </div>
  </div>
</div>




           @yield('content')


</body>
</html>

