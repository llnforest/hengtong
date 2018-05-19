
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>{$info.heading}</title>

    <link rel="stylesheet" href="__StaticStyle__/css/fullpage.css">
    <script src="__StaticStyle__/js/jquery.js"></script>
    <script src="__StaticStyle__/js/bootstrap.js"></script>
    <link href="__StaticStyle__/css/bootstrap.css" rel="stylesheet">
    <script src="__StaticStyle__/js/jquery.ui.js"></script>
    <script src="__StaticStyle__/js/jquery.fullpage.min.js"></script>





    <style>
        a{
            text-decoration: none;
        }
        #menu { margin:28px 0; padding: 0;  list-style-type: none; z-index: 70;
        float: right;}
        #menu li { float: left; font-size: 14px;margin-right: 70px;}
        #menu a {background: none; float: left; color: white; text-decoration: none;}
        #menu .active a { color: #2ba6e1;border-bottom:2px solid #2ba6e1;
        }
        .section { text-align: center; font: 50px "Microsoft Yahei"; color: #fff;margin: 0;}
        .section1{
            background: url(__ImagePath__{$info.bg_url}) no-repeat;
            background-size:cover;
        }

        @media (max-width: 769px) {
            .container{
                padding: 0;
            }
            #example-navbar-collapse{
                background: rgba(0, 0, 0, 0.64);
                width: 100%;
            }
            #menu li{
                width: 100%;
            }
            .logo>h1>a{
                margin-left: 15px;
            }
        }





        /*第一屏*/
        .dh1{
            font-size: 36px;position: relative;top:35px;
        }
        .dh2{
            font-size: 48px;    position: relative;
            top: 40px;margin: 0;
        }
        .dh3{
            font-size: 16px;    position: relative;
            top: 62px;
        }
        .dh4{
            list-style: none;    position: relative;
            top: 17%;
            border-radius:3px ;
            cursor: pointer;
            width:115px;margin:auto;border: 1px solid white;font-size: 14px;padding: 5px 15px;background: rgba(0,0,0,0.66)
        }
        .dh5{
            list-style: none;    position: relative;
            top: 30%;
        }

        @media (min-width: 600px){
            .logo{
                float: left;
            }
        }

        @keyframes mya {
            from{
               top:-200px;

            }
            to{
                top:35px;

            }
        }
        .dh1{
        animation: mya 0.7s linear both;
        }
        @keyframes mya1 {
            from{
                left: -70%;
                display: none;
            }
            to{
                left: 0;
                display: block;

            }
        }
        .dh2{
            animation: mya1 0.7s linear both;
        }
        @keyframes mya2 {
            from{
                right: -50%;
                display: none;
            }
            to{
                right: 0;
                display: block;
            }
        }
        .dh3{
            animation: mya2 0.7s linear both;
        }
        .wmyw1>span{
            border-bottom: 1px solid black;
            width: 100px;
            display: inline-block;
            margin-right: 10px;
            margin-left: 10px;
            vertical-align: middle;
        }

        @keyframes mya3 {
            from{
                top: 50%;
                display: none;
            }
            to{
                top: 17%;
                display: block;
            }
        }
        .dh4{
            animation: mya3 0.7s linear both;
        }
        @keyframes mya4 {
            from{
                top: 50%;
                display: none;
            }
            to{
                top: 30%;
                display: block;
            }
        }
        .dh5{
            animation: mya4 0.7s linear both;
        }
        @media (max-width: 769px) {
            .dh1{
                font-size: 20px;
            }
            .dh2{
                font-size: 25px;
            }
            .dh3{
                font-size: 14px;
                padding: 10px;
            }
                .dh5{
                    margin-top: -50px;
                }
        }

        /*第二屏*/
        .section2{
            background: url(__StaticStyle__/img/page02-bg.png) no-repeat;
            background-size:cover;
        }
        .wmyw{
            color: #26d5ff;
            /*position: absolute;
            top: 115px;*/
            font-size: 26px;
            width: 100%;text-align: center;
        }
        .wmyw1{
            color:#999999;
          /*  position: absolute;
            top: 160px;*/
            width: 100%;
            text-align:center;
            font-size: 14px;
            margin-bottom: 30px;
        }

        #tb .img{
            /*margin-top: 80px;*/
            position: relative;
            width: 90px;
            height: 90px;
            display: inline-block;
            background-size: 80% !important;
            background-position: 50% !important;
        }





        #tb div p{
            font-size: 20px;
            color: #000000;
            /*margin-top: 20px;*/
            position: relative;
        }

        @media (max-width: 769px){
            .wmyw{
                top: 110px;
            }
            .wmyw1{
                top:150px;
            }
            #tb .img{
                width: 65px;
                height: 63px;
                margin-top: 0;
            }
            #tb div p{
                font-size: 14px;
                color: #000000;
                margin-top: 0;
            }

            #tb{
                margin-top: 157px;
            }

        }
        .left1{
            left: -120%;
        }
        .left2{
            right: -120%;
        }


        /*第3屏*/
        .al1{
            width: 220px;
            height: 200px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            margin: 0 auto;
        }
        .al1 .js{

            position: absolute;
            bottom: 8%;
            left: 5%;
            font-size: 16px;
            font-weight: normal;
            color: #010101;

        }
        .al1 .xcx{

            position: absolute;
            bottom: -3%;
            left: 5%;
            font-size: 14px;
            color: #010101;

        }
        .al1 .yc{
            width: inherit;
            height: inherit;
            background: rgba(0, 0, 0, 0.36);
            visibility:visible;
            position: absolute;
            transition: all 1s;
            top:-100%;
            cursor: pointer;

        }
        .al1  .yc .xq{
            width: 134px;
            height: 42px;
            background: #2ba6e1;
            font-size: 14px;
            margin: auto;
            line-height: 42px;
            margin-top: 35%;
            border-radius: 30px;
        }



        .al1:hover .yc{
            visibility: visible;
            top:0;
            transition: all 1s;

        }
        .bj{
            margin-top: 20px;
            right: -130%;

        }
        .al2{
            background: white;
        }
        .al2:hover {
            background: #2ba6e1;
            transition: all 1s;
        }
        .al2:hover .al1 p{
            color: white;
            transition: all 1s;
        }
        #al{
            /*margin-top: 12%;*/
        }
      .more{
          width: 145px;
          height: 39px;
          margin: 20px auto 0;
          line-height: 38px;
          border: 2px dashed #2ba6e1;
          font-size: 18px;
          color: #2ba6e1;
          position: relative;
          top:100px;
          left: -130%;
          cursor: pointer;
      }

        @media (max-width: 769px){
            #al{
                /*margin-top: 50%;*/
                position: relative;
                top: 69px;
            }
            .bj{
                margin-top: 0;
            }
            .bj1{
                margin-top: 0;
            }
            .wmyw3{
                top:13%;
            }

            .wmyw2{
                top:19%;
                font-size: 14px;
            }
            .wmyw2 span{
                width: 80px;
            }
            .al1{
               width: 146px;
                height: 145px;

            }
           .al1 .js{
                font-size: 14px;
            }
            .al1 .xcx{
                font-size: 12px;
            }
            .more{
                width: 100px;

                font-size: 14px;
                height: 30px;
                line-height: 28px;
                top:53px;
            }
        }

        /*第4屏*/
        .NO4{
            background: url("__StaticStyle__/img/page04-bg.png")no-repeat;
            background-size: cover;

        }
        .hb{
            width: 200px;
            height: 200px;
            background: url("__StaticStyle__/img/linx8.png")no-repeat;
            background-size: 100%;
            margin: auto;
            line-height: 200px;
            text-align: center;
        }
        .hb2 img{
            width: 50px;
        }
        .hb1{
            margin-top:3% ;
            right: -100%;
        }
        .hb1-1{
            margin-top:3% ;
            left: -100%;
        }
        .hb2{
            position: relative;
            top: 27px;
        }

      .hb1:hover{
          transition: all 1s;
          transform: rotate(360deg);
      }
        .hb1-1:hover{
            transition: all 1s;
            transform: rotate(360deg);
        }

        @media (max-width: 769px) {
            .hb{
                width: 110px;
                height: 110px;
                line-height: 100px;
            }
            .NO4 .wmyw1{
                font-size: 12px;
            }
            .hb1{
                position: relative;
                top: 23px;
                margin-top: 5px;
            }
            .hb1-1{
                position: relative;
                top: 23px;
                margin-top: 5px;
            }

            .hb>img{
                width: 35%;
            }
        }

        /*第五屏*/
        .No5{
            background: url("__StaticStyle__/img/page05-bg.png")no-repeat;
            background-size: cover;
        }
            .No5 p{
                margin: auto;
                width: 63%;
                font-size: 18px;
                color: #000000;
                text-align: center;
                line-height: 40px;
                padding: 0;
                display: none;

            }
        .wom{
            position: relative;
            /*margin-top: 6%;*/
        }
        .ht{
            /*margin-top: 20px;*/
            display: none;
            position: relative;
            top: 45px;
        }
        .ht img{
        width: 450px;
        }

        @media (max-width: 769px) {
            .No5 p{
                margin: auto;
                width: 100%;
                font-size: 12px;
                color: #000000;
                text-align: center;
                line-height: 21px;
                padding: 0;
            }
            .wom{
                padding: 0 10px;
                top: 69px;
            }
            .ht{

                top: 52px;
            }

            .ht img{
                width: 200px;
            }

        }

    /*第6屏*/
        .No6{
            background: url("__StaticStyle__/img/page06-bg.png")no-repeat;
            background-size: cover;
            color: white;
        }
        .No6 h3{
            color: white;
        }
        .No6 h3 span{
            border: 1px solid white;
        }
        .ewm{
            text-align: center;
            margin-top: 10%;
        }
        .ewm img{
            width: 192px;
            height: 192px;

        }
        .xs{
            width: 33.3%;
            float: left;
            margin-top: 130px;
        }
        .xs p{
            font-size: 20px;
            margin-top: 15px;
        }
        @media (max-width: 769px) {
                    .ewm{
                        margin-top: 200px;
                    }
            .xs p{
                font-size: 12px;
            }
            .xs img{
                width: 45px;
            }
            .xs{
                margin-top: 80px;
            }

        }


        .No6 .p{
            margin-top: 9%;

        }


        .No6 .p p{
            width: 50%;

            float: left;
            font-size: 12px;
            padding: 0 20px;
        }
        .No6 .p .p1{
            text-align: right;
        }
        .No6 .p .p2{
            text-align:left;
        }

        @media (max-width: 769px) {

            .xs p{
                font-size: 12px;
            }
            .xs img{
                width: 35px;
                height: 35px;
            }
            .xs{
                margin-top: 27px;
            }
            .No6 .p .p1{
                width: 100%;
                float: none;
                text-align: center;
            }
            .No6 .p .p2{
                width: 100%;
                float: none;
                text-align: center;
            }
            .No6 .p p{
                padding: 0 3px;
            }
            .No6 .p{
                margin-top: 0px;
            }

        }


    </style>

