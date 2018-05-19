<?php
/**
 * author: Lynn
 * since: 2018/3/23 12:05
 */
namespace admin\base\controller;

use admin\index\controller\BaseController;
use model\BaseInfoModel;
use think\Validate;


class Info extends BaseController{
    private $roleValidate = ['heading|主标题' => 'require','eng_heading|英文标题' => 'require','sub_heading|副标题' => 'require','bg_url|背景图片' => 'require','logo_url|logo图片' => 'require','power|版权归属'=>'require','case_info|备案信息'=>'require'];
    //构造函数
    public function __construct(){
        parent::__construct();
    }

    //网站管理页
    public function index(){
        $this->id = $this->id ? $this->id : 1;
        $data['info'] = BaseInfoModel::get($this->id);
        if(!$data['info']) $this->error(lang('sys_param_error'));
        if($this->request->isPost()){
            $validate = new Validate($this->roleValidate);
            if(!$validate->check($this->param)) return ['code' => 0,'msg' => $validate->getError()];
            return operateResult($data['info']->save($this->param),'info/index','edit');
        }
        return view('index',$data);
    }


}