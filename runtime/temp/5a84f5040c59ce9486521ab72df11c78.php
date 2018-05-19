<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"D:\wamp64\www\hengtong\web/../appweb/index\view\index\caseList.php";i:1526395824;s:65:"D:\wamp64\www\hengtong\web/../appweb/index\view\public\header.php";i:1526387006;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>案例</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title></title>
    <link rel="stylesheet" href="__StaticStyle__/css/bootstrap.css">
    <!--引用bootstrap框架需要用的js文件-->
    <script src="__StaticStyle__/js/jquery-3.2.1.js"></script>
    <!--引用bootstrap框架的js文件-->
    <script src="__StaticStyle__/js/bootstrap.js"></script>
    <link rel="stylesheet" href="__StaticStyle__/css/style2.css">

</head>
<body>
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



<div class="bj-img">

</div>


<!--内容-->
<div class="center1">

    <div class="center2">


    <ul class="btn">
        <li data-cate="0" class="active">全部</li>
        <?php foreach($cateList as $v): ?>
        <li data-cate="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></li>
        <?php endforeach; ?>
    </ul>

    <ul class="box">
        <li>
            <div class="box1">
                <div class="box2">
                    <div class="container " style="width: 100%">
                        <?php foreach($list as $v): ?>
                        <a href="<?php echo url('index/caseDetail',['id'=>$v['id']]); ?>">
                            <div class="col-xs-6 col-md-4">
                                <div class="anl1 anl">
                                    <div class="anl1" style="background: url(__ImagePath__<?php echo $v['url']; ?>) no-repeat;background-size: 100%;">
                                         <p class="js"><?php echo $v['title']; ?></p>
                                         <p class="xcx"><?php echo $v['sub_title']; ?></p>
                                         <div class="yc">
                                            <p class="xq">查看详情</p>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>

                </div>

            </div>

            <div class="fy" >
            <div>
                <div class="juzhon">
                    <p class="prev"></p>
                    <?php $__FOR_START_615__=1;$__FOR_END_615__=$total+1;for($i=$__FOR_START_615__;$i < $__FOR_END_615__;$i+=1){ ?>
                    <p class="cr" data-page="<?php echo $i; ?>"><?php echo $i; ?></p>
                    <?php } ?>
                    <p class="next"></p>
                </div>
            </div>

            </div>
        </li>
    </ul>

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


<script>
    $(function(){
        $(".btn li").click(function(){
            $(this).addClass("active").siblings().removeClass("active");
            renderCase(1);
        });

        // 第1页
        $(".cr").eq(0).addClass("active");
        $('.juzhon').on("click",".cr",function () {
            if($(this).hasClass("active")) return false;
            $(".box2").eq($(this).index()-1).fadeIn().siblings().fadeOut();
            $(this).addClass("active").siblings().removeClass("active");
            x=$(this).index()-1;
            renderCase(0);
        });
        var x=0;
        $('.juzhon').on("click",".prev",function () {
            x--;
            if(x<0){
                x=$(".juzhon .cr").length-1;
            }
            $(".box2").fadeOut().fadeIn();
            $(".cr").eq(x).addClass("active").siblings().removeClass("active");
            renderCase(0);
        });
        $('.juzhon').on("click",".next",function () {
            x++;
            if(x>$('.juzhon .cr').length-1){
                x=0
            }
            $(".box2").fadeOut().fadeIn();
            $(".cr").eq(x).addClass("active").siblings().removeClass("active");
            renderCase(0);
        })

        var case_url = '<?php echo url("index/caseDetail","",""); ?>';

        //渲染分页
        function renderCase(is_cate){
            is_cate = is_cate || 0;
            var cate_id = $(".btn li.active").attr("data-cate");
            if(is_cate != 0){
                var page = 1;
            }else{
                var page = $(".cr.active").attr("data-page");
            }
            $.ajax({
                type: "POST",
                url: "<?php echo url('api/index/caseList'); ?>",
                data: {page:page, cate_id:cate_id,is_cate:is_cate},
                dataType: "json",
                success: function(data){
                    var html = '';
                    $.each(data.data.list, function(k, v){
                        html += '<a href="'+case_url+'/id/'+v.id+'">'
                                    +'<div class="col-xs-6 col-md-4">'
                                    +'<div class="anl1 anl">'
                                    +'<div class="anl1" style="background: url(__ImagePath__'+v.url+') no-repeat;background-size: 100%;">'
                                    +'<p class="js">'+v.title+'</p>'
                                    +'<p class="xcx">'+v.sub_title+'</p>'
                                    +'<div class="yc">'
                                    +'<p class="xq">查看详情</p>'
                                    +'</div></div></div></div>'
                                    +'</a>';
                    });
                    $('.box2 .container').html(html);
                    //触发点击标签
                    if(is_cate == 1){
                        if(data.data.total > 0){
                            var pageHtml = '<p class="prev"></p>';
                            for(i=1;i<= data.data.total;i++){
                                pageHtml += '<p class="cr" data-page="'+i+'">'+i+'</p>';
                            }
                            pageHtml += '<p class="next"></p>';
                        }else{
                            var pageHtml = '';
                        }
                        $('.juzhon').html(pageHtml);
                        $(".cr").eq(0).addClass("active");
                    }
                }
            });
        }
    })


</script>

</body>
</html>