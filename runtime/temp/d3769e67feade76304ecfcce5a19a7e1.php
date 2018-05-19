<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:67:"D:\wamp64\www\hengtong\admin/../appadmin/house\view\house\index.php";i:1524785424;s:68:"D:\wamp64\www\hengtong\admin/../appadmin/house\view\layouts\main.php";i:1524785424;s:70:"D:\wamp64\www\hengtong\admin/../appadmin/house\view\publics\topCss.php";i:1524785424;s:72:"D:\wamp64\www\hengtong\admin/../appadmin/house\view\publics\bottomJs.php";i:1524785424;}*/ ?>


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
    <?php if(checkPath('house/index')): ?>
    <li class="active"><a href="<?php echo Url('house/index'); ?>">房源列表</a></li>
    <?php endif; if(checkPath('house/houseAdd')): ?>
    <li><a href="<?php echo Url('house/houseAdd'); ?>">添加房源</a></li>
    <?php endif; ?>
</ul>
 <div>
        <div class="cf well form-search row">

            <form  method="get">
                <div class="fl">
                    <div class="btn-group layui-form">
                        <select name="status" class="form-control">
                            <option value="">全部状态</option>
                            <option value="1" <?php if(input('status') == 1): ?>selected<?php endif; ?>>已上架</option>
                            <option value="2" <?php if(input('status') == 2): ?>selected<?php endif; ?>>审核中</option>
                            <option value="3" <?php if(input('status') == 3): ?>selected<?php endif; ?>>审核失败</option>
                            <option value="4" <?php if(input('status') == 4): ?>selected<?php endif; ?>>已成交</option>
                            <option value="0" <?php if(input('status') === '0'): ?>selected<?php endif; ?>>已下架</option>
                        </select>
                    </div>
                    <div class="btn-group layui-form">
                        <select name="label_id" class="form-control">
                            <option value="">房源标签</option>
                            <?php foreach($labelList as $item): ?>
                            <option value="<?php echo $item['id']; ?>" <?php if(input('label_id') == $item['id']): ?>selected<?php endif; ?>><?php echo $item['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="btn-group layui-form">
                        <select name="fangxing" class="form-control">
                            <option value="">全部房型</option>
                            <?php foreach($fangList as $item): ?>
                            <option value="<?php echo $item['id']; ?>" <?php if(input('fangxing') == $item['id']): ?>selected<?php endif; ?>><?php echo $item['term']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="btn-group layui-form">
                        <select name="quyu" class="form-control">
                            <option value="">全部区域</option>
                            <?php foreach($quList as $item): ?>
                            <option value="<?php echo $item['id']; ?>" <?php if(input('quyu') == $item['id']): ?>selected<?php endif; ?>><?php echo $item['term']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="btn-group">
                        <input name="title" value="<?php echo input('title'); ?>" placeholder="房源名称" class="form-control"  type="text">
                    </div>
                    <div class="btn-group">
                        <input name="nick_name" value="<?php echo input('nick_name'); ?>" placeholder="经纪人" class="form-control"  type="text">
                    </div>
                    <div class="btn-group">
                        <input name="start" value="<?php echo input('start'); ?>" placeholder="创建起始日期" readonly dom-class="date-start" class="date-time date-start form-control laydate-icon"  type="text">
                    </div>
                    <div class="btn-group">
                        <input name="end" value="<?php echo input('end'); ?>" placeholder="创建结束日期" readonly dom-class="date-end" class="date-time date-end form-control laydate-icon"  type="text">
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
                <th width="100">房源名称</th>
                <th width="60">房源标签<span order="label_id" class="order-sort"></span></th>
                <th width="60">房型<span order="fangxing" class="order-sort"></span></th>
                <th width="60">区域<span order="quyu" class="order-sort"></span></th>
                <th width="50">状态</th>
                <th width="60">经纪人<span order="admin_id" class="order-sort"></span></th>
                <th width="40">排序<span order="sort" class="order-sort"> </span></th>
                <th width="40">推荐</th>
                <th width="80">创建时间<span order="create_time" class="order-sort"></span></th>
                <th width="80">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($list as $v): ?>
                <tr>
                    <td><?php echo $v['title']; ?></td>
                    <td><?php echo $v['label_name']; ?></td>
                    <td><?php echo $v['fangxing_name']; ?></td>
                    <td><?php echo $v['quyu_name']; ?></td>
                    <td><?php if($v['status'] == 1): ?><span class="blue">已上架</span><?php elseif($v['status'] == 2): ?><span class="red">审核中</span><?php elseif($v['status'] == 3): ?><span class="grey">审核失败</span><?php elseif($v['status'] == 4): ?><span class="green">已成交</span><?php else: ?><span class="yellow">已下架</span><?php endif; ?></td>
                    <td><?php echo $v['nick_name']; ?></td>
                    <td>
                        <?php if(checkPath('house/inputHouse')): ?>
                        <input class="form-control change-data short-input"  post-id="<?php echo $v['id']; ?>" post-url="<?php echo url('house/inputHouse'); ?>" data-name="sort" value="<?php echo $v['sort']; ?>">
                        <?php else: ?>
                        <?php echo $v['sort']; endif; ?>
                    </td>
                    <td class="layui-form">
                        <?php if(checkPath('house/switchHouse',['id'=>$v['id']]) && $v['status'] == 1): ?>
                        <input type="checkbox" data-name="is_commend" data-url="<?php echo url('house/switchHouse',['id'=>$v['id']]); ?>" lay-skin="switch" lay-text="取消|开启" <?php echo !empty($v['is_commend']) && $v['is_commend']==1?'checked':''; ?> data-value="1|0">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $v['create_time']; ?></td>
                    <td>
                        <?php if(checkPath('house/houseEdit',['id'=>$v['id']]) && in_array($v['status'],[0,3])): ?>
                        <a  href="<?php echo url('house/houseEdit',['id'=>$v['id']]); ?>">修改</a>
                        <?php endif; if(checkPath('house/operateHouse',['id'=>$v['id'],'data'=>2]) && in_array($v['status'],[0,3])): ?>
                        <span  class="span-post" post-msg="确认提交申请吗？审核通过后将会上架" post-url="<?php echo url('house/operateHouse',['id'=>$v['id'],'data'=>2,'name'=>'status']); ?>">上架申请</span>
                        <?php endif; if(checkPath('house/operateHouse',['id'=>$v['id'],'data'=>1]) && in_array($v['status'],[2])): ?>
                        <span  class="span-post" post-msg="确认房源上架吗？" post-url="<?php echo url('house/operateHouse',['id'=>$v['id'],'data'=>1,'name'=>'status']); ?>">确认上架</span>
                        <?php endif; if(checkPath('house/operateHouse',['id'=>$v['id'],'data'=>3]) && in_array($v['status'],[2])): ?>
                        <span  class="span-post" post-msg="确认打回重审吗？" post-url="<?php echo url('house/operateHouse',['id'=>$v['id'],'data'=>3,'name'=>'status']); ?>">打回重审</span>
                        <?php endif; if(checkPath('house/operateHouse',['id'=>$v['id'],'data'=>4]) && in_array($v['status'],[1])): ?>
                        <span  class="span-post" post-msg="确认打回重审吗？" post-url="<?php echo url('house/operateHouse',['id'=>$v['id'],'data'=>4,'name'=>'status']); ?>">确认成交</span>
                        <?php endif; if(checkPath('house/houseDetail') && in_array($v['status'],[1,2,4])): ?>
                        <a  href="<?php echo url('house/houseDetail',['id'=>$v['id']]); ?>">查看</a>
                        <?php endif; if(checkPath('house/houseDelete',['id'=>$v['id']])): ?>
                            <a  class="span-post" post-msg="确定要删除吗" post-url="<?php echo url('house/houseDelete',['id'=>$v['id']]); ?>">删除</a>
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
<script>
    $('.check-success').click(function(){
        var id = $(this).attr("data-id");
        openLayer = layer.open({
            type: 2,
            title: '选择预约时间',
            shadeClose: true,
            shade: [0.3, '#393D49'],
            area: ['400px', '450px'],
            content: "<?php echo url('house/checkSuccess','',''); ?>/id/"+id,
        })
    })
</script>
    </div>

    <script src="__PublicAdmin__/layui/layui.js?<?php echo \think\Config::get('version_time'); ?>"></script>
<script src="__PublicDefault__/js/jquery-form.js?<?php echo \think\Config::get('version_time'); ?>" type="text/javascript"></script>
<script src="__PublicAdmin__/js/bootstrap.min.js?<?php echo \think\Config::get('version_time'); ?>"></script>
<script src="__PublicAdmin__/js/common.js?<?php echo \think\Config::get('version_time'); ?>"></script>

</body>
</html>




