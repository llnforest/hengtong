<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:67:"D:\wamp64\www\hengtong\admin/../appadmin/user\view\record\index.php";i:1524785424;s:67:"D:\wamp64\www\hengtong\admin/../appadmin/user\view\layouts\main.php";i:1524785424;s:69:"D:\wamp64\www\hengtong\admin/../appadmin/user\view\publics\topCss.php";i:1524785424;s:71:"D:\wamp64\www\hengtong\admin/../appadmin/user\view\publics\bottomJs.php";i:1524785424;}*/ ?>


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
    <?php if(checkPath('record/index')): ?>
    <li class="active"><a href="<?php echo Url('record/index'); ?>">看房列表</a></li>
    <?php endif; if(checkPath('user/userAdd')): ?>
    <li><a href="<?php echo Url('record/recordAdd'); ?>">添加看房</a></li>
    <?php endif; ?>
</ul>
 <div>
        <div class="cf well form-search row">

            <form  method="get">
                <div class="fl">
                    <div class="btn-group">
                        <input name="nick_name" value="<?php echo input('nick_name'); ?>" placeholder="经纪人" class="form-control"  type="text">
                    </div>
                    <div class="btn-group">
                        <input name="phone" value="<?php echo input('phone'); ?>" placeholder="手机号" class="form-control"  type="text">
                    </div>
                    <div class="btn-group">
                        <input name="title" value="<?php echo input('title'); ?>" placeholder="房源名称" class="form-control"  type="text">
                    </div>
                    <div class="btn-group">
                        <input name="start" value="<?php echo input('start'); ?>" placeholder="看房起始日期" readonly dom-class="date-start" class="date-time date-start form-control laydate-icon"  type="text">
                    </div>
                    <div class="btn-group">
                        <input name="end" value="<?php echo input('end'); ?>" placeholder="看房结束日期" readonly dom-class="date-end" class="date-time date-end form-control laydate-icon"  type="text">
                    </div>
                    <div class="btn-group">
                        <button type="submit" class="btn btn-success">查询</button>
                    </div>
                </div>
            </form>
        </div>
        <table class="table table-hover table-bordered table-list" id="menus-table">
            <thead>
            <tr>
                <th width="100">用户</th>
                <th width="100">房源名称</th>
                <th width="100">经纪人</th>
                <th width="80">看房日期<span order="record_date" class="order-sort"> </span></th>
                <th width="80">创建时间<span order="create_time" class="order-sort"> </span></th>
                <th width="80">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($list as $v): ?>
                <tr>
                    <td><?php echo $v['phone']; ?></td>
                    <td><?php echo $v['title']; ?></td>
                    <td><?php echo $v['nick_name']; ?></td>
                    <td><?php echo $v['record_date']; ?></td>
                    <td><?php echo $v['create_time']; ?></td>
                    <td>
                        <?php if(checkPath('record/recordDelete',['id'=>$v['id']])): ?>
                            <a  class="span-post" post-msg="确定要删除吗" post-url="<?php echo url('record/recordDelete',['id'=>$v['id']]); ?>">删除</a>
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




