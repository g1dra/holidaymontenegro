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

Auth::routes();

Route::get('/', 'PageController@comingSoon');
Route::get('/index', 'PageController@comingSoon');
Route::get('/test', 'PageController@test');
Route::get('/faq', 'PageController@faq');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');
Route::post('/newsletter', 'PageController@subscribe');

Route::resource('/events', 'EventController');
