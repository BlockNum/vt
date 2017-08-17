<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;
use Sentinel;

class HomeController extends Controller
{
	public function inicio()
	{
		return view('inicio');
	}

	public function productos()
	{
		return view('productos');
	}

	public function contacto()
	{
		$mensaje = null;
		if (isset($_POST['contacto']))
		{
			$contact = array(
				'name' => Input::get('name'),
				'email' => Input::get('email'),
				'subjet' => Input::get('subjet'),
				'msg' => Input::get('msg'),
			);
			$fromEmail = 'sentineluser226@gmail.com';
			$fromName = 'Administrador';

			Mail::send('emails.contacto', $contact, function($message) use ($fromName, $fromEmail)
			{
				$message->to($fromEmail, $fromName);
				$message->from($fromEmail, $fromName);
				$message->subjet('Nuevo mail de contacto');
			});
			$mensaje = '<div class="text-info">Mensaje enviado con exito</div>';
		}
		return view('contacto', array('mensaje'=> $mensaje));
	}
}
