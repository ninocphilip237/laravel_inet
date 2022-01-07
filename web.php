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
    return view('hello');
});
Route::post('jibina',['uses'=>'controllpage@kalthotty']);
Route::get('display',['uses'=>'controllpage@kaloor']);
Route::get('edit&{id}',['uses'=>'controllpage@vytila']);
Route::post('update&{id}',['uses'=>'controllpage@kochi']);
Route::get('delete&{id}',['uses'=>'controllpage@tvm']);

Route::get('login',['uses'=>'controllpage@goa']);
Route::post('jack',['uses'=>'controllpage@amal']);
Route::get('userhome',['uses'=>'controllpage@anand']);
Route::get('logout',['uses'=>'controllpage@logouts']);