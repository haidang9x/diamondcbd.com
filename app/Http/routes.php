<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/affiliate-program.htm', function () {
    return view('affiliate-program');
})->name('affRegist');
Route::post('/affiliate-register', ['uses' => 'IndexController@affRegist']);