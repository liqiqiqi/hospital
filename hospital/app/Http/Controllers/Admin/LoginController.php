<?php
namespace App\Http\Controllers\Admin;
use DB;
use App\Http\Requests\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Session\Session;
// 引入model
// use App\Http\Models\Admin;

class LoginController extends Controller{

    public function login()
    {
        return view('login.login');
    }
    public function login_do()
    {   
        $admin_name=$_POST['admin_name'];  
        $admin_pwd=md5($_POST['admin_pwd']);
        $code=$_POST['code'];
        session_start();
        $userInfo=Db::table('admin')->where('admin_name','=',$admin_name)->first();
        //var_dump($userInfo->admin_name);die;
        $pwd=$userInfo->admin_pwd;
        $admin_id=$userInfo->admin_id;
        if($_SESSION['vode'] == $code)
        {
            if ($userInfo && $pwd === $admin_pwd) 
            { 
                $session = new Session;
                $session->set('admin_id',$admin_id);
                $session->set('admin_name',$admin_name);
                return redirect('admin/index');
            }
            else
            {
                echo "<script type='text/javascript'>alert('登录失败');location='javascript:history.back()';</script>";
            } 
        }
        else
        {
            echo "<script type='text/javascript'>alert('验证码有误');location='javascript:history.back()';</script>";
        }
    }
}
?>