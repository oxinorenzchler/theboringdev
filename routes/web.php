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
    return view('index');
});

// Route::view('/project', 'pages.project_page');
Route::view('/about', 'pages.about');

Auth::routes();

Route::fallback(function(){
	abort(404);
});

Route::view('dashboard','auth.dashboard');


$this->get('secured-admin-login', 'Auth\LoginController@showLoginForm')->name('login');

Route::group(['middleware' => 'auth'], function(){

	Route::resource('projects', 'ProjectController');

	Route::resource('messages', 'MessageController');

});

Route::resource('messages', 'MessageController')->only(['store']);

Route::resource('projects', 'ProjectController')->only(['index','show']);