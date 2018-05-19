
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
                    <h1><a href="{:url('index/index')}#page1"><img class="img11" src="__ImagePath__{$info.logo_url}"></a></h1>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-collapse" style="margin-left: 0;">
                    <ul class="navbar-nav" id="menu" style="float: right;list-style: none;">
                        <li data-menuanchor="page1" {if empty($nav)}class="active"{/if}><a href="{:url('index/index')}#page1">首页</a></li>
                        <li data-menuanchor="page2"><a href="{:url('index/index')}#page2">业务</a></li>
                        <li data-menuanchor="page3" {if !empty($nav) && $nav == 'case'}class="active"{/if}><a {if empty($nav)}href="{:url('index/index')}#page3"{/if}>案例</a></li>
                        <li data-menuanchor="page4"><a href="{:url('index/index')}#page4">客户</a></li>
                        <li data-menuanchor="page5"><a href="{:url('index/index')}#page5">关于</a></li>
                        <li data-menuanchor="page6"><a href="{:url('index/index')}#page6">联系我们</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>