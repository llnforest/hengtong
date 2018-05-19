<?php
/**
 * author: Lynn
 * since: 2018/3/23 13:05
 */
namespace admin\base\controller;

use admin\index\controller\BaseController;
use model\BaseContactModel;
use think\Config;
use think\Validate;


class Contact extends BaseController{

    private $roleValidate = ['name|名称' => 'require','info|内容' => 'require','url|图片' => 'require'];
    //构造函数
    public function __construct()
    {
        parent::__construct();
    }

    //联系我们列表页
    public function index(){
        $orderBy  = 'sort asc';
        if(!empty($this->param['order'])) $orderBy = $this->param['order'].' '.$this->param['by'];

        $data['list'] = BaseContactModel::order($orderBy)
            ->paginate($this->config_page,'',['query'=>$this->param]);
        $data['page']   = $data['list']->render();
        return view('index',$data);
    }

    //添加联系我们
    public function contactAdd(){
        if($this->request->isPost()){
            $validate = new Validate($this->roleValidate);
            if(!$validate->check($this->param)) return ['code' => 0, 'msg' => $validate->getError()];
            return operateResult(BaseContactModel::create($this->param),'contact/index','add');
        }
        return view('contactAdd');
    }

    //修改联系我们
    public function contactEdit(){
        $data['info'] = BaseContactModel::get($this->id);
        if(!$data['info']) $this->error(lang('sys_param_error'));
        if($this->request->isPost()){
            $validate = new Validate($this->roleValidate);
            if(!$validate->check($this->param)) return ['code' => 0,'msg' => $validate->getError()];
            return operateResult($data['info']->save($this->param),'contact/index','edit');
        }
        return view('contactEdit',$data);
    }

    // 删除联系我们
    public function contactDelete(){
        if($this->request->isPost()) {
            $result = BaseContactModel::get($this->id);
            if (empty($result)) return ['code' => 0, 'msg' => lang('sys_param_error')];
            @unlink(Config::get('upload.path').$result['url']);
            return operateResult($result->delete(),'Contact/index','del');
        }
        return ['code'=>0,'msg'=>lang('sys_method_error')];
    }

    // 排序联系我们
    public function inputContact(){
        if($this->request->isPost()) {
            $result = BaseContactModel::get($this->id);
            if (empty($result)) return ['code' => 0, 'msg' => lang('sys_param_error')];
            $data = [$this->param['name'] => $this->param['data']];
            return inputResult($result->save($data),'sort');
        }
        return ['code'=>0,'msg'=>lang('sys_method_error')];
    }

}