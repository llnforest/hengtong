<ul class="nav nav-tabs">
    {if condition="checkPath('caseCategory/index')"}
    <li><a href="{:Url('caseCategory/index')}">分类列表</a></li>
    {/if}
    {if condition="checkPath('caseCategory/categoryAdd')"}
    <li class="active"><a href="{:Url('caseCategory/categoryAdd')}">添加分类</a></li>
    {/if}
    
</ul>
 <form  class="form-horizontal" action="{:url('caseCategory/categoryAdd')}" method="post">
    {include file="form:form_category" /}
</form>
