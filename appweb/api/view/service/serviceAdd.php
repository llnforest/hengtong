<ul class="nav nav-tabs">
    {if condition="checkPath('service/index')"}
    <li><a href="{:Url('service/index')}">业务列表</a></li>
    {/if}
    {if condition="checkPath('service/serviceAdd')"}
    <li class="active"><a href="{:Url('service/serviceAdd')}">添加业务</a></li>
    {/if}
    
</ul>
 <form  class="form-horizontal" action="{:url('service/serviceAdd')}" method="post">
    {include file="form:form_service" /}
</form>
