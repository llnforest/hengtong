<ul class="nav nav-tabs">
    {if condition="checkPath('cases/index')"}
    <li><a href="{:Url('cases/index')}">案例列表</a></li>
    {/if}
    {if condition="checkPath('cases/casesAdd')"}
    <li class="active"><a href="{:Url('cases/casesAdd')}">添加案例</a></li>
    {/if}
    
</ul>
 <form  class="form-horizontal" action="{:url('cases/casesAdd')}" method="post">
    {include file="form:form_cases" /}
</form>
