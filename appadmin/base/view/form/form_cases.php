
<div class="col-sm-12">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>案例分类</th>
                <td>
                    <select name="cate_id" class="form-control text">
                        {foreach $cateList as $item}
                        <option value="{$item.id}" {if input('cate_id') == $item.id}selected{/if}>{$item.name}</option>
                        {/foreach}
                    </select>
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>案例标题</th>
                <td>
                    <input class="form-control text" type="text" name="title" value="{$info.title??''}" placeholder="主标题">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>副标题</th>
                <td class="layui-form">
                    <input class="form-control text" type="text" name="sub_title" value="{$info.sub_title??''}" placeholder="副标题">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>内容简介</th>
                <td>
                    <textarea class="form-control text" type="text" name="content" placeholder="内容简介">{$info.content??''}</textarea>
                </td>
            </tr>
            <tr>
                <th>展示图片</th>
                <td>
                    <button name="image" type="button" class="layui-btn upload" lay-data="{'url': '{:url('index/upload/image',['type'=>'cases'])}'}">
                        <i class="layui-icon">&#xe67c;</i>上传展示图片
                        <input class="image" type="hidden" name="url" value="{$info.url??''}">
                        <img class="mini-image {$info.url?'':'hidden'}" data-path="__ImagePath__" src="{$info.url?'__ImagePath__'.$info.url:''}">
                    </button>
                    <span class="red block">(图片建议大小 342*230)</span>
                </td>
            </tr>
            <tr>
                <th>内容图片</th>
                <td>
                    <button name="image" type="button" class="layui-btn upload" lay-data="{'url': '{:url('index/upload/image',['type'=>'cases'])}'}">
                        <i class="layui-icon">&#xe67c;</i>上传内容图片
                        <input class="image" type="hidden" name="content_url" value="{$info.content_url??''}">
                        <img class="mini-image {$info.content_url?'':'hidden'}" data-path="__ImagePath__" src="{$info.content_url?'__ImagePath__'.$info.content_url:''}">
                    </button>
                    <span class="red block">(图片建议大小 1238*3164)</span>
                </td>
            </tr>
            <tr>
                <th>案例排序</th>
                <td>
                    <input class="form-control text" type="text" name="sort" value="{$info.sort??''}" placeholder="案例排序">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">
                    <button type="button" class="btn btn-success form-post " >保存</button>
                    <a class="btn btn-default active" href="JavaScript:history.go(-1)">返回</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

