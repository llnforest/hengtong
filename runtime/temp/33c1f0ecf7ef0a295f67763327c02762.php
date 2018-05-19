<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:67:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\admin\index.php";i:1526284629;s:68:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\layouts\main.php";i:1524785424;s:70:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\publics\topCss.php";i:1524785424;s:72:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\publics\bottomJs.php";i:1524785424;}*/ ?>


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
        <div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <?php if(checkPath('admin/index')): ?>
        <li  class="active"><a href="<?php echo url('admin/index'); ?>">用户管理</a></li>
        <?php endif; if(checkPath('admin/add')): ?>
        <li><a href="<?php echo url('admin/add'); ?>">增加用户</a></li>
        <?php endif; ?>
    </ul>

    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th width="50">ID</th>
            <th>账号</th>
            <th>姓名</th>
            <th>邮箱</th>
            <th>最后登录IP</th>
            <th>最后登录时间</th>
            <th>状态</th>
            <th width="170">操作</th>
        </tr>

        </thead>
        <tbody>

        <?php foreach($list as $v) {
            ?>
            <tr>
                <td><?php echo $v['id']; ?></td>
                <td><?php echo $v['name']; ?></td>
                <td><?php echo $v['nick_name']; ?></td>
                <td><?php echo $v['email']; ?></td>
                <td><?php echo $v['last_login_ip']; ?></td>
                <td><?php echo $v['last_login_time']; ?></td>
                <td class="layui-form">
                    <?php if($v['id'] == 1): ?>
                    <span class="blue">√</span>
                    <?php else: if(checkPath('admin/status')): ?>
                    <input type="checkbox" data-name="status" data-url="<?php echo url('admin/status',['id'=>$v['id']]); ?>" lay-skin="switch" lay-text="开启|禁用" <?php echo $v['status']!==0?'checked':''?> data-value="1|0">
                    <?php else: ?>
                    <?php echo !empty($v['status']) && $v['status']==1?'<span class="blue">√</span>':'<span class="red">╳</span>'; endif; endif; ?>
                </td>
                <td>
                    <?php if($v['id'] == 1): ?>
                    <span class="grey">独立权限</span>
                    <span class="grey">编辑</span>
                    <span class="grey">删除</span>
                    <?php else: if(checkPath('auth/adminAuthorize',['id' => $v['id'],'name'=>$v['name']])): ?>
                        <a href="<?php echo Url('auth/adminAuthorize',['id' => $v['id'],'name'=>$v['name']])?>">独立权限</a>
                    <?php endif; if(checkPath('admin/edit',['id' => $v['id']])): ?>
                        <a href="<?php echo Url('admin/edit',['id' => $v['id']])?>">编辑</a>
                    <?php endif; if(checkPath('admin/delete',['id' => $v['id']])): ?>
                        <span class="span-post" post-msg="你确定要删除吗" post-url="<?php echo Url('admin/delete',['id' => $v['id']])?>">删除</span>
                    <?php endif; endif; ?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="text-center">
        <?php echo $page; ?>
    </div>
</div>

    </div>

    <script src="__PublicAdmin__/layui/layui.js?<?php echo \think\Config::get('version_time'); ?>"></script>
<script src="__PublicDefault__/js/jquery-form.js?<?php echo \think\Config::get('version_time'); ?>" type="text/javascript"></script>
<script src="__PublicAdmin__/js/bootstrap.min.js?<?php echo \think\Config::get('version_time'); ?>"></script>
<script src="__PublicAdmin__/js/common.js?<?php echo \think\Config::get('version_time'); ?>"></script>

</body>
</html>




