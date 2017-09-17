@extends('layouts.generalvinos')

@section('content')
<head><link rel="stylesheet" href="css/estilosregister.css"></head>
<div class="fondocontacto">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="contenedor-formulario">

					<h3 class="panel-title"> Registro </h3>

				<div class="panel-body">
					<form class="formulario" action="register" method="POST">
						{{ csrf_field() }}

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								
								<input type="email" name="email" class="form-control" placeholder="Correo electronico">					

							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								
								<input type="text" name="first_name" class="form-control" placeholder="Nombre">					

							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								
								<input type="text" name="last_name" class="form-control" placeholder="Apellido">					

							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								
								<input type="text" name="location" class="form-control" placeholder="Localizacion">					

							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								
								<input type="password" name="password" class="form-control" placeholder="Contraseña">					

							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								
								<input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña">					

							</div>
						</div>
						<div class="form-group">
							
								<input type="submit" value="Registrarse" class="btn btn-success pull-right">				
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
-->
