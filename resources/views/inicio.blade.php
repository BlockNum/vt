@extends('layouts.generalvinos')

@section('content')


  <!-- Project Section -->
<style>

.container {
    position: relative;
    width: 25%;
    margin: 10px;
    padding: 20px;
    float: left;
    
 
}

.image {
  opacity: 1;
  display: block;
  width: 250px;
  height: 210px;
  transition: .5s ease;
  backface-visibility: hidden;
     border-radius: 20px;
    border: 2px solid #73AD21;
    /*padding: 20px;*/
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container:hover .image {
  opacity: 0.3;
  -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}

@media only screen and (max-width: 700px){
    .container {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .container {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
h3 {
  background-color: #efefef;
  padding: 10px;
  position: center;
}
#fondo    {
            background-image: url("fondo.jpg");
            height: 100%;
            width: 100%;
            background-position: center;
            padding: -25px;
            background-size: 100%;
            background-repeat: repeat;
            background-attachment: fixed;
            
        }
</style>
</head>
<body>
<!--<div id="fondo">-->

<header class="w3-container w3-black w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">"El Placer del buen tomar."</h1>
  <p class="w3-xlarge">Website</p>
</header>
<h3 class="w3-margin">Productos Destacados</h3>

<div class="container">
  <img src="sauvignon.jpg" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <div class="text">Cabernet Sauvignon</div>
  </div>
</div>


<div class="container">
  <img src="malbec.jpg" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <div class="text">Malbec</div>
  </div>
</div>

<div class="container">
  <img src="pinot.jpg" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <div class="text">Pinot Noir</div>
  </div>
</div>

<div class="container">
  <img src="tannat.jpg" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <div class="text">Tannat</div>
  </div>
</div>

<div class="container">
  <img src="semillon.jpeg" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <div class="text">Semillon</div>
  </div>
</div>

<div class="container">
  <img src="verdejo.jpg" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <div class="text">Verdejo</div>
  </div>
</div>

<div class="container">
  <img src="bonarda.jpg" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <div class="text">Bonarda</div>
  </div>
</div>

<div class="container">
  <img src="merlot.jpg" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <div class="text">Merlot</div>
  </div>
</div>
</div>


@endsection
