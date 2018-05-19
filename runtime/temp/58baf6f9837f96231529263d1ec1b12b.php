<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:81:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\case_category\categoryEdit.php";i:1526294759;s:67:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\layouts\main.php";i:1524785424;s:69:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\publics\topCss.php";i:1524785424;s:73:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\form\form_category.php";i:1526294439;s:71:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\publics\bottomJs.php";i:1524785424;}*/ ?>


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
    <?php if(checkPath('caseCategory/index')): ?>
    <li><a href="<?php echo Url('caseCategory/index'); ?>">分类列表</a></li>
    <?php endif; if(checkPath('caseCategory/categoryAdd')): ?>
    <li><a href="<?php echo Url('caseCategory/categoryAdd'); ?>">添加分类</a></li>
    <?php endif; if(checkPath('caseCategory/categoryEdit',['id'=>$info['id']])): ?>
    <li class="active"><a href="<?php echo Url('caseCategory/categoryEdit',['id'=>$info['id']]); ?>">修改分类</a></li>
    <?php endif; ?>
</ul>
 <form  class="form-horizontal" action="<?php echo url('caseCategory/categoryEdit',['id'=>$info['id']]); ?>" method="post">
    
<div class="col-sm-12">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>分类名称</th>
                <td>
                    <input class="form-control text" type="text" name="name" value="<?php echo isset($info['name']) ? $info['name'] : ''; ?>" placeholder="分类名称">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>分类排序</th>
                <td>
                    <input class="form-control text" type="text" name="sort" value="<?php echo isset($info['sort']) ? $info['sort'] : ''; ?>" placeholder="分类排序">
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




