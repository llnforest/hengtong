<ul class="nav nav-tabs">
    {if condition="checkPath('partner/index')"}
    <li><a href="{:Url('partner/index')}">客户列表</a></li>
    {/if}
    {if condition="checkPath('partner/partnerAdd')"}
    <li><a href="{:Url('partner/partnerAdd')}">添加客户</a></li>
    {/if}
    {if condition="checkPath('partner/partnerEdit',['id'=>$info.id])"}
    <li class="active"><a href="{:Url('partner/partnerEdit',['id'=>$info.id])}">修改客户</a></li>
    {/if}
</ul>
 <form  class="form-horizontal" action="{:url('partner/partnerEdit',['id'=>$info.id])}" method="post">
    {include file="form:form_partner" /}
</form>
