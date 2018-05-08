<?php
namespace App\Http\Controllers\Admin;
use DB;
//use App\Http\Requests\Request;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Storage;//文件上传

class DoctorController extends Controller{

	/**
	 * 医生的添加页面
	 * @return [type] [description]
	 */
	public function doctorAdd()
	{
		//科室
		$arr=DB::table('section')->get();  
		return view("doctor.doctorAdd",['arr'=>$arr]);
	}

	/**
	 * 执行添加
	 * @return [type] [description]
	 */
	public function doctorAddDo()
	{
		$doc_name = input::get("doc_name");
		$doc_tel = input::get("doc_tel");
		$doc_email = input::get("doc_email");
		$max_peo = input::get("max_peo");
		$sec_id = input::get("sec_id");
		$doc_img = input::file("doc_img");
		//文件上传
		if($doc_img->isValid()){
				$originalName = $doc_img->getClientOriginalName();
                //扩展名
                $ext = $doc_img->getClientOriginalExtension();
                //MimeType
                $type = $doc_img->getClientMimeType();
                //临时绝对路径
                $realPath = $doc_img->getRealPath();
                $filename = uniqid().'.'.$ext;
              	//  print_r($filename);die;
                $bool = Storage::disk('uploads')->put($filename,file_get_contents($realPath));
                $path = "../uploads/".$filename;
	    }
	    $res = DB::table('doctor')->insert(array('doc_name'=>$doc_name,'doc_tel'=>$doc_tel,'doc_email'=>$doc_email,'max_peo'=>$max_peo,'sec_id'=>$sec_id,'doc_img'=>$path));
	   if ($res) {
	   		return redirect('doctor/doctorShow');
	   }
	    
	}


	/**
	 * 医生列表
	 * @return [type] [description]
	 */
	public function doctorShow()
	{

		$arr=DB::select("select * from doctor inner join section on doctor.sec_id = section.sec_id");
        return view('doctor.doctorShow',['arr'=>$arr]);
	}

	/**
	 * 删除
	 * @return [type] [description]
	 */
	public function doctorDel()
	{
		$doc_id = input::get("doc_id");
		$res = DB::table('doctor')->where(['doc_id'=>$doc_id])->delete(); 
		if ($res) {
			$re = DB::table('work')->where(['doc_id'=>$doc_id])->delete(); 
			echo 1;
		}else{
			echo 0;
		}
	}

	/**
	 * 医生修改
	 * @return [type] [description]
	 */
	public function doctorUpdate()
	{
		$doc_id = input::get("doc_id");
		$arr=DB::select("select * from doctor inner join section on doctor.sec_id = section.sec_id where doc_id = '$doc_id'");
		$sec = DB::table("section")->get();
        return view('doctor.doctorUpdate',['arr'=>$arr,'sec'=>$sec]);
	}

	/**
	 * 执行修改
	 * @return [type] [description]
	 */
	public function doctorUpDo()
	{
		$doc_id = input::get("doc_id");
		$doc_name = input::get("doc_name");
		$doc_tel = input::get("doc_tel");
		$doc_email = input::get("doc_email");
		$max_peo = input::get("max_peo");
		$sec_id = input::get("sec_id");
		$doc_img = input::file("doc_img");
		//var_dump($doc_img);die;
		//文件上传
		if($doc_img->isValid()){
				$originalName = $doc_img->getClientOriginalName();
                //扩展名
                $ext = $doc_img->getClientOriginalExtension();
                //MimeType
                $type = $doc_img->getClientMimeType();
                //临时绝对路径
                $realPath = $doc_img->getRealPath();
                $filename = uniqid().'.'.$ext;
              	//  print_r($filename);die;
                $bool = Storage::disk('uploads')->put($filename,file_get_contents($realPath));
                $path = "../uploads/".$filename;
	    }
	    $arr=DB::table('doctor')->where(['doc_id'=>$doc_id])->update(['doc_name'=>$doc_name,'doc_tel'=>$doc_tel,'doc_email'=>$doc_email,'max_peo'=>$max_peo,'sec_id'=>$sec_id,'doc_img'=>$path]);  
        if($arr){  
            return redirect('doctor/doctorShow');  
        } 
	}

	/**
	 * 工作时间的添加
	 * @return [type] [description]
	 */
	public function workDate()
	{
		$doc_id = input::get("doc_id");
		$arr=DB::select("select * from doctor where doc_id= '$doc_id'");
		return view('doctor.workDate',['arr'=>$arr]);
	}

	/**
	 * 设置工作时间
	 * @return [type] [description]
	 */
	public function workDateSet()
	{
		$doc_id = input::get("doc_id");
		$work_date = input::get("work_date");
		foreach ($work_date as $key => $value) {
			$res = DB::table("work")->insert(['doc_id'=>$doc_id,'work_date'=>$value]);
		}
		if ($res) {
			return redirect("doctor/doctorShow")->with("设置成功");
		}else{
			echo "<script>alert('设置失败');</script>";
		}
	}








}
