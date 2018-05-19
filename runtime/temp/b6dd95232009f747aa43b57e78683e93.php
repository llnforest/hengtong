<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:69:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\cases\casesAdd.php";i:1526295782;s:67:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\layouts\main.php";i:1524785424;s:69:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\publics\topCss.php";i:1524785424;s:70:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\form\form_cases.php";i:1526298958;s:71:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\publics\bottomJs.php";i:1524785424;}*/ ?>


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
    <li><a href="<?php echo Url('cases/index'); ?>">案例列表</a></li>
    <?php endif; if(checkPath('cases/casesAdd')): ?>
    <li class="active"><a href="<?php echo Url('cases/casesAdd'); ?>">添加案例</a></li>
    <?php endif; ?>
    
</ul>
 <form  class="form-horizontal" action="<?php echo url('cases/casesAdd'); ?>" method="post">
    
<div class="col-sm-12">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>案例分类</th>
                <td>
                    <select name="cate_id" class="form-control text">
                        <?php foreach($cateList as $item): ?>
                        <option value="<?php echo $item['id']; ?>" <?php if(input('cate_id') == $item['id']): ?>selected<?php endif; ?>><?php echo $item['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>案例标题</th>
                <td>
                    <input class="form-control text" type="text" name="title" value="<?php echo isset($info['title']) ? $info['title'] : ''; ?>" placeholder="主标题">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>副标题</th>
                <td class="layui-form">
                    <input class="form-control text" type="text" name="sub_title" value="<?php echo isset($info['sub_title']) ? $info['sub_title'] : ''; ?>" placeholder="副标题">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>内容简介</th>
                <td>
                    <textarea class="form-control text" type="text" name="content" placeholder="内容简介"><?php echo isset($info['content']) ? $info['content'] : ''; ?></textarea>
                </td>
            </tr>
            <tr>
                <th>展示图片</th>
                <td>
                    <button name="image" type="button" class="layui-btn upload" lay-data="{'url': '<?php echo url('index/upload/image',['type'=>'cases']); ?>'}">
                        <i class="layui-icon">&#xe67c;</i>上传展示图片
                        <input class="image" type="hidden" name="url" value="<?php echo isset($info['url']) ? $info['url'] : ''; ?>">
                        <img class="mini-image <?php echo !empty($info['url'])?'':'hidden'; ?>" data-path="__ImagePath__" src="<?php echo !empty($info['url'])?'__ImagePath__'.$info['url']:''; ?>">
                    </button>
                    <span class="red block">(图片建议大小 342*230)</span>
                </td>
            </tr>
            <tr>
                <th>内容图片</th>
                <td>
                    <button name="image" type="button" class="layui-btn upload" lay-data="{'url': '<?php echo url('index/upload/image',['type'=>'cases']); ?>'}">
                        <i class="layui-icon">&#xe67c;</i>上传内容图片
                        <input class="image" type="hidden" name="content_url" value="<?php echo isset($info['content_url']) ? $info['content_url'] : ''; ?>">
                        <img class="mini-image <?php echo !empty($info['content_url'])?'':'hidden'; ?>" data-path="__ImagePath__" src="<?php echo !empty($info['content_url'])?'__ImagePath__'.$info['content_url']:''; ?>">
                    </button>
                    <span class="red block">(图片建议大小 1238*3164)</span>
                </td>
            </tr>
            <tr>
                <th>案例排序</th>
                <td>
                    <input class="form-control text" type="text" name="sort" value="<?php echo isset($info['sort']) ? $info['sort'] : ''; ?>" placeholder="案例排序">
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




