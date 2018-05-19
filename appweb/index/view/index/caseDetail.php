<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>案例|{$case.title}</title>
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
{include file="public:header"}
<!--第二 背景-->

<div class="bj-img">

</div>
<!--内容-->

<div class="center">
    <div id="lb">
        <div class="center1">
            <img src="__ImagePath__{$case.content_url}">
            <div class="center2">
                <h3>{$case.title}</h3>
                <p class="xian"></p>
                <p class="zi">{$case.content}</p>
            </div>
        </div>
    </div>


    <div class="anniu">
        <div class="left">
            <i>标签 ：</i><i class="i1">{$case.name}</i>

        </div>
        <div class="right">
            {if !empty($prev)}
                <a id="sy" class="anniu-click" href="{:url('index/caseDetail',['id'=>$prev.id])}">上一条</a>
                <ul id="ul1">
                    <li>{$prev.title}</li>
                </ul >
            {/if}
            {if !empty($next)}
                <a id="xy" class="anniu-click" href="{:url('index/caseDetail',['id'=>$next.id])}">下一条</a>
                <ul id="ul2">
                    <li>{$next.title}</li>
                </ul>
            {/if}
        </div>
    </div>



</div>
<!--最后-->
<div class=" No6">
    <div>
        {foreach $contactList as $v}
        <div class="xs">
            <img src="__ImagePath__{$v.url}">
            <p>{$v.name}</p>
            <p>{$v.info}</p>
        </div>
        {/foreach}
        <div style="clear: both"></div>
    </div>
<div class="p">
    <p class="p1">{$info.power}</p>
    <P class="p2">{$info.case_info}</P>
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