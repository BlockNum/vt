<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException; 
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
 use Laravel\Socialite\Contracts\Factory as Socialite;

class LoginController extends Controller
{
    public function login()
    {
    	return view('authentication.login');
    }

    public function postLogin(Request $request)
    {
        try{
            $rememberMe = false;    

            if(isset($request->remember_me))
            $rememberMe = true;

            if(Sentinel::authenticate($request->all(), $rememberMe)){
             $slug = Sentinel::getUser()->roles()->first()->slug;
         
         if($slug == 'admin')
            return redirect('earnings');
        elseif($slug == 'manager')
            return redirect('tasks');
        } else{
            return redirect()->back()->with(['error' => 'Wrong credentials.']);
        }
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();

            return redirect()->back()->with(['error' => "You are banned for $delay seconds"]);
        } catch (NotActivatedException $e) {
             return redirect()->back()->with(['error' => "Tu cuenta no se encuentra activada!"]);
        }
  
    }

    public function logout()
    {
        Sentinel::logout();

        return redirect('login');
    }

    public function __construct(Socialite $socialite){
           $this->socialite = $socialite;
       }


       public function getSocialAuth($provider=null)
       {
           if(!config("services.$provider")) abort('404'); //just to handle providers that doesn't exist

           return $this->socialite->with($provider)->redirect();
       }


       public function getSocialAuthCallback($provider=null)
       {
          if($user = $this->socialite->with($provider)->user()){
             dd($user);
          }else{
             return 'something went wrong';
          }
       }
}
