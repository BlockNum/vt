@extends('layouts.navbarlogreg')

@section('content')
<head><link rel="stylesheet" href="css/estiloslogin.css"></head>
<div class="fondocontacto">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="contenedor-formulario">

					<h3 class="panel-title"> Iniciar sesion </h3>

					<form class="formulario" action="login" method="POST">
						{{ csrf_field() }}

						@if(session('error'))
						<div class="alert alert-danger">
							{{ session('error') }}
						</div>
						@endif

						@if(session('succsess'))
						<div class="alert alert-success">
							{{ session('succsess') }}
						</div>
						@endif

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								
								<input type="email" name="email" class="form-control" placeholder="Correo electronico" required>					

							</div>
						</div>
					
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								
								<input type="password" name="password" class="form-control" placeholder="Contraseña" required>					

							</div>
						</div>

						<div class="form-group">
							<div class="remember" align="left">
								Remember me	
								<input type="checkbox" name="remember_me">					

							</div>
						</div>

						<a class="contraseña" href="forgot-password">Olvidaste tu contraseña?</a>
						<hr>
					

						<div class="form-group">				

								<a href="register" class="btn btn-success pull-left">No tienes una cuenta, registrate!</a>
								<input type="submit" value="Iniciar sesion" class="btn btn-success pull-right">


<!--<fb:login-button 
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button>	-->			
							
						</div>
						<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<a href="{{ url('login/facebook') }}" class=btn btn-facebook><i class="fa fa-facebook"></i> Facebook</a>
						</div>
					</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
