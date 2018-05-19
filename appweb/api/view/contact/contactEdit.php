<ul class="nav nav-tabs">
    {if condition="checkPath('contact/index')"}
    <li><a href="{:Url('contact/index')}">联系列表</a></li>
    {/if}
    {if condition="checkPath('contact/contactAdd')"}
    <li><a href="{:Url('contact/contactAdd')}">添加联系</a></li>
    {/if}
    {if condition="checkPath('contact/contactEdit',['id'=>$info.id])"}
    <li class="active"><a href="{:Url('contact/contactEdit',['id'=>$info.id])}">修改联系</a></li>
    {/if}
</ul>
 <form  class="form-horizontal" action="{:url('contact/contactEdit',['id'=>$info.id])}" method="post">
    {include file="form:form_contact" /}
</form>
