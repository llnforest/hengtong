<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:65:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\info\index.php";i:1526289684;s:67:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\layouts\main.php";i:1524785424;s:69:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\publics\topCss.php";i:1524785424;s:69:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\form\form_info.php";i:1526433457;s:71:"D:\wamp64\www\hengtong\admin/../appadmin/base\view\publics\bottomJs.php";i:1524785424;}*/ ?>


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
    <?php if(checkPath('info/index')): ?>
    <li class="active"><a href="<?php echo Url('info/index'); ?>">网站信息</a></li>
    <?php endif; ?>
</ul>
 <form  class="form-horizontal" action="<?php echo url('info/index',['id'=>$info['id']]); ?>" method="post">
    <script type="text/javascript" charset="utf-8" src="__PublicAdmin__/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__PublicAdmin__/ueditor/ueditor.all.min.js"> </script>
<div class="col-sm-12">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>主标题</th>
                <td>
                    <input class="form-control text" type="text" name="heading" value="<?php echo isset($info['heading']) ? $info['heading'] : ''; ?>" placeholder="主标题">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>英文标题</th>
                <td class="layui-form">
                    <input class="form-control text" type="text" name="eng_heading" value="<?php echo isset($info['eng_heading']) ? $info['eng_heading'] : ''; ?>" placeholder="英文标题">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>副标题</th>
                <td class="layui-form">
                    <input class="form-control text" type="text" name="sub_heading" value="<?php echo isset($info['sub_heading']) ? $info['sub_heading'] : ''; ?>" placeholder="副标题">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>版权归属</th>
                <td>
                    <input class="form-control text" type="text" name="power" value="<?php echo isset($info['power']) ? $info['power'] : ''; ?>" placeholder="版权归属">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>备案信息</th>
                <td>
                    <input class="form-control text" type="text" name="case_info" value="<?php echo isset($info['case_info']) ? $info['case_info'] : ''; ?>" placeholder="备案信息">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>logo图片</th>
                <td>
                    <button name="image" type="button" class="layui-btn upload" lay-data="{'url': '<?php echo url('index/upload/image',['type'=>'info']); ?>'}">
                        <i class="layui-icon">&#xe67c;</i>上传logo图片
                        <input class="image" type="hidden" name="logo_url" value="<?php echo isset($info['logo_url']) ? $info['logo_url'] : ''; ?>">
                        <img class="mini-image <?php echo !empty($info['logo_url'])?'':'hidden'; ?>" data-path="__ImagePath__" src="<?php echo !empty($info['logo_url'])?'__ImagePath__'.$info['logo_url']:''; ?>">
                    </button>
                    <span class="red block">(图片建议大小 120*40)</span>
                </td>
            </tr>
            <tr>
                <th>背景图片</th>
                <td>
                    <button name="image" type="button" class="layui-btn upload" lay-data="{'url': '<?php echo url('index/upload/image',['type'=>'info']); ?>'}">
                        <i class="layui-icon">&#xe67c;</i>上传背景图
                        <input class="image" type="hidden" name="bg_url" value="<?php echo isset($info['bg_url']) ? $info['bg_url'] : ''; ?>">
                        <img class="mini-image <?php echo !empty($info['bg_url'])?'':'hidden'; ?>" data-path="__ImagePath__" src="<?php echo !empty($info['bg_url'])?'__ImagePath__'.$info['bg_url']:''; ?>">
                    </button>
                    <span class="red block">(图片建议大小 1920*1200)</span>
                </td>
            </tr>
            <tr>
                <th>宣传图片</th>
                <td>
                    <button name="image" type="button" class="layui-btn upload" lay-data="{'url': '<?php echo url('index/upload/image',['type'=>'info']); ?>'}">
                        <i class="layui-icon">&#xe67c;</i>上传宣传图片
                        <input class="image" type="hidden" name="sub_url" value="<?php echo isset($info['sub_url']) ? $info['sub_url'] : ''; ?>">
                        <img class="mini-image <?php echo !empty($info['sub_url'])?'':'hidden'; ?>" data-path="__ImagePath__" src="<?php echo !empty($info['sub_url'])?'__ImagePath__'.$info['sub_url']:''; ?>">
                    </button>
                    <span class="red block">(图片建议大小 713*80)</span>
                </td>
            </tr>
            <tr>
                <th>二维码</th>
                <td>
                    <button name="image" type="button" class="layui-btn upload" lay-data="{'url': '<?php echo url('index/upload/image',['type'=>'info']); ?>'}">
                        <i class="layui-icon">&#xe67c;</i>上传二维码图片
                        <input class="image" type="hidden" name="qr_url" value="<?php echo isset($info['qr_url']) ? $info['qr_url'] : ''; ?>">
                        <img class="mini-image <?php echo !empty($info['qr_url'])?'':'hidden'; ?>" data-path="__ImagePath__" src="<?php echo !empty($info['qr_url'])?'__ImagePath__'.$info['qr_url']:''; ?>">
                    </button>
                    <span class="red block">(图片建议大小 192*192)</span>
                </td>
            </tr>
            <tr>
                <th>描述内容</th>
                <td>
                    <script id="content" name="description" type="text/plain" style="width:850px;height:400px;"><?php echo isset($info['description']) ? $info['description'] : ''; ?></script>
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
    var ue = UE.getEditor('content');
</script>


</form>

    </div>

    <script src="__PublicAdmin__/layui/layui.js?<?php echo \think\Config::get('version_time'); ?>"></script>
<script src="__PublicDefault__/js/jquery-form.js?<?php echo \think\Config::get('version_time'); ?>" type="text/javascript"></script>
<script src="__PublicAdmin__/js/bootstrap.min.js?<?php echo \think\Config::get('version_time'); ?>"></script>
<script src="__PublicAdmin__/js/common.js?<?php echo \think\Config::get('version_time'); ?>"></script>

</body>
</html>




