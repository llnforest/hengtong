<ul class="nav nav-tabs">
    {if condition="checkPath('partner/index')"}
    <li class="active"><a href="{:Url('partner/index')}">客户列表</a></li>
    {/if}
    {if condition="checkPath('partner/partnerAdd')"}
    <li><a href="{:Url('partner/partnerAdd')}">添加客户</a></li>
    {/if}
</ul>
 <div>
        <table class="table table-hover table-bordered table-list" id="menus-table">
            <thead>
            <tr>
                <th width="80">客户图片</th>
                <th width="80">排序<span order="sort" class="order-sort"> </span></th>
                <th width="80">操作</th>
            </tr>
            </thead>
            <tbody>
            {foreach $list as $v}
                <tr>
                    <td><img class="mini-image" src="{$v.url?'__ImagePath__'.$v.url:''}" style="width:80px"></td>
                    <td>
                        {if condition="checkPath('partner/inputPartner')"}
                        <input class="form-control change-data short-input"  post-id="{$v.id}" post-url="{:url('partner/inputPartner')}" data-name="sort" value="{$v.sort}">
                        {else}
                        {$v.sort}
                        {/if}
                    </td>
                    <td>
                        {if condition="checkPath('partner/partnerEdit',['id'=>$v['id']])"}
                        <a  href="{:url('partner/partnerEdit',['id'=>$v['id']])}">编辑</a>
                        {/if}
                        {if condition="checkPath('partner/partnerDelete',['id'=>$v['id']])"}
                            <a  class="span-post" post-msg="确定要删除吗" post-url="{:url('partner/partnerDelete',['id'=>$v['id']])}">删除</a>
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