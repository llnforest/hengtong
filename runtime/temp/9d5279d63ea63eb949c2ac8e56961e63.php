<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:73:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\partner\partnerAdd.php";i:1526298272;s:67:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\layouts\main.php";i:1524785424;s:69:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\publics\topCss.php";i:1524785424;s:72:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\form\form_partner.php";i:1526298683;s:71:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\publics\bottomJs.php";i:1524785424;}*/ ?>


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
        <ul class="nav nav-tabs">
    <?php if(checkPath('partner/index')): ?>
    <li><a href="<?php echo Url('partner/index'); ?>">客户列表</a></li>
    <?php endif; if(checkPath('partner/partnerAdd')): ?>
    <li class="active"><a href="<?php echo Url('partner/partnerAdd'); ?>">添加客户</a></li>
    <?php endif; ?>
    
</ul>
 <form  class="form-horizontal" action="<?php echo url('partner/partnerAdd'); ?>" method="post">
    
<div class="col-sm-12">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>客户图片</th>
                <td>
                    <button name="image" type="button" class="layui-btn upload" lay-data="{'url': '<?php echo url('index/upload/image',['type'=>'partner']); ?>'}">
                        <i class="layui-icon">&#xe67c;</i>上传图片
                        <input class="image" type="hidden" name="url" value="<?php echo isset($info['url']) ? $info['url'] : ''; ?>">
                        <img class="mini-image <?php echo !empty($info['url'])?'':'hidden'; ?>" data-path="__ImagePath__" src="<?php echo !empty($info['url'])?'__ImagePath__'.$info['url']:''; ?>">
                    </button>
                </td>
            </tr>
            <tr>
                <th>客户排序</th>
                <td>
                    <input class="form-control text" type="text" name="sort" value="<?php echo isset($info['sort']) ? $info['sort'] : ''; ?>" placeholder="客户排序">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">
                    <button type="button" class="btn btn-success form-post " >保存</button>
                    <a class="btn btn-default active" href="JavaScript:history.go(-1)">返回</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


</form>

    </div>

    <script src="__PublicAdmin__/layui/layui.js?<?php echo \think\Config::get('version_time'); ?>"></script>
<script src="__PublicDefault__/js/jquery-form.js?<?php echo \think\Config::get('version_time'); ?>" type="text/javascript"></script>
<script src="__PublicAdmin__/js/bootstrap.min.js?<?php echo \think\Config::get('version_time'); ?>"></script>
<script src="__PublicAdmin__/js/common.js?<?php echo \think\Config::get('version_time'); ?>"></script>

</body>
</html>




