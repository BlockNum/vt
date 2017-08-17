<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use Session;

class PostsController extends Controller
{
    public function store(Request $request)
    {
    	$user = Sentinel::getUser();

	$this->validate($request, [
    'title' => 'required|unique:posts|max:255',
    'body' => 'required',
]);
    	if($user->hasAccess('posts.create'))
			return $request->all();

		abort(403, 'Unauthorized action.');
    }

    public function index() {
    	$posts = Post::all();
    	return view('posts', ['posts' => $posts]);
    }
}
// class PostsController extends Controller 
//{
//  	public function show($id) 
//  	{
//    	return view('post', ['post_id' => $id]);
//  	}
//}


