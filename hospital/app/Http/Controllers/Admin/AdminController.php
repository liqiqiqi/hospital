<?php
namespace App\Http\Controllers\Admin;
use DB;
use App\Http\Requests\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Session\Session;
use Closure;
//use Session;
//use App\Http\Controllers\Admin\Auth;
//use App\Http\Controllers\Admin\Redirect;
class AdminController extends Controller{
 
	public function index()
	{
	  $session=new Session;
      $admin_name=$session->get('admin_name');
      if($admin_name == NULL)
      { 
        return Redirect('login\login');
      }
	  return view('admin.index');
	}
	public function Logout()
    {
	    $session=new Session;
        $admin_id=$session->get('admin_id');
        $admin_name=$session->get('admin_name');
        session_destroy();
        return Redirect('login\login');
    }


}
