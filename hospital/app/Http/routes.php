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


Route::any('admin/logout', 'Admin\AdminController@logout');
Route::any('admins/adminreset', 'Admin\AdminsController@reset');
Route::any('admins/adminreg', 'Admin\AdminsController@reg');
Route::any('admins/add', 'Admin\AdminsController@add');
Route::any('admins/pwdedit', 'Admin\AdminsController@pwdedit');
Route::any('login/login', 'Admin\LoginController@login');
Route::any('login/login_do', 'Admin\LoginController@login_do');

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

