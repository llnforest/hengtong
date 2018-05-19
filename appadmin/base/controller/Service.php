<?php
/**
 * author: Lynn
 * since: 2018/3/23 13:05
 */
namespace admin\base\controller;

use admin\index\controller\BaseController;
use model\BaseServiceModel;
use think\Config;
use think\Validate;


class Service extends BaseController{

    private $roleValidate = ['name|业务名称' => 'require','url|icon图片' => 'require','sort|排序' => 'number'];
    //构造函数
    public function __construct()
    {
        parent::__construct();
    }

    //业务列表页
    public function index(){
        $orderBy  = 'sort asc';
        if(!empty($this->param['order'])) $orderBy = $this->param['order'].' '.$this->param['by'];

        $data['list'] = BaseServiceModel::order($orderBy)
            ->paginate($this->config_page,'',['query'=>$this->param]);
        $data['page']   = $data['list']->render();
        return view('index',$data);
    }

    //添加业务
    public function serviceAdd(){
        if($this->request->isPost()){
            $validate = new Validate($this->roleValidate);
            if(!$validate->check($this->param)) return ['code' => 0, 'msg' => $validate->getError()];
            return operateResult(BaseServiceModel::create($this->param),'service/index','add');
        }
        return view('serviceAdd');
    }

    //修改业务
    public function serviceEdit(){
        $data['info'] = BaseServiceModel::get($this->id);
        if(!$data['info']) $this->error(lang('sys_param_error'));
        if($this->request->isPost()){
            $validate = new Validate($this->roleValidate);
            if(!$validate->check($this->param)) return ['code' => 0,'msg' => $validate->getError()];
            return operateResult($data['info']->save($this->param),'service/index','edit');
        }
        return view('serviceEdit',$data);
    }

    // 删除业务
    public function serviceDelete(){
        if($this->request->isPost()) {
            $result = BaseServiceModel::get($this->id);
            if (empty($result)) return ['code' => 0, 'msg' => lang('sys_param_error')];
            @unlink(Config::get('upload.path').$result['url']);
            return operateResult($result->delete(),'service/index','del');
        }
        return ['code'=>0,'msg'=>lang('sys_method_error')];
    }

    // 排序业务
    public function inputService(){
        if($this->request->isPost()) {
            $result = BaseServiceModel::get($this->id);
            if (empty($result)) return ['code' => 0, 'msg' => lang('sys_param_error')];
            $data = [$this->param['name'] => $this->param['data']];
            return inputResult($result->save($data),'sort');
        }
        return ['code'=>0,'msg'=>lang('sys_method_error')];
    }

}