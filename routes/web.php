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


Route::group(['namespace'=>'Home'],function (){
    Route::get('/',['uses'=>'IndexController@index']); //前台首页
    Route::get('home/index/vue',['uses'=>'IndexController@vue']); //前台首页

});
