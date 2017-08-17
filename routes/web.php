<?php

Route::get('/', 'HomeController@inicio');

//Route::get('/incio', 'HomeController@inicio');

Route::get('/productos', 'HomeController@productos');

Route::get('/contacto', 'MailController@getContact');

Route::post('/contacto', 'MailController@postContact');

// Route::get('/contacto', 'HomeController@contacto');

//Route::get('/asd', 'HomeController@asd');

Route::group(['middleware' => 'visitors'], function() {

Route::get('register', 'RegistrationController@register');
	
Route::post('register', 'RegistrationController@postRegister');

Route::get('login', 'LoginController@login');

Route::post('login', 'LoginController@postLogin');

Route::get('forgot-password', 'ForgotPasswordController@forgotPassword');

Route::post('forgot-password', 'ForgotPasswordController@postForgotPassword');

Route::get('reset/{email}/{resetCode}', 'ForgotPasswordController@resetPassword');

Route::post('reset/{email}/{resetCode}', 'ForgotPasswordController@postResetPassword');

});

Route::get('posts', 'PostsController@index');

Route::get('post/{id}', 'PostsController@show');

Route::post('logout', 'LoginController@logout');

Route::get('earnings', 'AdminController@earnings')->middleware('admin');

// Route::get('tasks', 'ManagerController@tasks')->middleware('manager');

Route::get('activate/{email}/{activationCode}','ActivationController@activate');

Route::post('posts', 'PostsController@store');

Route::post('www.facebook.com');

Route::get('auth/github', 'Auth\LoginController@redirectToProvider');

Route::get('auth/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('chat', 'ChatController@getindex');

Route::get('login/{provider?}',[
    'uses' => 'LoginController@getSocialAuth',
    'as'   => 'auth.getSocialAuth'
]);


Route::get('login/callback/{provider?}',[
    'uses' => 'LoginController@getSocialAuthCallback',
    'as'   => 'auth.getSocialAuthCallback'
]);

Route::get('login/facebook', 'Auth\FacebookController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\FacebookController@handleProviderCallback');

//Route::get('profile/{id}', 'ProfileController@profile');
Route::get('tasks', 'TasksController@profile')->middleware('manager');

Route::get('shop', [
	'uses' => 'ProductController@getIndex',
	'as' => 'product.index'
]);

Route::get('add-to-cart/{id}',[
	'uses' => 'ProductController@getAddToCart',
	'as' => 'product.addToCart',
]);

Route::get('shopping-cart', [
	'uses' => 'ProductController@getCart',
	'as' => 'product.shoppingCart',
]);
Route::post('chekout',[
	'uses' => 'ProductController@postCheckout',
	'as' => 'checkout'
]);
Route::get('checkout', [
	'uses' => 'ProductController@getCheckout',
	'as' => 'checkout'
]);