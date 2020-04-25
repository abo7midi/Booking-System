<?php

use Illuminate\Support\Facades\Route;
use  \Illuminate\Support\Facades\Config;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
  Config::set('auth.default','admain');
 Route::get('login','AdminAuth@login');
    Route::post('login','AdminAuth@dologin');
  Route::group(['middleware'=>'admin'],function (){


Route::get('/',function (){
   return view('admin.home');
});

  });
});
