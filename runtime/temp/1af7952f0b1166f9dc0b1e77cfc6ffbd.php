<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:65:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\admin\add.php";i:1524785424;s:68:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\layouts\main.php";i:1524785424;s:70:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\publics\topCss.php";i:1524785424;s:71:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\form\form_admin.php";i:1526284584;s:72:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\publics\bottomJs.php";i:1524785424;}*/ ?>


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
    <ul class="nav nav-tabs">
        <?php if(checkPath('admin/index')): ?>
        <li><a href="<?php echo url('admin/index'); ?>">用户管理</a></li>
        <?php endif; if(checkPath('admin/add')): ?>
        <li class="active"><a href="<?php echo url('admin/add'); ?>">增加用户</a></li>
        <?php endif; ?>
    </ul>
    <div class="site-signup">
        <div class="row">
                <form class="form-horizontal" action="<?php echo url('admin/add'); ?>" method="post" >
                    
<link rel="stylesheet" href="__PublicDefault__/multiselect/css/multi-select.css?20171208">
<script src="__PublicDefault__/multiselect/js/jquery.multi-select.js"></script>
<script src="__PublicDefault__/multiselect/js/joinable.js"></script>
<div class="col-sm-12">
    <table class="table table-bordered">
        <tbody>
        <tr>
            <th>账号</th>
            <td>
                <?php if((!isset($info['name']))): ?>
                <input class="form-control text" type="text" name="name"  value="<?php echo isset($info['name']) ? $info['name'] : ''; ?>" placeholder="账号">
                <span class="form-required">*</span>
                <?php else: ?>
                <input class="form-control text" type="text" readonly value="<?php echo isset($info['name']) ? $info['name'] : ''; ?>">
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <th>密码</th>
            <td>
                <input class="form-control text" type="text" name="password" value="" placeholder="密码">
                <span class="form-required">*<span style="font-size:12px;position:relative;top:-5px;"><?php if(!empty($info['name'])) echo "填写则修改密码，不填则保持原密码"; ?></span> </span>
            </td>
        </tr>
        <tr>
            <th>姓名</th>
            <td>
                <input class="form-control text" type="text" name="nick_name" value="<?php echo isset($info['nick_name']) ? $info['nick_name'] : ''; ?>" placeholder="姓名">
                <span class="form-required">*</span>
            </td>
        </tr>
        <tr>
            <th>手机</th>
            <td>
                <input class="form-control text" type="text" name="phone" value="<?php echo isset($info['phone']) ? $info['phone'] : ''; ?>" placeholder="手机">
                <span class="form-required">*</span>
            </td>
        </tr>
        <tr>
            <th>邮箱</th>
            <td>
                <input class="form-control text" type="text" name="email" value="<?php echo isset($info['email']) ? $info['email'] : ''; ?>" placeholder="邮箱">
                <span class="form-required">*</span>
            </td>
        </tr>
        <tr>
            <th>角色</th>
            <td>
                <select class="form-control" multiple="multiple" id="multi-select" name="role[]">
                    <?php echo isset($info['role']) ? $info['role'] :  ''; ?>
                </select>
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
<script type="text/javascript">
    $(function(){
        $("#multi-select").multiSelect({
            afterInit: function()
            {
                // Add alternative scrollbar to list
                this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar();
            },
            afterSelect: function()
            {
                // Update scrollbar size
                this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar('update');
            }
        });
    })
</script>


                </form>
            </div>
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




