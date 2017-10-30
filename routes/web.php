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

Route::get('/', 'DefaultController@index')->name('default');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/create', 'UploadController@index')->name('upload');

Route::get('/p/{post_id}', 'PostController@show')->name('post');

Route::post('comment', 'CommentController@store')->name('comment');

Route::post('like', 'LikeController@store')->name('like');

Route::post('dislike', 'LikeController@destroy')->name('dislike');

Route::post('follow', 'FollowController@store')->name('follow');

Route::post('unfollow', 'FollowController@destroy')->name('unfollow');

Route::post('upload', 'UploadController@store');

Route::get('/{username}', 'UserController@show')->name('profile');