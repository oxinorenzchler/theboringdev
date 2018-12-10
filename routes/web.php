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

Route::view('dashboard','auth.dashboard');

Route::group(['middleware' => 'auth'], function(){

	Route::resource('projects', 'ProjectController');

});

Route::resource('projects', 'ProjectController')->only(['index','show']);