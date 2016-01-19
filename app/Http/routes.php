<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

//博文内容
Route::get('posts/show/{id}', 'PostsController@show')
    ->where('id','[\d]+');

//留言提交
Route::post('comment/store', 'CommentsController@store');

//
//Route::controllers([
//    'admin' => 'Admin\AdminController@index'
//]);

//Route::get('/admin', 'Admin\AdminController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
    'admin' => 'Admin\AdminController',
]);

