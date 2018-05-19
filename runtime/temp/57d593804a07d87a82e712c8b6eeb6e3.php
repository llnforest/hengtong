<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\publics\login.php";i:1524785424;s:68:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\layouts\main.php";i:1524785424;s:70:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\publics\topCss.php";i:1524785424;s:72:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\publics\bottomJs.php";i:1524785424;}*/ ?>


<!DOCTYPE html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8"/>
    <title><?php echo isset($navTabs['title'])?$navTabs['title']:'后台管理系统'?></title>

    <link href="__PublicAdmin__/css/bootstrap.min.css?<?php echo \think\Config::get('version_time'); ?>" rel="stylesheet">
<link href="__PublicAdmin__/layui/css/layui.css?<?php echo \think\Config::get('version_time'); ?>" rel="stylesheet">
<link href="__PublicAdmin__/css/site.css?<?php echo \think\Config::get('version_time'); ?>" rel="stylesheet">
<script src="__PublicAdmin__/js/jquery.min.js?<?php echo \think\Config::get('version_time'); ?>"></script>
</head>
<body>
    <div class="container-fluid">
        <div id="alert"></div>
        
<style>
    body {
        background-color: #c3cdda;
        background: url(__PublicAdmin__/images/login_bg.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    .m-login { width:340px;background-color:#fafafa; position:absolute; left:50%; top:50%; margin-left:-170px; margin-top:-120px; box-shadow: 0 0 10px #333;border-radius:5px; padding-bottom:15px; color:#666;}
    .m-login .login-head { background-color:#f0f0f0; height:50px;line-height:50px; padding-left:10px; font-size:16px; border-bottom:1px solid #ebebeb; border-radius:5px 5px 0px 0px; text-align:center; color:#909090; text-shadow:#fff 1px 1px 0px;}
    .form-input{width: 300px;margin: auto;padding-top: 10px; }
</style>
<div class="m-login">
    <div class="login-head">系统管理登录</div>
    <form id="login-form" action="<?php echo Url('publics/login'); ?>" method="post" role="form">

        <div  class="form-input">
            <div class="form-group field-loginform-username required">

                <input type="text" class="form-control" name="name" maxlength="256" placeholder="用户名" value="">
            </div>
            <div class="form-group field-loginform-password required">
                <input type="password" id="loginform-password" class="form-control" name="login_password" maxlength="256" placeholder="密码">

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary u-login-btn">登录</button>
            </div>
        </div>
    </form>

</div>

    </div>

    <script src="__PublicAdmin__/layui/layui.js?<?php echo \think\Config::get('version_time'); ?>"></script>
<script src="__PublicDefault__/js/jquery-form.js?<?php echo \think\Config::get('version_time'); ?>" type="text/javascript"></script>
<script src="__PublicAdmin__/js/bootstrap.min.js?<?php echo \think\Config::get('version_time'); ?>"></script>
<script src="__PublicAdmin__/js/common.js?<?php echo \think\Config::get('version_time'); ?>"></script>

</body>
</html>




