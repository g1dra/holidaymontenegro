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

Route::get('/', 'PageController@home');
Route::get('/home', 'PageController@home');
Route::get('/index', 'PageController@comingSoon');
Route::get('/rent_a_car', 'PageController@rent_a_car');
Route::get('/transfers', 'PageController@transfers');
Route::get('/apartments', 'PageController@apartments');
Route::get('/faq', 'PageController@faq');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');
Route::get('/test', 'PageController@test');
Route::post('/newsletter', 'PageController@subscribe');
Route::post('/send-mail', 'PageController@sendMail');


Route::resource('/events', 'EventController');

