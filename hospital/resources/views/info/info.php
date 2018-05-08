
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
                            <i class="icon-user"></i> Jack Smith
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">My Account</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="sign-in">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="index"><span class="first">Our</span> <span class="second">Hospital</span></a>
        </div>
    </div>
    


    
    <div class="sidebar-nav">
        <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>个人中心</a>
        <ul id="dashboard-menu" class="nav nav-list collapse">
            <li ><a href="1">1</a></li>
            <li ><a href="1">1</a></li>
            
        </ul>

        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>医院管理</a>
        <ul id="accounts-menu" class="nav nav-list collapse">
            <li ><a href="<?= url('info/info')?>">医院信息</a></li>
        </ul>

        <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>科室管理</a>
        <ul id="error-menu" class="nav nav-list collapse">
            <li ><a href="<?= url('department/department')?>">科室展示</a></li>
            <li ><a href="<?= url('department/deAdd')?>">科室添加</a></li>
        </ul>

        <a href="#legal-menu" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>医生管理</a>
        <ul id="legal-menu" class="nav nav-list collapse">
            <li ><a href="1">1</a></li>
            <li ><a href="1">1</a></li>
        </ul>

        <a href="help" class="nav-header" ><i class="icon-question-sign"></i>预约管理</a>
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
            <li><a href="<?= url('info/info')?>">Info</a> <span class="divider">/</span></li>
            <li class="active">Info</li>
        </ul>
<div class="breadcrumb">
    <center>
        <table>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                <input type="hidden" name="hos_id" value="<?php echo $arr[0]->hos_id?> ">
            <tr>
                <td>医院名称：</td>
                <td><input disabled="none" type="text" name="hos_name" value="<?php echo $arr[0]->hos_name?>"></td>
            </tr>
            <tr>
                <td>医院地址：</td>
                <td><input disabled="none" type="text" name="hos_address" value="<?php echo $arr[0]->hos_address?> "></td>
            </tr>
            <tr>
                <td>医院版权：</td>
                <td><input disabled="none" type="text" name="hos_legal" value="<?php echo $arr[0]->hos_legal?>"></td>
            </tr>
            <tr>
                <td>医院首页：</td>
                <td><input disabled="none" type="text" name="hos_url" value="<?php echo $arr[0]->hos_url?>"><font size="1px"><a href="<?php echo $arr[0]->hos_url?>">点这里跳转</a></font></td>
            </tr>
            <tr>
                <td>医院logo：</td>
                <td><img src="<?php echo $arr[0]->hos_img?>" alt="" width="120px" height="70px"></td>
            </tr>
            <tr>
                <td>紧急联系：</td>
                <td><input disabled="none" type="text" name="hos_tel" value="<?php echo $arr[0]->hos_tel?> "></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="infoUp">点击修改部分信息</a></td>
            </tr>
        </table>
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


