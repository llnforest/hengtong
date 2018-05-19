<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:66:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\cases\index.php";i:1526296178;s:67:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\layouts\main.php";i:1524785424;s:69:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\publics\topCss.php";i:1524785424;s:71:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\publics\bottomJs.php";i:1524785424;}*/ ?>


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
    <?php if(checkPath('cases/index')): ?>
    <li class="active"><a href="<?php echo Url('cases/index'); ?>">案例列表</a></li>
    <?php endif; if(checkPath('cases/casesAdd')): ?>
    <li><a href="<?php echo Url('cases/casesAdd'); ?>">添加案例</a></li>
    <?php endif; ?>
</ul>
 <div>
     <div class="cf well form-search row">

         <form  method="get">
             <div class="fl">
                 <div class="btn-group">
                     <input name="title" value="<?php echo input('title'); ?>" placeholder="主标题" class="form-control"  type="text">
                 </div>
                 <div class="btn-group layui-form">
                     <select name="cate_id" class="form-control">
                         <option value="">全部分类</option>
                         <?php foreach($cateList as $item): ?>
                         <option value="<?php echo $item['id']; ?>" <?php if(input('cate_id') == $item['id']): ?>selected<?php endif; ?>><?php echo $item['name']; ?></option>
                         <?php endforeach; ?>
                     </select>
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
                <th width="80">图片</th>
                <th width="80">主标题</th>
                <th width="80">排序<span order="sort" class="order-sort"> </span></th>
                <th width="80">分类</th>
                <th width="80">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($list as $v): ?>
                <tr>
                    <td><img class="mini-image" src="<?php echo !empty($v['url'])?'__ImagePath__'.$v['url']:''; ?>" style="width:80px"></td>
                    <td><?php echo $v['title']; ?></td>
                    <td>
                        <?php if(checkPath('cases/inputCases')): ?>
                        <input class="form-control change-data short-input"  post-id="<?php echo $v['id']; ?>" post-url="<?php echo url('cases/inputCases'); ?>" data-name="sort" value="<?php echo $v['sort']; ?>">
                        <?php else: ?>
                        <?php echo $v['sort']; endif; ?>
                    </td>
                    <td><?php echo $v['name']; ?></td>
                    <td>
                        <?php if(checkPath('cases/casesEdit',['id'=>$v['id']])): ?>
                        <a  href="<?php echo url('cases/casesEdit',['id'=>$v['id']]); ?>">编辑</a>
                        <?php endif; if(checkPath('cases/casesDelete',['id'=>$v['id']])): ?>
                            <a  class="span-post" post-msg="确定要删除吗" post-url="<?php echo url('cases/casesDelete',['id'=>$v['id']]); ?>">删除</a>
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




