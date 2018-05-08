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
<<<<<<< HEAD
Route::any('admin/index', 'Admin\AdminController@index');

//李琪
Route::any('doctor/doctorAdd', 'Admin\DoctorController@doctorAdd');
Route::any('doctor/doctorAddDo', 'Admin\DoctorController@doctorAddDo');
Route::any('doctor/doctorShow', 'Admin\DoctorController@doctorShow');
Route::any('doctor/doctorDel', 'Admin\DoctorController@doctorDel');
Route::any('doctor/doctorUpdate', 'Admin\DoctorController@doctorUpdate');
Route::any('doctor/doctorUpDo', 'Admin\DoctorController@doctorUpDo');
Route::any('doctor/workDate', 'Admin\DoctorController@workDate');
Route::any('doctor/workDateSet', 'Admin\DoctorController@workDateSet');
=======
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
Route::any('info/info', 'Admin\InfoController@info');
Route::any('info/infoAdd', 'Admin\InfoController@infoAdd');
Route::any('info/infoUp', 'Admin\InfoController@infoUp');
Route::any('info/infoUpdo', 'Admin\InfoController@infoUpdo');
Route::any('department/department', 'Admin\DepartmentController@department');
Route::any('department/deAdd', 'Admin\DepartmentController@deAdd');
Route::any('department/deAddDo', 'Admin\DepartmentController@deAddDo');
Route::any('department/deUp', 'Admin\DepartmentController@deUp');
Route::any('department/deUpDo', 'Admin\DepartmentController@deUpDo');
Route::any('department/deDel', 'Admin\DepartmentController@deDel');
>>>>>>> 8d4ecbcfe95b338b9bd92f29524d73944da49307
