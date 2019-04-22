<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/affiliate-program.htm', function () {
    return view('affiliate-program');
})->name('affRegist');
//Route::post('/affiliate-register', ['uses' => 'IndexController@affRegist']);
Route::get('/user/login.htm', function(){
	if (Auth::check()) return Redirect::route('user'); 
	return view('user.login');
})->name('login');
Route::get('/user/register.htm', function(){
	if (Auth::check()) return Redirect::route('user'); 
	return view('user.register');
})->name('register');
Route::get('/user', 'UserController@get')->name('user');
Route::post('/user', 'UserController@changePass');
Route::get('/user/orders', 'UserController@order');

Route::post('/affiliate-program.htm', '\App\Http\Controllers\Auth\RegisterController@register');
Route::post('/user/register.htm', '\App\Http\Controllers\Auth\RegisterController@register');
Route::post('/user/login.htm', '\App\Http\Controllers\Auth\LoginController@login');
Route::get('/user/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('users/confirmation/{token}', 'Auth\RegisterController@confirmation')->name('confirmation');
//Route::auth();
//hop tac
Route::get('/thuhoptac', 'HoptacController@index');
Route::post('/thuhoptac', 'HoptacController@postEmail');


Route::get('/home', 'HomeController@index');
