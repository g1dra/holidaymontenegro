<?php
use Illuminate\Support\Facades\Redis;
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
    Redis::set('test2','test2');
    return view('coming-soon');
});

Route::get('/index', function (){
    return view('coming-soon');
});

Route::post('/newsletter', 'PageController@subscribe');
//
//Route::post('/newsletter', function (){
//    dd($_POST);
//    Redis::set('test','test');
//    return response()->json('success');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

