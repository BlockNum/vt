<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;

class TasksController extends Controller
{
    public function profile()
    {
    	$id = Sentinel::getUser();

    	return view('managers.tasks', compact('id'));
    }
}
