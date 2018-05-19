<ul class="nav nav-tabs">
    {if condition="checkPath('contact/index')"}
    <li class="active"><a href="{:Url('contact/index')}">联系列表</a></li>
    {/if}
    {if condition="checkPath('contact/contactAdd')"}
    <li><a href="{:Url('contact/contactAdd')}">添加联系</a></li>
    {/if}
</ul>
 <div>
        <table class="table table-hover table-bordered table-list" id="menus-table">
            <thead>
            <tr>
                <th width="80">图片</th>
                <th width="80">联系方式</th>
                <th width="80">联系信息</th>
                <th width="80">排序<span order="sort" class="order-sort"> </span></th>
                <th width="80">操作</th>
            </tr>
            </thead>
            <tbody>
            {foreach $list as $v}
                <tr>
                    <td><img class="mini-image" src="{$v.url?'__ImagePath__'.$v.url:''}" style="width:80px"></td>
                    <td>{$v.name}</td>
                    <td>{$v.info}</td>
                    <td>
                        {if condition="checkPath('contact/inputContact')"}
                        <input class="form-control change-data short-input"  post-id="{$v.id}" post-url="{:url('contact/inputContact')}" data-name="sort" value="{$v.sort}">
                        {else}
                        {$v.sort}
                        {/if}
                    </td>
                    <td>
                        {if condition="checkPath('contact/contactEdit',['id'=>$v['id']])"}
                        <a  href="{:url('contact/contactEdit',['id'=>$v['id']])}">编辑</a>
                        {/if}
                        {if condition="checkPath('contact/contactDelete',['id'=>$v['id']])"}
                            <a  class="span-post" post-msg="确定要删除吗" post-url="{:url('contact/contactDelete',['id'=>$v['id']])}">删除</a>
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