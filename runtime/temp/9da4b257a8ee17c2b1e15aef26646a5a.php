<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\index\index.php";i:1524785424;s:69:"D:\wamp64\www\hengtong\admin/../appadmin/index\view\layouts\index.php";i:1524785424;}*/ ?>
<!DOCTYPE html>
<head>
    <title>后台管理系统</title>
    <meta charset="UTF-8"/>
    <link href="__PublicAdmin__/css/theme.min.css" rel="stylesheet">
    <link href="__PublicDefault__/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="__PublicAdmin__/css/index.min.css">
    <link href="__PublicAdmin__/css/common.css" rel="stylesheet">
</head>


<body style="min-width:900px;" screen_capture_injected="true">

<div id="loading"><i class="loadingicon"></i><span>正在加载...</span></div>
<div id="right_tools_wrapper">
   <span id="right_tools_clearcache" title="清除缓存" onclick="javascript:openapp('<?php echo Url('publics/clear')?>','index_clearcache','清除缓存');"><i class="fa fa-trash-o right_tool_icon"></i></span>
    <span id="refresh_wrapper" title="REFRESH_CURRENT_PAGE" ><i class="fa fa-refresh right_tool_icon"></i></span> </div>
<!--head-->

<div class="navbar">
    <div class="navbar-inner">

        <div class="container-fluid" >

            <a href="<?php echo url('index/index'); ?>" class="brand">
                <small>后台管理中心 </small>
            </a>
            <div class="pull-left nav_shortcuts" >
            </div>
            <!--顶部-->
            <ul id="myTabs" class="nav simplewind-nav pull-lift" style="margin-left: 48px;">
                <?php echo $menu['menuName']; ?>
            </ul>

            <ul class="nav simplewind-nav pull-right">
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" width="22" height="22" src="__PublicAdmin__/images/admin_logo.png" alt="admin">
                        <span class="user-info"> <?php echo $username; ?>，欢迎您 </span>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                        <li>
                            <a href="javascript:openapp('<?php echo Url('admin/password')?>','admin_password','修改密码');">
                                <i class="fa fa-user"></i> 修改密码
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Url('publics/logout')?>" data-method="post">
                                <i class="fa fa-sign-out"></i> 退出</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--head-->

<!--content-->
<div class="main-container container-fluid">
    <!--左下部-->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <a class="btn btn-small btn-warning" href="<?php echo url('index/index'); ?>" title="网站首页" >
                <i class="fa fa-home"></i>
            </a>

            <a class="btn btn-small btn-danger" href="javascript:openapp('<?php echo Url('publics/clear')?>','index_clearcache','清除缓存');" title="清除缓存">
                <i class="fa fa-trash-o"></i>
            </a>
        </div>
        <div class="nav_wraper">
            <?php echo $menu['menuHtml']; ?>
        </div>
    </div>

    <!--右下部-->
    <div class="main-content">
        <!--操作记录区-->
        <div class="breadcrumbs" id="breadcrumbs">
            <a id="task-pre" class="task-changebt">←</a>
            <div id="task-content">
                <ul class="macro-component-tab" id="task-content-inner">
                    <li class="macro-component-tabitem noclose" app-id="0" app-url="<?php echo Url('index/home')?>" app-name="首页"> <span class="macro-tabs-item-text">首页</span> </li>
                </ul>
                <div class="cf"></div>
            </div>
            <a id="task-next" class="task-changebt">→</a>
        </div>
        <!--内容区-->
        <div class="page-content" id="content">
            <iframe src="<?php echo Url('index/home')?>" style="width:100%;height: 100%;" frameborder="0" id="appiframe-0" class="appiframe"></iframe>
        </div>
    </div>
</div>
<!--<audio id="getNewOrder">-->
<!--    <source = src="__PublicAdmin__/music/order.mp3" type="audio/mp3">-->
<!--</audio>-->
<script src="__PublicAdmin__/js/jquery.min.js"></script>
<script src="__PublicAdmin__/js/bootstrap.min.js"></script>
<script src="__PublicAdmin__/js/jquery-1.8.0.min.js"></script>
<script src="__PublicAdmin__/js/index.js"></script>
<script>
    var ismenumin = $("#sidebar").hasClass("menu-min");
    $(".nav-list").on( "click",function(event) {
        var closest_a = $(event.target).closest("a");
        if (!closest_a || closest_a.length == 0) {
            return
        }
        if (!closest_a.hasClass("dropdown-toggle")) {
            if (ismenumin && "click" == "tap" && closest_a.get(0).parentNode.parentNode == this) {
                var closest_a_menu_text = closest_a.find(".menu-text").get(0);
                if (event.target != closest_a_menu_text && !$.contains(closest_a_menu_text, event.target)) {
                    return false
                }
            }
            return
        }
        var closest_a_next = closest_a.next().get(0);
        if (!$(closest_a_next).is(":visible")) {
            var closest_ul = $(closest_a_next.parentNode).closest("ul");
            if (ismenumin && closest_ul.hasClass("nav-list")) {
                return
            }
            closest_ul.find("> .open > .submenu").each(function() {
                if (this != closest_a_next && !$(this.parentNode).hasClass("active")) {
                    $(this).slideUp(150).parent().removeClass("open")
                }
            });
        }
        if (ismenumin && $(closest_a_next.parentNode.parentNode).hasClass("nav-list")) {
            return false;
        }
        $(closest_a_next).slideToggle(150).parent().toggleClass("open");
        return false;
    });
    <?php if(checkPath('reserve/order/index')): ?>
    var orderaudio = document.getElementById("getNewOrder");
    function getNewOrder(){
        $.ajax(
            {
                url : '<?=url("index/getNewOrder")?>',
                type : 'post',
                dataType : 'json',
                success : function (json)
                {
                    if(json.code == 1)
                        orderaudio.play();
                }
            });
        // audio.play();
    }
//    window.setInterval(getNewOrder, 60000);
    <?php endif; ?>
</script>

</body>
</html>







