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