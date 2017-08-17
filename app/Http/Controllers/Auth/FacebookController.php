<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;
use Auth;
use Socialite;

class FacebookController extends Controller
{
	public function redirectToProvider()
	{
		return Socialite::driver('facebook')->user();
	}

	public function handleProviderCallback()
	{
		try {
			$socialUser = Socialite::driver('facebook')->user();
			dd($socialUser);
			}
		catch(\Exception $e) {
			return redirect('login');
		}
	$user = User::where('facebook_id', $socialUser->getId())->first();

	if(!$user){
		User::create([
			'facebook_id' => $socialUser->getId(),
			'name' => $socialUser->getName(),
			'email' => $socialUser->getEmail(),
			]);
	}

	if(Auth::loginUsingId($user->id)){
		return redirect()->intended('inicio');
	}
}	
}
