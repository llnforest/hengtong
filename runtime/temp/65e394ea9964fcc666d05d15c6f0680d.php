<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\wamp64\www\hengtong\vendor\zouxiang0639\thinkcms-auth\view\menu.php";i:1524785424;}*/ ?>
<?php require $pach . 'public/top.php';?>
<ul class="nav nav-tabs">

    <li class="active"><a href="<?php echo url('auth/menu'); ?>">后台菜单</a></li>
    <?php if(checkPath('auth/menuAdd')): ?>
    <li><a href="<?php echo url('auth/menuAdd'); ?>">增加菜单</a></li>
    <?php endif; ?>
</ul>

<table class="table table-hover table-bordered table-list" id="menus-table">
    <thead>
    <tr>
        <th width="80">排序</th>
        <th width="50">ID</th>
        <th>菜单名称</th>
        <th>应用</th>
        <th>控制器</th>
        <th>方法</th>
        <th>日志请求</th>
        <th width="80">状态</th>
        <th width="180">操作</th>
    </tr>
    </thead>
    <tbody>
        <?php echo $info?>
    </tbody>
</table>


<input type="hidden" value="<?php echo url('auth/menuOrder'); ?>" class="listOrderUrl">
<?php require $pach . 'public/foot.php';?>