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
    // $str = ReflectionFunction::export('response', 1);
    $str = ReflectionClass::export('Cookie', 1);
    return $str;
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/check', 'WxController@check');

Route::post('/notify', 'WxController@notify');
