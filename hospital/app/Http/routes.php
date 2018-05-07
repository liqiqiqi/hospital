<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('welcome');
});
Route::any('home/index', 'Home\HomeController@index');
// Route::any('home/chuzhen', 'Home\HomeController@chuzhen');
// Route::any('home/jianjie', 'Home\HomeController@jianjie');
// Route::any('home/jiuzhen', 'Home\HomeController@jiuzhen');
// Route::any('home/keshi', 'Home\HomeController@keshi');
// Route::any('home/keshimx', 'Home\HomeController@keshimx');
// Route::any('home/keshiys', 'Home\HomeController@keshiys');
// Route::any('home/kexue', 'Home\HomeController@kexue');
// Route::any('home/kexuelist', 'Home\HomeController@kexuelist');
// Route::any('home/news', 'Home\HomeController@news');
// Route::any('home/newslist', 'Home\HomeController@newslist');
// Route::any('home/rongyu', 'Home\HomeController@rongyu');
// Route::any('home/ys', 'Home\HomeController@ys');
// Route::any('home/zhuanjia', 'Home\HomeController@zhuanjia');
Route::any('admin/index', 'Admin\AdminController@index');