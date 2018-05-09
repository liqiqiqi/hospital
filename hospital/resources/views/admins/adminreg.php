<?php
use Symfony\Component\HttpFoundation\Session\Session;
$session=new Session;
$admin_name=$session->get('admin_name');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> <?php echo $admin_name;?>
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">My Account</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="<?php echo url('admin/logout')?>">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="index"><span class="first">Our</span> <span class="second">Hospital</span></a>
        </div>
    </div>
    


    
    <div class="sidebar-nav">
        <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>个人中心</a>
        <ul id="dashboard-menu" class="nav nav-list collapse in">
            <li ><a href="<?php echo url('admins/adminreset')?>">修改密码</a></li>
            <li ><a href="<?php echo url('admins/adminreg')?>">管理员添加</a></li>
        </ul>

        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>医院管理</a>
        <ul id="accounts-menu" class="nav nav-list collapse">
            <li ><a href="sign-in.html">Sign In</a></li>
             <li ><a href="sign-up.html">Sign Up</a></li>
            <li ><a href="reset-password.html">Reset Password</a></li>
        </ul>

        <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>科室管理<i class="icon-chevron-up"></i></a>
        <ul id="error-menu" class="nav nav-list collapse">
            <li ><a href="403">403 page</a></li>
            <li ><a href="404.html">404 page</a></li>
            <li ><a href="500.html">500 page</a></li>
            <li ><a href="503.html">503 page</a></li>
        </ul>

        <a href="#legal-menu" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>医生管理</a>
        <ul id="legal-menu" class="nav nav-list collapse">
            <li ><a href="privacy-policy.html">Privacy Policy</a></li>
            <li ><a href="terms-and-conditions.html">Terms and Conditions</a></li>
        </ul>

        <a href="help.html" class="nav-header" ><i class="icon-question-sign"></i>预约管理</a>
    </div>
    

    
    <div class="content">
        
        <div class="header">
            <div class="stats">
    <p class="stat"><span class="number">53</span>tickets</p>
    <p class="stat"><span class="number">27</span>tasks</p>
    <p class="stat"><span class="number">15</span>waiting</p>
</div>

            <h1 class="page-title">后台</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="<?php echo url('admin/index')?>">首页</a> <span class="divider">/</span></li>
            <li class="active">添加管理</li>
        </ul>
        <div class="breadcrumb">
            <div class="row-fluid">
                <div class="dialog">
                    <div class="block">
                        <p class="block-heading">添加管理员</p>
                        <div class="block-body">
                            <form action="<?php echo url('admins/add')?>" method="post" onsubmit="return sub()">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                                <label>账号</label>
                                <input type="text" class="span12" id="user" name="admin_name" value="" onblur='checkname();' onkeyup="value=value.replace(/[^\a-zA-Z\u4E00-\u9FA5]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\a-zA-Z\u4E00-\u9FA5]/g,''))" placeholder="输入账号"><span></span>
                                <label>密码</label>
                                <input type="password" class="span12" id="pwd" name="admin_pwd" value="" onblur='checkpwd();' onkeyup="value=value.replace(/\s/g,'')" placeholder="输入密码"><span></span>
                                <label>确认密码</label>
                                <input type="password" class="span12" id="pwd1" name="admin_pwd1" value="" onblur="checkpwd1();" onkeyup="value=value.replace(/\s/g,'')" placeholder="再次输入密码"><span></span>
                                <input type="submit" value="添加"  class="btn btn-primary pull-right">
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    <script>
    // var validate={
    //     'checkname':false,
    //     'checkpwd':false,
    //     'checkpwd1':false
    // };
    function checkname(){
       var obj = document.getElementById("user");
       if(obj.value==""){
            obj.nextSibling.innerHTML='<em style="color:red;">账号不能为空</em>';
            return false;
       }
       
       obj.nextSibling.innerHTML='';
       return true;
    }
    function checkpwd(){

var pwd = document.getElementById('pwd').value.trim(); 

       var obj = document.getElementById("pwd");
       if(obj.value==""){
            obj.nextSibling.innerHTML='<em style="color:red;">密码不能为空</em>';
            return false;
       }
       
       obj.nextSibling.innerHTML='';
       return true;
    }
   function checkpwd1(){
       var obj = document.getElementById("pwd");
       var obj1 = document.getElementById("pwd1");
       if(obj1.value==""){
            obj1.nextSibling.innerHTML='<em style="color:red;">确认密码不能为空</em>';
            return false;
       }else{
           if(obj.value!=obj1.value){
                obj1.nextSibling.innerHTML='<em style="color:red;">密码不一致</em>';
                return false;
            }else{
                obj1.nextSibling.innerHTML='';
                return true;
            }
       }
      
       obj1.nextSibling.innerHTML='';
       return true;
    }
    function sub(){
        // checkname();
        // checkpwd();
        // checkpwd1();
         if(checkname()&&checkpwd()&&checkpwd1()){
            return true;
        }else{
            return false;
        }
    }
</script>


    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>


