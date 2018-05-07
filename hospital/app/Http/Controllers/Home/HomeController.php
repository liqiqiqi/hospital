<?php
namespace App\Http\Controllers\Home;
// 接值Input
// use Illuminate\Support\Facades\Input;
// 引入model
// use App\Http\Models\Home;
use App\Http\Controllers\Controller;


class HomeController extends Controller{
	public function index()
	{
		// echo 111;die;
		return view('home.index');
	}
	public function chuzhen()
	{
		// echo 111;die;
		return view('home.chuzhen');
	}
	public function jianjie()
	{
		// echo 111;die;
		return view('home.jianjie');
	}
	public function jiuzhen()
	{
		// echo 111;die;
		return view('home.jiuzhen');
	}
	public function keshi()
	{
		// echo 111;die;
		return view('home.keshi');
	}
	public function keshimx()
	{
		// echo 111;die;
		return view('home.keshimx');
	}
	public function keshiys()
	{
		// echo 111;die;
		return view('home.keshiys');
	}
	public function kexue()
	{
		// echo 111;die;
		return view('home.kexue');
	}
	public function kexuelist()
	{
		// echo 111;die;
		return view('home.kexuelist');
	}
	public function news()
	{
		// echo 111;die;
		return view('home.news');
	}
	public function newslist()
	{
		// echo 111;die;
		return view('home.newslist');
	}
	public function rongyu()
	{
		// echo 111;die;
		return view('home.rongyu');
	}
	public function ys()
	{
		// echo 111;die;
		return view('home.ys');
	}
	public function zhuanjia()
	{
		// echo 111;die;
		return view('home.zhuanjia');
	}
}
