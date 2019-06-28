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
    //团队管理
    Route::get('board',['uses' => 'IndexController@board', 'as' => 'home.index.board']);
    //高级管理层
    Route::get('leader',['uses' => 'IndexController@leader', 'as' => 'home.index.leader']);
    //设计及项目团队
    Route::get('designer',['uses' => 'IndexController@designer', 'as' => 'home.index.designer']);
});
