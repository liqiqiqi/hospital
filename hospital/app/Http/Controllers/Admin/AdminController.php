<?php
namespace App\Http\Controllers\Admin;
// 接值Input
// use Illuminate\Support\Facades\Input;
// 引入model
// use App\Http\Models\Admin;
use App\Http\Controllers\Controller;


class AdminController extends Controller{
	public function index()
	{
		// echo 111;die;
		return view('admin.index');
	}

}
