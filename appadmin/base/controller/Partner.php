<?php
/**
 * author: Lynn
 * since: 2018/3/23 12:05
 */
namespace admin\base\controller;

use admin\index\controller\BaseController;
use model\BasePartnerModel;
use think\Config;
use think\Validate;


class Partner extends BaseController{
    private $roleValidate = ['url|图片' => 'require','sort|排序' => 'number'];
    //构造函数
    public function __construct(){
        parent::__construct();
    }

    //合作客户列表页
    public function index(){
        $orderBy  = 'sort asc';
        if(!empty($this->param['order'])) $orderBy = $this->param['order'].' '.$this->param['by'];

        $data['list'] = BasePartnerModel::order($orderBy)
            ->paginate($this->config_page,'',['query'=>$this->param]);
        $data['page']   = $data['list']->render();
        return view('index',$data);
    }

    //添加合作客户
    public function partnerAdd(){
        if($this->request->isPost()){
            $validate = new Validate($this->roleValidate);
            if(!$validate->check($this->param)) return ['code' => 0, 'msg' => $validate->getError()];
            return operateResult(BasePartnerModel::create($this->param),'partner/index','add');
        }
        return view('partnerAdd');
    }

    //修改合作客户
    public function partnerEdit(){
        $data['info'] = BasePartnerModel::get($this->id);
        if(!$data['info']) $this->error(lang('sys_param_error'));
        if($this->request->isPost()){
            $validate = new Validate($this->roleValidate);
            if(!$validate->check($this->param)) return ['code' => 0,'msg' => $validate->getError()];
            return operateResult($data['info']->save($this->param),'partner/index','edit');
        }
        return view('partnerEdit',$data);
    }

    // 删除合作客户
    public function partnerDelete(){
        if($this->request->isPost()) {
            $result = BasePartnerModel::get($this->id);
            if (empty($result)) return ['code' => 0, 'msg' => lang('sys_param_error')];
            @unlink(Config::get('upload.path').$result['url']);
            return operateResult($result->delete(),'partner/index','del');
        }
        return ['code'=>0,'msg'=>lang('sys_method_error')];
    }

    // 排序合作客户
    public function inputPartner(){
        if($this->request->isPost()) {
            $result = BasePartnerModel::get($this->id);
            if (empty($result)) return ['code' => 0, 'msg' => lang('sys_param_error')];
            $data = [$this->param['name'] => $this->param['data']];
            return inputResult($result->save($data),'sort');
        }
        return ['code'=>0,'msg'=>lang('sys_method_error')];
    }

}