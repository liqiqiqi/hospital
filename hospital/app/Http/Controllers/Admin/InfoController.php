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


class InfoController extends Controller{
	public function info()
	{
	    $arr=DB::table('hospital')->get();  
	    // print_r($arr);
	    if ($arr) {
        	return view('info.info',['arr'=>$arr]);
	    } else {
	    	return view('info.infoAdd');
	    }
	    
	}	
	public function infoAdd()
	{
		$hos_name=\Request::input('hos_name');  
		$hos_legal=\Request::input('hos_legal');  
		$hos_address=\Request::input('hos_address');  
		$hos_url=\Request::input('hos_url');  
		$hos_tel=\Request::input('hos_tel');  
		$hos_img=\Request::file('hos_img'); 
		if($hos_img->isValid()){
		$originalName = $hos_img->getClientOriginalName();
        //扩展名
        $ext = $hos_img->getClientOriginalExtension();
        //MimeType
        $type = $hos_img->getClientMimeType();
        //临时绝对路径
        $realPath = $hos_img->getRealPath();
        $filename = uniqid().'.'.$ext;
        //  print_r($filename);die;
        $bool = Storage::disk('uploads')->put($filename,file_get_contents($realPath));
        $path = "../uploads/".$filename;
	    }
		// print_r($hos_name);die;
      	$res= DB::table('hospital')->insert(['hos_name'=>$hos_name,'hos_legal'=>$hos_legal,'hos_address'=>$hos_address,'hos_url'=>	$hos_url,'hos_tel'=>$hos_tel,'hos_img'=>$path]);  
		if ($res) {
	   	return redirect('info/info');
	   	}
	}	
	public function infoUp()
	{
	    $arr=DB::table('hospital')->get();  
		return view('info.infoUp',['arr'=>$arr]);
	}
	public function infoUpdo()
	{
		$hos_id=\Request::input('hos_id'); 
		$hos_name=\Request::input('hos_name');
		$hos_legal=\Request::input('hos_legal');
		$hos_address=\Request::input('hos_address');
		$hos_url=\Request::input('hos_url');
		$hos_tel=\Request::input('hos_tel');
		$hos_img=\Request::file('hos_img');
		// print_r($hos_name);
		// print_r($hos_legal);die;
		if($hos_img->isValid()){
		$originalName = $hos_img->getClientOriginalName();
        //扩展名
        $ext = $hos_img->getClientOriginalExtension();
        //MimeType
        $type = $hos_img->getClientMimeType();
        //临时绝对路径
        $realPath = $hos_img->getRealPath();
        $filename = uniqid().'.'.$ext;
        //  print_r($filename);die;
        $bool = Storage::disk('uploads')->put($filename,file_get_contents($realPath));
        $path = "../uploads/".$filename;
	    }
		// print_r($hos_id);die;
		$ret=DB::table('hospital')->where(['hos_id'=>$hos_id])->update(['hos_name'=>$hos_name,'hos_legal'=>$hos_legal,'hos_address'=>$hos_address,'hos_url'=>$hos_url,'hos_tel'=>$hos_tel,'hos_img'=>$path]);   
		if ($ret) {
	   	return redirect('info/info');
	   }
	}

}
