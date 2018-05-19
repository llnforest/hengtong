<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\service\index.php";i:1526294069;s:67:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\layouts\main.php";i:1524785424;s:69:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\publics\topCss.php";i:1524785424;s:71:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\publics\bottomJs.php";i:1524785424;}*/ ?>


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
    <?php if(checkPath('service/index')): ?>
    <li class="active"><a href="<?php echo Url('service/index'); ?>">业务列表</a></li>
    <?php endif; if(checkPath('service/serviceAdd')): ?>
    <li><a href="<?php echo Url('service/serviceAdd'); ?>">添加业务</a></li>
    <?php endif; ?>
</ul>
 <div>
        <table class="table table-hover table-bordered table-list" id="menus-table">
            <thead>
            <tr>
                <th width="80">图片</th>
                <th width="80">名称</th>
                <th width="80">排序<span order="sort" class="order-sort"> </span></th>
                <th width="80">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($list as $v): ?>
                <tr>
                    <td><img class="mini-image" src="<?php echo !empty($v['url'])?'__ImagePath__'.$v['url']:''; ?>" style="width:80px"></td>
                    <td><?php echo $v['name']; ?></td>
                    <td>
                        <?php if(checkPath('service/inputService')): ?>
                        <input class="form-control change-data short-input"  post-id="<?php echo $v['id']; ?>" post-url="<?php echo url('service/inputService'); ?>" data-name="sort" value="<?php echo $v['sort']; ?>">
                        <?php else: ?>
                        <?php echo $v['sort']; endif; ?>
                    </td>
                    <td>
                        <?php if(checkPath('service/serviceEdit',['id'=>$v['id']])): ?>
                        <a  href="<?php echo url('service/serviceEdit',['id'=>$v['id']]); ?>">编辑</a>
                        <?php endif; if(checkPath('service/serviceDelete',['id'=>$v['id']])): ?>
                            <a  class="span-post" post-msg="确定要删除吗" post-url="<?php echo url('service/serviceDelete',['id'=>$v['id']]); ?>">删除</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="text-center">
        <?php echo $page; ?>
    </div>
    </div>

    <script src="__PublicAdmin__/layui/layui.js?<?php echo \think\Config::get('version_time'); ?>"></script>
<script src="__PublicDefault__/js/jquery-form.js?<?php echo \think\Config::get('version_time'); ?>" type="text/javascript"></script>
<script src="__PublicAdmin__/js/bootstrap.min.js?<?php echo \think\Config::get('version_time'); ?>"></script>
<script src="__PublicAdmin__/js/common.js?<?php echo \think\Config::get('version_time'); ?>"></script>

</body>
</html>




