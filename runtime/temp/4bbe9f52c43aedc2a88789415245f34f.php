<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"D:\wamp64\www\hengtong\web/../appweb/index\view\index\caseDetail.php";i:1526387201;s:65:"D:\wamp64\www\hengtong\web/../appweb/index\view\public\header.php";i:1526387006;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>案例|<?php echo $case['title']; ?></title>
    <link rel="stylesheet" href="__StaticStyle__/css/bootstrap.css">
    <!--引用bootstrap框架需要用的js文件-->
    <script src="__StaticStyle__/js/jquery-3.2.1.js"></script>
    <!--引用bootstrap框架的js文件-->
    <script src="__StaticStyle__/js/bootstrap.js"></script>
    <link rel="stylesheet" href="__StaticStyle__/css/style1.css">


</head>
<body>


<!--导航-->

<!--导航-->

<header>
        <div class="navbar-default" style="position: fixed;top:0;z-index: 4;width: 100%; height: 100px;
    background: rgba(0,0,0,0.51)" >
            <div class="container">
                <div class="logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse" aria-expanded="false">
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                    </button>
                    <h1><a href="<?php echo url('index/index'); ?>#page1"><img class="img11" src="__ImagePath__<?php echo $info['logo_url']; ?>"></a></h1>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-collapse" style="margin-left: 0;">
                    <ul class="navbar-nav" id="menu" style="float: right;list-style: none;">
                        <li data-menuanchor="page1" <?php if(empty($nav)): ?>class="active"<?php endif; ?>><a href="<?php echo url('index/index'); ?>#page1">首页</a></li>
                        <li data-menuanchor="page2"><a href="<?php echo url('index/index'); ?>#page2">业务</a></li>
                        <li data-menuanchor="page3" <?php if(!empty($nav) && $nav == 'case'): ?>class="active"<?php endif; ?>><a <?php if(empty($nav)): ?>href="<?php echo url('index/index'); ?>#page3"<?php endif; ?>>案例</a></li>
                        <li data-menuanchor="page4"><a href="<?php echo url('index/index'); ?>#page4">客户</a></li>
                        <li data-menuanchor="page5"><a href="<?php echo url('index/index'); ?>#page5">关于</a></li>
                        <li data-menuanchor="page6"><a href="<?php echo url('index/index'); ?>#page6">联系我们</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
<!--第二 背景-->

<div class="bj-img">

</div>
<!--内容-->

<div class="center">
    <div id="lb">
        <div class="center1">
            <img src="__ImagePath__<?php echo $case['content_url']; ?>">
            <div class="center2">
                <h3><?php echo $case['title']; ?></h3>
                <p class="xian"></p>
                <p class="zi"><?php echo $case['content']; ?></p>
            </div>
        </div>
    </div>


    <div class="anniu">
        <div class="left">
            <i>标签 ：</i><i class="i1"><?php echo $case['name']; ?></i>

        </div>
        <div class="right">
            <?php if(!empty($prev)): ?>
                <a id="sy" class="anniu-click" href="<?php echo url('index/caseDetail',['id'=>$prev['id']]); ?>">上一条</a>
                <ul id="ul1">
                    <li><?php echo $prev['title']; ?></li>
                </ul >
            <?php endif; if(!empty($next)): ?>
                <a id="xy" class="anniu-click" href="<?php echo url('index/caseDetail',['id'=>$next['id']]); ?>">下一条</a>
                <ul id="ul2">
                    <li><?php echo $next['title']; ?></li>
                </ul>
            <?php endif; ?>
        </div>
    </div>



</div>
<!--最后-->
<div class=" No6">
    <div>
        <?php foreach($contactList as $v): ?>
        <div class="xs">
            <img src="__ImagePath__<?php echo $v['url']; ?>">
            <p><?php echo $v['name']; ?></p>
            <p><?php echo $v['info']; ?></p>
        </div>
        <?php endforeach; ?>
        <div style="clear: both"></div>
    </div>
<div class="p">
    <p class="p1"><?php echo $info['power']; ?></p>
    <P class="p2"><?php echo $info['case_info']; ?></P>
    <div style="clear: both"></div>
</div>


</div>

<!--置顶-->

<div id="updown" >

</div>


<script>
    $(function(){
        $("#updown").css("top",window.screen.availHeight/2+190+"px");

        $('#updown').click(function(){$('html,body').animate({scrollTop: '0px'}, 800);});
    });

</script>


<script>
    var lb=document.getElementById("lb");
    lb.children[0].style.display="block";



</script>


</body>
</html>