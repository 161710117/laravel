<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
	return '<h1>Halo</h1>'
	.'Selamat datang di webapp saya<br>'
	.'Laravel, oh laravel.';
});


Route::get('kantin/{kilai}/{b}/{c}', function ($a,$b,$c) {
	return '<h1>Makannya '.$a.'</h1>'
	.'<h1>Minumnya '.$b.'</h1>'
	.'<h1>Ngemilnya '.$c.'</h1>';
});

Route::get('user/{nama}', function($a = "Wakwaw") {
	return $a;
});