<?php
namespace App\Http\Controllers\Home;

use DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller{


	public function index()
	{
		$data = DB::table('doctor')->join('section','doctor.sec_id','=','section.sec_id')->get();
		foreach ($data as $k => $v) {
			$arr[$v->sec_name][$k]['sec_name'] = $v->sec_name;
			$arr[$v->sec_name][$k]['doc_id'] = $v->doc_id;
			$arr[$v->sec_name][$k]['doc_name'] = $v->doc_name;			
		}
		return view('home.index',['arr'=>$arr]);
	}
	

	public function doctor($doc_id)
	{
		//科室和医生的信息
		$data = DB::table('doctor')->join('section','doctor.sec_id','=','section.sec_id')->get();
		foreach ($data as $k => $v) {
			$arr[$v->sec_name][$k]['sec_name'] = $v->sec_name;
			$arr[$v->sec_name][$k]['doc_id'] = $v->doc_id;
			$arr[$v->sec_name][$k]['doc_name'] = $v->doc_name;			
			$arr[$v->sec_name][$k]['max_peo'] = $v->max_peo;
		}

		$list = DB::table('doctor')->join('work','doctor.doc_id','=','work.doc_id')->where('doctor.doc_id','=',"$doc_id")->get();
		//处理当前医生所对应的时间
		foreach ($list as $k => $v) {
			$doc_data['doc_name'] = $v->doc_name;
			$doc_data['work_date'][$k] = $v->work_date;
		}

		return view('home/doctor',['list'=>$list,'arr'=>$arr,'doc_data'=>$doc_data]);
	}


	/**
	 * 预约医生       需要从session中取出user_id，判断其是否登录
	 * @return [type] [description]
	 */
	public function order()
	{	
		$doc_id = input::get("doc_id");
		$work_date = input::get("work_date");
		if (empty($work_date)) {
			echo "<script>alert('请选择就诊时间');location.href='doctor/$doc_id'</script>";
		}
		
	}


}
