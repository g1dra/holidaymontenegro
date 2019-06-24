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
    return view('coming-soon');
});

Route::get('/index', function (){
    return view('coming-soon');
});

Route::post('/newsletter', function (){
    return response()->json('success');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

