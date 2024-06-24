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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'welcome';
});


Route::get('/landing', function () {
    return view('loading');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('index', 'Front\UserController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


Route::get('/', function (){
    return 'Home';
});

Route::get('/dashboard', function (){
    return 'dashboard';
});
