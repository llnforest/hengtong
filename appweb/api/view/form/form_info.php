
<div class="col-sm-12">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>主标题</th>
                <td>
                    <input class="form-control text" type="text" name="heading" value="{$info.heading??''}" placeholder="主标题">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>英文标题</th>
                <td class="layui-form">
                    <input class="form-control text" type="text" name="eng_heading" value="{$info.eng_heading??''}" placeholder="英文标题">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>副标题</th>
                <td class="layui-form">
                    <input class="form-control text" type="text" name="sub_heading" value="{$info.sub_heading??''}" placeholder="副标题">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>版权归属</th>
                <td>
                    <input class="form-control text" type="text" name="power" value="{$info.power??''}" placeholder="版权归属">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>备案信息</th>
                <td>
                    <input class="form-control text" type="text" name="case_info" value="{$info.case_info??''}" placeholder="备案信息">
                    <span class="form-required">*</span>
                </td>
            </tr>
            <tr>
                <th>logo图片</th>
                <td>
                    <button name="image" type="button" class="layui-btn upload" lay-data="{'url': '{:url('index/upload/image',['type'=>'info'])}'}">
                        <i class="layui-icon">&#xe67c;</i>上传logo图片
                        <input class="image" type="hidden" name="logo_url" value="{$info.logo_url??''}">
                        <img class="mini-image {$info.logo_url?'':'hidden'}" data-path="__ImagePath__" src="{$info.logo_url?'__ImagePath__'.$info.logo_url:''}">
                    </button>
                    <span class="red block">(图片建议大小 120*40)</span>
                </td>
            </tr>
            <tr>
                <th>背景图片</th>
                <td>
                    <button name="image" type="button" class="layui-btn upload" lay-data="{'url': '{:url('index/upload/image',['type'=>'info'])}'}">
                        <i class="layui-icon">&#xe67c;</i>上传背景图
                        <input class="image" type="hidden" name="bg_url" value="{$info.bg_url??''}">
                        <img class="mini-image {$info.bg_url?'':'hidden'}" data-path="__ImagePath__" src="{$info.bg_url?'__ImagePath__'.$info.bg_url:''}">
                    </button>
                    <span class="red block">(图片建议大小 1920*1200)</span>
                </td>
            </tr>
            <tr>
                <th>宣传图片</th>
                <td>
                    <button name="image" type="button" class="layui-btn upload" lay-data="{'url': '{:url('index/upload/image',['type'=>'info'])}'}">
                        <i class="layui-icon">&#xe67c;</i>上传宣传图片
                        <input class="image" type="hidden" name="sub_url" value="{$info.sub_url??''}">
                        <img class="mini-image {$info.sub_url?'':'hidden'}" data-path="__ImagePath__" src="{$info.sub_url?'__ImagePath__'.$info.sub_url:''}">
                    </button>
                    <span class="red block">(图片建议大小 713*80)</span>
                </td>
            </tr>
            <tr>
                <th>二维码</th>
                <td>
                    <button name="image" type="button" class="layui-btn upload" lay-data="{'url': '{:url('index/upload/image',['type'=>'info'])}'}">
                        <i class="layui-icon">&#xe67c;</i>上传二维码图片
                        <input class="image" type="hidden" name="qr_url" value="{$info.qr_url??''}">
                        <img class="mini-image {$info.qr_url?'':'hidden'}" data-path="__ImagePath__" src="{$info.qr_url?'__ImagePath__'.$info.qr_url:''}">
                    </button>
                    <span class="red block">(图片建议大小 192*192)</span>
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

