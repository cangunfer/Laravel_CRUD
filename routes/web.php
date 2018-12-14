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
    return view('welcome');
});
Route::get('/Home/index','HomeController@index');
Route::get('/Home/Create','HomeController@create');
Route::get('/Home/delete/{id}','HomeController@destroy');
Route::get('/Home/edit/{id}','HomeController@edit');
Route::post('/Home/update/{id}','HomeController@update');
Route::post('/Home/Store','HomeController@store');