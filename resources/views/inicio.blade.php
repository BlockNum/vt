@extends('layouts.generalvinos')

@section('content')

 <head>
 <link rel="vinoico" type="image/x-icon" href="vinoico.ico" />
   <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <style>
      body {
        font-family: 'Josefin Sans', sans-serif;
        font-size: 18px;
      }
    </style>
  </head>
<!-- Header -->
<title>Vinoteca</title>
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="fondo.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Vinoteca</b></span> </h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Productos Destacados</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Cabernet Sauvignon</div>
        <a title="Vino Cabernet Sauvignon" href="/sentinel/public/productos"><img src="sauvignon.jpg" alt="Vino Cabernet Sauvignon" width="100%" height="50%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Malbec</div>
        <a title="Vino Malbec" href="/sentinel/public/productos"><img src="malbec.jpg" alt="Vino Malbec" width="100%" height="50%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Merlot</div>
      <a title="Vino Merlot" href="/sentinel/public/productos"><img src="merlot.jpg" alt="Vino Merlot" width="100%" height="50%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Bonarda</div>
        <a title="Vino Bonarda" href="/sentinel/public/productos"><img src="bonarda.jpg" alt="Vino Bonarda" width="100%" height="50%"></a>
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Pinot Noir</div>
        <a title="Vino Pinot Noir" href="/sentinel/public/productos"><img src="pinot.jpg" alt="Vino Pinot Noir" width="100%" height="50%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Verdejo</div>
        <a title="Vino Verdejo" href="/sentinel/public/productos"><img src="verdejo.jpg" alt="Vino Verdejo" width="100%" height="50%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Semillon</div>
       <a title="Vino Semillon" href="/sentinel/public/productos"><img src="semillon.jpeg" alt="Vino Semillon" width="100%" height="50%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Tannat</div>
        <a title="Vino Tannat" href="/sentinel/public/productos"><img src="tannat.jpg" alt="Vino Tannat" width="100%" height="50%"></a>
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"> Mas Sobre Nosotros</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>

@endsection
