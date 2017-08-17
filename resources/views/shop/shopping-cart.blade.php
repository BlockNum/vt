@extends('layouts.masters')

@section('title')
	Vinoteca Tienda
@endsection

@section('contents')
	@if(Session::has('cart'))
	<br><br><br>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<ul class="list-group">
					@foreach($products as $product)
						<li class="list-group-item">
							<span class="badge">{{ $product['qty'] }}</span>
							<strong>{{ $product['item']['title'] }}</strong>
							<span class="label label-success">${{ $product['price'] }}</span>
							<div class="btn-group">
								<button type="button" class="btn btn-primary btn-xs dropdown-toogle" data-toogle="dropdown">Action <span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li><a href="#">Eliminar 1</a></li>
									<li><a href="#">Eliminar Todos</a></li>
								</ul>
							</div>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<strong>Total: {{ $totalPrice }}</strong>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<a href="{{ route('checkout') }}" type="button" class="btn btn-success">Confirmar</a>
			</div>
		</div>
	@else
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<h2>No hay items en el carrito</h2>
			</div>
		</div>
	@endif
@endsection