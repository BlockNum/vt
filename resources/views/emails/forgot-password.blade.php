<h1>Hello</h1>

<p>
	Por favor clickea el siguiente enlace para reestablecer su contraseña,
	<a href="{{ env('APP_URL') }}/reset/{{ $user->email }}/{{ $code }}">click here!</a>
</p>