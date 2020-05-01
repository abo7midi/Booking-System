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

  Config::set('auth.defines','admin');
 Route::get('login','AdminAuth@login');
 Route::get('forget/password','AdminAuth@forget_password');
 Route::post('forget/password','AdminAuth@forget_password_post');
    Route::post('login','AdminAuth@dologin');
  Route::group(['middleware'=>'admin:admin'],function (){
        Route::resource('users','UserController');
        Route::get('/',function (){
           return view('admin.home');
        });
        Route::any('logout','AdminAuth@logout');

          });
});
