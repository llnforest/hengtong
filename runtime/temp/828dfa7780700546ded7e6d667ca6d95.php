<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\wamp64\www\hengtong\vendor\zouxiang0639\thinkcms-auth\view\role.php";i:1524785424;}*/ ?>

<?php require $pach . 'public/top.php';?>

    <ul class="nav nav-tabs">

        <li class="active"><a href="<?php echo Url('auth/role')?>">角色管理</a></li>
        <?php if(checkPath('auth/roleAdd')): ?>
            <li><a href="<?php echo Url('auth/roleAdd')?>">增加角色</a></li>
        <?php endif; ?>

    </ul>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th width="30">ID</th>
            <th align="left">角色名称</th>
            <th align="left">角色描述</th>
            <th width="50" align="left">状态</th>
            <th width="160">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($list as $v){?>
            <tr>
                <td><?php echo $v['id']; ?></td>
                <td><?php echo $v['name']; ?></td>
                <td><?php echo $v['remark']; ?></td>
                <td  class="layui-form">
                    <?php if($v['id'] == 1): ?>
                    <span class="blue">√</span>
                    <?php else: if(checkPath('auth/roleStatus')): ?>
                    <input type="checkbox" data-name="status" data-url="<?php echo url('auth/roleStatus',['id'=>$v['id']]); ?>" lay-skin="switch" lay-text="开启|禁用" <?php echo $v['status']!==0?'checked':''?> data-value="1|0">
                    <?php else: if($v['status']==1){ ?>
                        <span color="blue">√</span>
                    <?php }else{ ?>
                        <span color="red">╳</span>
                    <?php } endif; endif; ?>
                </td>
                <td>
                    <?php if($v['id']==1){ ?>
                        <span class="grey">权限设置</span>
                        <span class="grey">编辑</span>
                        <span class="grey">删除</span>
                    <?php }else{ if(checkPath('auth/authorize',['id'=>$v['id']])): ?>
                            <a href="<?php echo Url('auth/authorize',['id'=>$v['id']])?>">权限设置</a>
                        <?php endif; if(checkPath('auth/roleEdit',['id'=>$v['id']])): ?>
                            <a href="<?php echo Url('auth/roleEdit',['id'=>$v['id']])?>">编辑</a>
                        <?php endif; if(checkPath('auth/roleDelete',['id'=>$v['id']])): ?>
                            <span  class="span-post" post-msg="你确定要删除吗" post-url="<?php echo Url('auth/roleDelete',['id'=>$v['id']])?>">删除</span>
                        <?php endif; } ?>

                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php require $pach . 'public/foot.php';?>




