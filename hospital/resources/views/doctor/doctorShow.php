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
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
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
                    
                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Settings</a></li>
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
                            <li><a tabindex="-1" href="sign-in.html">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="index.html"><span class="first">Your</span> <span class="second">Company</span></a>
        </div>
    </div>
    


    
     <div class="sidebar-nav">
        <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>个人中心</a>
        <ul id="dashboard-menu" class="nav nav-list collapse">
            <li><a href="media">管理员展示(不可以做任何操作)</a></li>
            <li ><a href="users.html">修改自己密码</a></li>
            <li ><a href="user.html">管理员添加</a></li>
            <li ><a href="media.html">Media</a></li>
            <li ><a href="calendar.html">Calendar</a></li>
            
        </ul>

        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>医院管理</a>
        <ul id="accounts-menu" class="nav nav-list collapse">
            <li ><a href="info">医院信息</a></li>
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
            <li ><a href="<?= url('doctor/doctorAdd')?>">添加医生</a></li>
            <li ><a href="<?= url('doctor/doctorShow')?>">医生列表</a></li>
        </ul>

        <a href="help.html" class="nav-header" ><i class="icon-question-sign"></i>预约管理</a>
    </div>

    
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">医生列表</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="">医生管理</a> <span class="divider">/</span></li>
            <li class="active">医生列表</li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
                    
<div class="btn-toolbar">
    <a href="<?= url('doctor/doctorAdd')?>"><button class="btn btn-primary"><i class="icon-plus"></i> 添加医生</button></a>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>姓名</th>
          <th>头像</th>
          <th>电话</th>
          <th>邮箱</th>
          <th>科室</th>
          <th style="width: 26px;"></th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($arr as $k => $v) {?>
          <tr>
            <td><?php echo $v->doc_id ?></td>
            <td><?php echo $v->doc_name ?></td>
            <td><img src="<?php echo $v->doc_img?>" alt="" width="150px" height="100px"></td>
            <td><?php echo $v->doc_tel ?></td>
            <td><?php echo $v->doc_email ?></td>
            <td><?php echo $v->sec_name ?></td>
            <td>
                <a href="<?= url('doctor/workDate')?>?doc_id=<?= $v->doc_id ?>"><i class="glyphicon glyphicon-time"></i></a>
                <a href="<?= url('doctor/doctorUpdate')?>?doc_id=<?= $v->doc_id ?>"><i class="icon-pencil"></i></a>
                <span style="cursor:pointer" doc_id = "<?= $v->doc_id?>" class="del"><i class="icon-remove"></i></span>
            </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
</div>
<!-- <div class="pagination">
    <ul>
        <li><a href="#">Prev</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">Next</a></li>
    </ul>
</div> -->

<!-- <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
    </div>
</div>
 -->

                    
                    <footer>
                        <hr>

                        
                        <p class="pull-right">Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>

                        <p>&copy; 2012 <a href="#" target="_blank">Portnine</a></p>
                    </footer>
                    
            </div>
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
<script src="jquery-3.2.1.min.js"></script>
<script>
    $(document).on("click",".del",function(){
        var doc_id = $(this).attr("doc_id");
        _this = $(this)
        $.ajax({
            type:"get",
            url:"<?php echo url('doctor/doctorDel')?>",
            data:{doc_id:doc_id},
            success:function(msg){
                if (msg == 1) {
                   _this.parent().parent().remove() 
                }
            }
        })
    })
</script>


