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
                    
                </ul>
                <a class="brand" href="index.html"><span class="first">Your</span> <span class="second">Hospital</span></a>
        </div>
    </div>
    


    

    
<div class="row-fluid">
    <div class="dialog">
        <div class="block">
            <p class="block-heading">登录</p>
            <div class="block-body">
                <form action="<?php echo url('login/login_do')?>" method="post" onsubmit="return sub()">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                    <label>账号</label>
                    <input type="text" class="span12" id="user" name="admin_name" value="" onblur='checkname();' placeholder="输入账号"><span></span>
                    <label>密码</label>
                    <input type="password" class="span12" id="pwd" name="admin_pwd" value="" onblur='checkpwd();' placeholder="输入密码"><span></span>
                    <label>验证码</label>
                    <td><input type="text" name="code" class="span12" value="" id='code' onblur="checkcode()"><span></span><br/><img id="imgcode" src='img.php'> 
                    <input type="submit" value="登录"  class="btn btn-primary pull-right">
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

 <script>
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

       var obj = document.getElementById("pwd");
       if(obj.value==""){
            obj.nextSibling.innerHTML='<em style="color:red;">密码不能为空</em>';
            return false;
       }
       
       obj.nextSibling.innerHTML='';
       return true;
    }
   function checkcode(){
        var obj=document.getElementById("code");
        if(obj.value==""){
            obj.nextSibling.innerHTML='<em style="color:red;">验证码不能为空</em>';
            return false;
       }
       
       obj.nextSibling.innerHTML='';
       return true;
    }
    function sub(){
         if(checkname()&&checkpwd()&&checkcode()){
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
        $("#imgcode").click(function(){  
        d=new Date();  
        $("#imgcode").attr("src","./img.php?"+d.getTime());  
        })  
    </script>

    
  </body>
</html>


