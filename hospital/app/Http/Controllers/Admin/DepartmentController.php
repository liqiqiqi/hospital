<?php
namespace App\Http\Controllers\Admin;
// 接值Input
use Illuminate\Support\Facades\Input;
// 引入model
// use App\Http\Models\Admin;
use DB;  
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Request; 
use App\Http\Controllers\Controller;


class DepartmentController extends Controller{
	public function department()
	{
	    $arr=DB::table('section')->simplePaginate(5);  
	    //print_r($arr);die;
        return view('department.department',['arr'=>$arr]);
	}
	public function deAdd()
	{
        return view('department.deAdd');
	}
	public function deAddDo()
	{
		$sec_name=\Request::input('sec_name');  
		$sec_content=\Request::input('sec_content');
		// print_r($sec_content);die;       	
		$res= DB::table('section')->insert(['sec_name'=>$sec_name,'sec_content'=>$sec_content]);  
		if ($res) {
	   	return redirect('department/department');
	   	}
	}
	public function deUp()
	{
		$sec_id=\Request::input('sec_id');
		// print_r($sec_id);die;
	    $arr=DB::select("select * from section where sec_id = $sec_id");
	    // print_r($arr); 
		return view('department.deUp',['arr'=>$arr]);
	}	
	public function deUpDo()
	{
		$sec_id=\Request::input('sec_id');
		$sec_name=\Request::input('sec_name');
		$sec_content=\Request::input('sec_content');
		$ret=DB::table('section')->where(['sec_id'=>$sec_id])->update(['sec_name'=>$sec_name,'sec_content'=>$sec_content]);   
		if ($ret) {
	   	return redirect('department/department');
	   }
	}
	public function deDel()
	{
		$sec_id=\Request::input('sec_id');
		$res=DB::table('section')->where(['sec_id'=>$sec_id])->delete();
		if ($res) {
			return redirect('department/department');
		}
	}

}
