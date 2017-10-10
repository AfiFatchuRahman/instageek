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

Route::get('/', function(){
	$user = new App\Models\User();
	$user->name 	= 'Rizka Yuni Hapsari';
	$user->username = 'Rizka';
	$user->email	= 'hapsaririzka@gmail.com';
	$user->password	= bcrypt('password');
	$user->save();
});
//Route::get('/bio', 'BioController@show');
