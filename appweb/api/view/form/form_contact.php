
<div class="col-sm-12">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>联系方式</th>
                <td>
                    <input class="form-control text" type="text" name="name" value="{$info.name??''}" placeholder="联系方式">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>联系信息</th>
                <td>
                    <input class="form-control text" type="text" name="info" value="{$info.info??''}" placeholder="联系信息">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>联系图片</th>
                <td>
                    <button name="image" type="button" class="layui-btn upload" lay-data="{'url': '{:url('index/upload/image',['type'=>'contact'])}'}">
                        <i class="layui-icon">&#xe67c;</i>上传图片
                        <input class="image" type="hidden" name="url" value="{$info.url??''}">
                        <img class="mini-image {$info.url?'':'hidden'}" data-path="__ImagePath__" src="{$info.url?'__ImagePath__'.$info.url:''}">
                    </button>
                </td>
            </tr>
            <tr>
                <th>排序</th>
                <td>
                    <input class="form-control text" type="text" name="sort" value="{$info.sort??''}" placeholder="排序">
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

