<ul class="nav nav-tabs">
    {if condition="checkPath('cases/index')"}
    <li class="active"><a href="{:Url('cases/index')}">案例列表</a></li>
    {/if}
    {if condition="checkPath('cases/casesAdd')"}
    <li><a href="{:Url('cases/casesAdd')}">添加案例</a></li>
    {/if}
</ul>
 <div>
     <div class="cf well form-search row">

         <form  method="get">
             <div class="fl">
                 <div class="btn-group">
                     <input name="title" value="{:input('title')}" placeholder="主标题" class="form-control"  type="text">
                 </div>
                 <div class="btn-group layui-form">
                     <select name="cate_id" class="form-control">
                         <option value="">全部分类</option>
                         {foreach $cateList as $item}
                         <option value="{$item.id}" {if input('cate_id') == $item.id}selected{/if}>{$item.name}</option>
                         {/foreach}
                     </select>
                 </div>
                 <div class="btn-group">
                     <button type="submit" class="btn btn-success">查询</button>
                 </div>
             </div>
         </form>
     </div>
        <table class="table table-hover table-bordered table-list" id="menus-table">
            <thead>
            <tr>
                <th width="80">图片</th>
                <th width="80">主标题</th>
                <th width="80">排序<span order="sort" class="order-sort"> </span></th>
                <th width="80">分类</th>
                <th width="80">操作</th>
            </tr>
            </thead>
            <tbody>
            {foreach $list as $v}
                <tr>
                    <td><img class="mini-image" src="{$v.url?'__ImagePath__'.$v.url:''}" style="width:80px"></td>
                    <td>{$v.title}</td>
                    <td>
                        {if condition="checkPath('cases/inputCases')"}
                        <input class="form-control change-data short-input"  post-id="{$v.id}" post-url="{:url('cases/inputCases')}" data-name="sort" value="{$v.sort}">
                        {else}
                        {$v.sort}
                        {/if}
                    </td>
                    <td>{$v.name}</td>
                    <td>
                        {if condition="checkPath('cases/casesEdit',['id'=>$v['id']])"}
                        <a  href="{:url('cases/casesEdit',['id'=>$v['id']])}">编辑</a>
                        {/if}
                        {if condition="checkPath('cases/casesDelete',['id'=>$v['id']])"}
                            <a  class="span-post" post-msg="确定要删除吗" post-url="{:url('cases/casesDelete',['id'=>$v['id']])}">删除</a>
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