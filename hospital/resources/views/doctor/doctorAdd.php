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
        <ul id="dashboard-menu" class="nav nav-list collapse">
            <li ><a href="<?php echo url('admins/adminreset')?>">修改密码</a></li>
            <li ><a href="<?php echo url('admins/adminreg')?>">管理员添加</a></li>
        </ul>

        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>医院管理</a>
        <ul id="accounts-menu" class="nav nav-list collapse">
            <li ><a href="<?php echo url('info/info')?>">医院信息</a></li>
        </ul>

        <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>科室管理<i class="icon-chevron-up"></i></a>
        <ul id="error-menu" class="nav nav-list collapse">
            <li ><a href="<?php echo url('department/department')?>">科室展示</a></li>
            <li ><a href="<?php echo url('department/deAdd')?>">科室添加</a></li>
        </ul>

        <a href="#legal-menu" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>医生管理</a>
        <ul id="legal-menu" class="nav nav-list collapse">
            <li ><a href="<?php echo url('doctor/doctorAdd')?>">医生添加</a></li>
            <li ><a href="<?php echo url('doctor/doctorShow')?>">医生列表</a></li>
        </ul>

        <a href="<?php echo url('order/order')?>" class="nav-header" data-toggle="collapse"><i class="icon-question-sign"></i>预约列表</a>
       
    </div>
    

       
    <div class="content">
        
        <div class="header">
            <div class="stats">
    <p class="stat"><span class="number">53</span>tickets</p>
    <p class="stat"><span class="number">27</span>tasks</p>
    <p class="stat"><span class="number">15</span>waiting</p>
</div>

            <h1 class="page-title">添加医生</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index">医生管理</a> <span class="divider">/</span></li>
            <li class="active">添加医生</li>
        </ul>
 
<div class="breadcrumb">
    <center>
      <form action="<?= url('doctor/doctorAddDo')?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <table>
            <tr>
                <td>医生姓名：</td>
                <td><input type="text" name="doc_name"></td>
            </tr>
            <tr>
                <td>医生头像：</td>
                <td><input type="file" name="doc_img"></td>
            </tr>
            <tr>
                <td>医生电话：</td>
                <td><input type="tel" name="doc_tel"></td>
            </tr>
            <tr>
                <td>医生邮箱：</td>
                <td><input type="email" name="doc_email"></td>
            </tr>
            <tr>
                <td>请选择科室：</td>
                <td>
                  <select name="sec_id">
                    <?php foreach ($arr as $k => $v) {?>
                      <option value="<?php echo $v->sec_id?>"><?php echo $v->sec_name?></option>
                    <?php }?>
                  </select>
                </td>
            </tr>
            <tr>
                <td>最大限制人数：</td>
                <td><input type="text" name="max_peo"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="提交"></td>
            </tr>
        </table>
      </form>
        
    </center>
</div>
    </div>


    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>


