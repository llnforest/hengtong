<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\wamp64\www\hengtong\vendor\zouxiang0639\thinkcms-auth\view\menuAdd.php";i:1524785424;}*/ ?>

<?php require $pach . 'public/top.php';?>
<ul class="nav nav-tabs">
    <?php if(checkPath('auth/menu')): ?>
        <li><a href="<?php echo url('auth/menu'); ?>">后台菜单</a></li>
    <?php endif; ?>
    <li class="active"><a href="<?php echo url('auth/menuAdd'); ?>">增加菜单</a></li>
</ul>

<form  class="form-horizontal"  action="<?php echo url('auth/menuAdd'); ?>" method="post">
    <?php require $pach . 'form/form_menu.php';?>
</form>
<?php require $pach . 'public/foot.php';?>