<script>

    $(document).ready(function() {
        $.fn.fullpage({
            slidesColor: ['', '', '#f2f2f2', '',''],
            paddingTop: '20px',
            anchors: ['page1', 'page2', 'page3', 'page4','page5','page6'],
            menu: '#menu',
            afterLoad: function(anchorLink, index){
                    if(index == 2){
                        $('.section2').find('.left1').delay(100).animate({
                            left: '0'
                        }, 1500, 'easeOutExpo');

                        $('.section2').find('.left2').delay(100).animate({
                            right: '0'
                        }, 1500, 'easeOutExpo');
                    }

                    if(index == 3){
                        $('.section3').find('.bj').delay(200).animate({
                            right: '0'
                        }, 1500, 'easeOutExpo');
                        $('.section3').find('.bj1').delay(200).animate({
                            left: '0'
                        }, 1500, 'easeOutExpo');
                        $('.section3').find('.more').delay(200).animate({
                            left: '0'
                        }, 1500, 'easeOutExpo');
                    }
                    if(index == 4){
                        $('.section4').find('.hb1').delay(0).animate({
                            right: '0'
                        }, 1000, 'easeOutExpo');
                        $('.section4').find('.hb1-1').delay(0).animate({
                            left: '0'
                        }, 1000, 'easeOutExpo');
                    }
                if(index == 5){
                    $('.section5').find('p').fadeIn(3000);
                    $('.section5').find('.ht').fadeIn(3000);
                }
                },
                onLeave: function(index, direction){
                    // if(index == '1'){
                    //     $('.section1').find('.dh1').delay(200).animate({
                    //         right: '-100%'
                    //     }, 1500, 'easeOutExpo');
                    //
                    // }

                    if(index == '2'){
                        $('.section2').find('.left1').delay(100).animate({
                            left: '-120%'
                        }, 1500, 'easeOutExpo');
                        $('.section2').find('.left2').delay(100).animate({
                            right: '-120%'
                        }, 1500, 'easeOutExpo');
                    }

                    if(index == '3'){
                        $('.section3').find('.bj').delay(200).animate({
                            right: '-130%'
                        }, 1500, 'easeOutExpo');
                        $('.section3').find('.bj1').delay(200).animate({
                            left: '-130%'
                        }, 1500, 'easeOutExpo');
                        $('.section3').find('.more').delay(200).animate({
                            left: '-130%'
                        }, 1500, 'easeOutExpo');
                    }

                    if(index == '4'){
                        $('.section4').find('.hb1').delay(100).animate({
                            right: '-100%'
                        }, 1000, 'easeOutExpo');
                        $('.section4').find('.hb1-1').delay(100).animate({
                            left: '-100%'
                        }, 1000, 'easeOutExpo');
                    }

                    if(index == '5'){
                        $('.section5').find('p').fadeOut(100);
                        $('.section5').find('.ht').fadeOut(100);
                    }
                }




    });
    });



