@extends('layouts.masters')

@section('title')
	Vinoteca Tienda
@endsection

@section('contents')
	<div class="row">
		<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
			<h1>Confirmar</h1>
			<h4>Total: ${{ $total }}</h4>
			<form action="{{ route('checkout') }}" method="post" id="checkout-form">
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="name">Nombre</label>
							<input type="text" name="name" class="form-control" required>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="direccion">Direccion</label>
							<input type="text" name="direccion" class="form-control" required>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="card-name">Nombre del titular de la tarjeta</label>
							<input type="text" name="card-name" class="form-control" required>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="card-number">Numero de tarjeta de credito</label>
							<input type="text" name="card-number" class="form-control" required>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="card-expiry-month">Mes de expiracion</label>
							<input type="text" name="card-expiry-month" class="form-control" required>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="card-expiry-year">Año de Expiracion</label>
							<input type="text" name="card-expiry-year" class="form-control" required>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="card-cvc">CVC</label>
							<input type="text" name="card-cvc" class="form-control" required>
						</div>
					</div>
				</div>  
				{{ csrf_field() }}
				<button type="success" class="btn btn-success">Confirmar Compra</button>
			</form>
		</div>
	</div>
@endsection

@section('scripts')
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
@endsection