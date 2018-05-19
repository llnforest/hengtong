<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:66:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\index\home.php";i:1524785424;s:68:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\layouts\main.php";i:1524785424;s:70:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\publics\topCss.php";i:1524785424;s:72:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\publics\bottomJs.php";i:1524785424;}*/ ?>


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
        
<div class="wrap">
    <div id="home_toptip"></div>
    <h4 class="well" style="margin-top:30px;">系统通知</h4>
    <div class="home_info">
        <ul id="thinkcmf_notices">
            <!-- <li><img src="/cmf/admin/themes/simplebootx/Public/assets/images/loading.gif"style="vertical-align: middle;" /><span style="display: inline-block; vertical-align: middle;">加载中...</span></li>-->
        </ul>
    </div>
    <h4 class="well">系统信息</h4>
    <div class="home_info">
        <div class="bs-example" data-example-id="simple-ol">
            <!-- <ol>
                 <li><em></em> <span>Darwin</span></li><li><em>运行环境</em> <span>Apache/2.4.18 (Unix) PHP/5.5.33</span></li><li><em>PHP运行方式</em> <span>apache2handler</span></li><li><em>MYSQL版本</em> <span>5.7.12</span></li><li><em>程序版本</em> <span>X2.0.0&nbsp;&nbsp;&nbsp; [<a href='http://www.thinkcmf.com' target='_blank'>ThinkCMF</a>]</span></li><li><em>上传附件限制</em> <span>2M</span></li><li><em>执行时间限制</em> <span>30s</span></li><li><em>剩余空间</em> <span>92755.25M</span></li>
             </ol>-->
        </div>

    </div>

</div>
    </div>

    <script src="__PublicAdmin__/layui/layui.js?<?php echo \think\Config::get('version_time'); ?>"></script>
<script src="__PublicDefault__/js/jquery-form.js?<?php echo \think\Config::get('version_time'); ?>" type="text/javascript"></script>
<script src="__PublicAdmin__/js/bootstrap.min.js?<?php echo \think\Config::get('version_time'); ?>"></script>
<script src="__PublicAdmin__/js/common.js?<?php echo \think\Config::get('version_time'); ?>"></script>

</body>
</html>




