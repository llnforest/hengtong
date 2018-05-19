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
{include file="public:header"}



<div class="bj-img">

</div>


<!--内容-->
<div class="center1">

    <div class="center2">


    <ul class="btn">
        <li data-cate="0" class="active">全部</li>
        {foreach $cateList as $v}
        <li data-cate="{$v.id}">{$v.name}</li>
        {/foreach}
    </ul>

    <ul class="box">
        <li>
            <div class="box1">
                <div class="box2">
                    <div class="container " style="width: 100%">
                        {foreach $list as $v}
                        <a href="{:url('index/caseDetail',['id'=>$v.id])}">
                            <div class="col-xs-6 col-md-4">
                                <div class="anl1 anl">
                                    <div class="anl1" style="background: url(__ImagePath__{$v.url}) no-repeat;background-size: 100%;">
                                         <p class="js">{$v.title}</p>
                                         <p class="xcx">{$v.sub_title}</p>
                                         <div class="yc">
                                            <p class="xq">查看详情</p>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        {/foreach}
                    </div>

                </div>

            </div>

            <div class="fy" >
            <div>
                <div class="juzhon">
                    <p class="prev"></p>
                    {for start="1" end="$total+1"}
                    <p class="cr" data-page="{$i}">{$i}</p>
                    {/for}
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

        var case_url = '{:url("index/caseDetail","","")}';

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
                url: "{:url('api/index/caseList')}",
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