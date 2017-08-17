<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
 <link rel="vinoico" type="image/x-icon" href="vinoico.ico" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
<!--Icono-->
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<!DOCTYPE html>
<html>
 <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <style>
      body {
        font-family: 'Josefin Sans', sans-serif;
        font-size: 18px;
      }
    </style>
  </head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<body>

<!--<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>-->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1640832205949869',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();   
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card-2">
         <a href="/sentinel/public/" class="w3-bar-item w3-button"><b>Vt</b> Vinoteca</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
        <a href="/sentinel/public/" class="w3-bar-item w3-button">Inicio</a>
        <a href="/sentinel/public/productos" class="w3-bar-item w3-button">Productos</a>
        <a href="/sentinel/public/contacto" class="w3-bar-item w3-button">Contacto</a>
    <ul class="social-network social-circle">
<li><a href="/sentinel/public/tasks" class="icoTwitter" title="Go TO Profile!"><i class="fa fa-twitter"></i></a></li>
<li><a href="www.facebook.com" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
<li><a href="www.google.com" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
    </ul>       
    </div>
  </div>
</div>




           @yield('content')
<style>
/*=========================
  Icons
 ================= */

/* footer social icons */
ul.social-network {
  list-style: none;
  display: inline;
  margin-left:5 !important;
  padding: 50;
}
ul.social-network li {
  display: inline;
  margin: 0px;
}


/* footer social icons */
.social-network a.icoRss:hover {
  background-color: #F56505;
}

.social-network a.icoFacebook:hover {
  background-color:#3B5998;
}

.social-network a.icoTwitter:hover {
  background-color:#33ccff;
}
.social-network a.icoGoogle:hover {
  background-color:#BD3518;
}

.social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoGoogle:hover i {
  color:#fff;
}
a.socialIcon:hover, .socialHoverClass {
  color:#44BCDD;
}

.social-circle li a {
  display:inline-block;
  position:relative;
  margin:0 auto 0 auto;
  -moz-border-radius:50%;
  -webkit-border-radius:50%;
  border-radius:50%;
  text-align:center;
  width: 50px;
  height: 50px;
  font-size:20px;
}
.social-circle li i {
  margin:0;
  line-height:50px;
  text-align: center;
}

.social-circle li a:hover i, .triggeredHover {
  -moz-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  -ms--transform: rotate(360deg);
  transform: rotate(360deg);
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  -ms-transition: all 0.2s;
  transition: all 0.2s;
}
.social-circle i {
  color: #fff;
  -webkit-transition: all 0.8s;
  -moz-transition: all 0.8s;
  -o-transition: all 0.8s;
  -ms-transition: all 0.8s;
  transition: all 0.8s;
}

a {
 background-color: #D3D3D3;   
}
.mapa {
  background-color: #CCCCCC;
}
body{
    padding: 50px;
}

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
<!-- Footer -->

</body>
</html>