</script>



</head>

<body>



    {include file="public:header"}

    <!--第一屏-->

    <div class="section section1">

        <h3 class="dh1">{$info.heading}</h3>
        <p class="dh2" >{$info.eng_heading}</p>
        <p class="dh3" >{$info.sub_heading}</p>
        <li data-menuanchor="page5" class="dh4"><a href="#page5" style="color: white">About  Us</a></li>

        <li class="dh5" data-menuanchor="page2"><a href="#page2" ><img src="__StaticStyle__/img/down.png" style="width: 30px;"> </a></li>

    </div>

    <!--第二屏-->
    <div class="section section2" id="yw2">
        <h3 class="wmyw" >我们的业务</h3>

        <h3 class="wmyw1" >
            <span></span>OUR BUAINESS<span></span></h3>

        <div class="container yw">
            <div class="row" id="tb">
                {foreach $serviceList as $v}
                <div class="col-xs-6 col-md-3 left1" >
                    <div class="img" style="background: url(__ImagePath__{$v.url}) no-repeat;background-size: 100%;" ></div>
                    <p>{$v.name}</p>
                </div>
                {/foreach}
            </div>
        </div>
    </div>





    <!--第4屏-->
    <div class="section section3">

        <h3 class="wmyw wmyw3" >案例欣赏</h3>

        <h3 class="wmyw1 wmyw2" >
            <span ></span>CASE  APPRECIATION<span></span></h3>

        <div class="container">
            <div class="row" id="al">
                {foreach $caseList as $v}
                <a href="{:url('index/caseDetail',['id'=>$v.id])}">
                    <div class="col-xs-6 col-md-4 bj" >
                        <div class="al1 al2">
                            <div class="al1" style="background: url(__ImagePath__{$v.url}) no-repeat;background-size: 100%;">
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

            <a href="{:url('index/caseList')}" style="text-decoration: none"> <p class="more" style="background: white"> MORE <span style="margin-left: 4px"> > </span></p></a>

        </div>

       <!--<a href="ziye-case-all.html"> <p class="more"> MORE <span style="margin-left: 15px"> > </span></p></a>-->



    </div>


    <!--第4屏-->
    <div class="section section4 NO4">
        <h3 class="wmyw wmyw3" >合作伙伴</h3>

        <h3 class="wmyw1 wmyw2" >
            <span ></span>COOPERAYIVE  PARTNER<span></span></h3>

        <div class="container">
            <div class="row hb2">
                {foreach $partnerList as $v}
                <div class="col-xs-6 col-md-3 hb1">
                    <div class="hb"><img src="__ImagePath__{$v.url}"></div>
                </div>
                {/foreach}
            </div>

        </div>
    </div>

    <!--第5屏-->
    <div class="section section5 No5">
        <h3 class="wmyw wmyw3" >关于我们</h3>

        <h3 class="wmyw1 wmyw2" >
            <span ></span>ABOUT  US<span></span></h3>
        <div class="wom">
        {$info.description}
        </div>

        <div class="ht"><img src="__ImagePath__{$info.sub_url}"> </div>

    </div>

    <!--第6屏-->
    <div class="section  No6">
        <h3 class="wmyw wmyw3" >联系我们</h3>
        <h3 class="wmyw1 wmyw2" >
            <span ></span>CONTACT  US<span></span></h3>
        <div class="ewm">
            <img src="__ImagePath__{$info.qr_url}">
        </div>

        <div class="dizhi">
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









</body>
</html>


