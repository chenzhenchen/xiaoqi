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

Route::group(['prefix' => 'home', 'namespace' => 'Home'],function (){
    //首页
    Route::get('index',['uses' => 'IndexController@index', 'as' => 'home.index.index']);
    //关于我们
    Route::get('about',['uses' => 'IndexController@about', 'as' => 'home.index.about']);
});
