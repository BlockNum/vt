<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;

class ProfileController extends Controller
{
    public function profile($id)
    {
    	$id = User::whereId($id)->first();

    	return view('managers.profile', compact('id'));
    }
}
