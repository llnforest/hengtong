<ul class="nav nav-tabs">
    {if condition="checkPath('service/index')"}
    <li class="active"><a href="{:Url('service/index')}">业务列表</a></li>
    {/if}
    {if condition="checkPath('service/serviceAdd')"}
    <li><a href="{:Url('service/serviceAdd')}">添加业务</a></li>
    {/if}
</ul>
 <div>
        <table class="table table-hover table-bordered table-list" id="menus-table">
            <thead>
            <tr>
                <th width="80">图片</th>
                <th width="80">名称</th>
                <th width="80">排序<span order="sort" class="order-sort"> </span></th>
                <th width="80">操作</th>
            </tr>
            </thead>
            <tbody>
            {foreach $list as $v}
                <tr>
                    <td><img class="mini-image" src="{$v.url?'__ImagePath__'.$v.url:''}" style="width:80px"></td>
                    <td>{$v.name}</td>
                    <td>
                        {if condition="checkPath('service/inputService')"}
                        <input class="form-control change-data short-input"  post-id="{$v.id}" post-url="{:url('service/inputService')}" data-name="sort" value="{$v.sort}">
                        {else}
                        {$v.sort}
                        {/if}
                    </td>
                    <td>
                        {if condition="checkPath('service/serviceEdit',['id'=>$v['id']])"}
                        <a  href="{:url('service/serviceEdit',['id'=>$v['id']])}">编辑</a>
                        {/if}
                        {if condition="checkPath('service/serviceDelete',['id'=>$v['id']])"}
                            <a  class="span-post" post-msg="确定要删除吗" post-url="{:url('service/serviceDelete',['id'=>$v['id']])}">删除</a>
                        {/if}
                    </td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
    <div class="text-center">
        {$page}
    </div>