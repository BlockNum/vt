<h1>Hello</h1>

<p>	

	Por favor confirma tu cuenta de correo electronico en el siguiente enlace,
	<a href="{{ env('APP_URL') }}/activate/{{ $user->email }}/{{ $code }}">activar cuentat</a>
</p>