<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;
use Sentinel;
use Session;
class MailController extends Controller
{
    public function getContact()
    {
    	return view('contacto');
    }

   public function postContact(Request $request)
   {
   	$this->validate($request, [
   		'email' => 'required|email',
   		'subjet' => 'min:5|max:10',
   		'message' =>'min:10|max:30']);

   	$data = array(
   		'email' => $request->email,
   		// 'subjet' => $request->subjet,
   		'subject' => $request->subject,
   		'bodyMessage' => $request->message
   		);
   	Mail::send('emails.contacto', $data, function($message) use ($data){
   		$message->from($data['email']);
   		$message->to('sentineluser226@gmail.com');
   		//$message->subject('Nuevo mail de contacto');
   		$message->subject($data['subject']);
   		});

   	// Session::flash('Correcto', '');

  		         return redirect()->back()->with(['Correcto' => "Su consulta ha sido enviada con exito!"]);
   	}
   }
