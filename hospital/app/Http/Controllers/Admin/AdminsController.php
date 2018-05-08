<?php
namespace App\Http\Controllers\Admin;
use DB;
use App\Http\Requests\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Session\Session;
// 引入model
// use App\Http\Models\Admin;

class AdminsController extends Controller{
   
	public  function reset()
	{
		return view('admins.adminreset');
	}
	public  function reg()
	{
		return view('admins.adminreg');
	}
    public function add()
    {
    	//echo "666666";die;
    	$admin_name=$_POST['admin_name'];  
        $admin_pwd=$_POST['admin_pwd'];  
        //print_r($admin_name);print_r($admin_pwd);die; 
        $re = DB::table('admin')->pluck('admin_name');
        $r=in_array($admin_name,$re);
        if($r)
        {
          echo "<script type='text/javascript'>alert('账号已存在');location='javascript:history.back()';</script>";
        }
        else
        {
	        //print_r($re);die;
	        $res=DB::table('admin')->insert(['admin_name'=>$admin_name,'admin_pwd'=>MD5($admin_pwd)]);  
	        if($res)
	        {
	           return redirect('admin/index');
	        }
	        else
	        {
	           return redirect('admins/reg');
	        }  
        } 
    }
    public function pwdedit()
    {
    	$session=new Session;
        $admin_id=$session->get('admin_id');
        //print_r($admin_id);die;
        $data = input::get();
        $pwd0=$data['admin_pwd0'];
        $pwd=$data['admin_pwd'];
        $pwd1=$data['admin_pwd1'];
        //print_r($pwd);die;
        $admin_info =Db::table('admin')->where('admin_id','=',$admin_id)->first(); 
        $admin_pwd=$admin_info->admin_pwd;
        //print_r($admin_pwd);die;
        if($data)
        {
            if((md5($pwd0))== $admin_pwd)
            {
                if($pwd==$pwd1)
                {
                    $md5_password = md5($pwd);
                    $result =DB::update('update admin set admin_pwd= ? where admin_id = ?', [$md5_password, $admin_id]);
                    if($result)
                    {
                        echo "<script type='text/javascript'>alert('修改成功');location='javascript:history.back()';</script>";
                    }    
                    else
                    {
                        echo "<script type='text/javascript'>alert('修改失败');location='javascript:history.back()';</script>";
                    }     
                }
                else
                {
                    echo "<script type='text/javascript'>alert('两次新密码输入不一致');location='javascript:history.back()';</script>";
                }
            }
            else
            {
                echo "<script type='text/javascript'>alert('原密码输入错误');location='javascript:history.back()';</script>";
            }
        }
        else
        {
            echo "<script type='text/javascript'>alert('错误');location='javascript:history.back()';</script>";
        }
    }
}
