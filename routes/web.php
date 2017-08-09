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
  $str = ReflectionFunction::export('app', 1);
  // $str = Config::get('wx.AppID');

  $str = App::environment();


  return $str;
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/check', 'WxController@check');

Route::post('/notify', 'WxController@notify');
