<ul class="nav nav-tabs">
    {if condition="checkPath('caseCategory/index')"}
    <li class="active"><a href="{:Url('caseCategory/index')}">分类列表</a></li>
    {/if}
    {if condition="checkPath('caseCategory/categoryAdd')"}
    <li><a href="{:Url('caseCategory/categoryAdd')}">添加分类</a></li>
    {/if}
</ul>
 <div>
        <table class="table table-hover table-bordered table-list" id="menus-table">
            <thead>
            <tr>
                <th width="80">分类名称</th>
                <th width="80">排序<span order="sort" class="order-sort"> </span></th>
                <th width="80">操作</th>
            </tr>
            </thead>
            <tbody>
            {foreach $list as $v}
                <tr>
                    <td>{$v.name}</td>
                    <td>
                        {if condition="checkPath('caseCategory/inputCategory')"}
                        <input class="form-control change-data short-input"  post-id="{$v.id}" post-url="{:url('caseCategory/inputCategory')}" data-name="sort" value="{$v.sort}">
                        {else}
                        {$v.sort}
                        {/if}
                    </td>
                    <td>
                        {if condition="checkPath('caseCategory/categoryEdit',['id'=>$v['id']])"}
                        <a  href="{:url('caseCategory/categoryEdit',['id'=>$v['id']])}">编辑</a>
                        {/if}
                        {if condition="checkPath('caseCategory/categoryDelete',['id'=>$v['id']])"}
                            <a  class="span-post" post-msg="确定要删除吗" post-url="{:url('caseCategory/categoryDelete',['id'=>$v['id']])}">删除</a>
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