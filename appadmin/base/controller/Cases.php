<?php
/**
 * author: Lynn
 * since: 2018/3/23 13:05
 */
namespace admin\base\controller;


use admin\index\controller\BaseController;
use model\BaseCaseCategoryModel;
use model\BaseCaseModel;
use think\Config;
use think\Validate;


class Cases extends BaseController{

    private $roleValidate = ['title|案例名称' => 'require','sub_title|副标题' => 'require','cate_id|案例分类' => 'require','url|展示图片'=>'require'];
    //构造函数
    public function __construct()
    {
        parent::__construct();
    }

    //案例列表页
    public function index(){
        $orderBy  = 'sort asc';
        $where  = getWhereParam(['a.title'=>'like','a.cate_id'],$this->param);
        if(!empty($this->param['order'])) $orderBy = $this->param['order'].' '.$this->param['by'];

        $data['list'] = BaseCaseModel::alias('a')
            ->join('tp_base_case_category b','a.cate_id = b.id','left')
            ->where($where)
            ->field('a.*,b.name')
            ->order($orderBy)
            ->paginate($this->config_page,'',['query'=>$this->param]);
        $data['page']   = $data['list']->render();
        $data['cateList'] = BaseCaseCategoryModel::order('sort asc')->select();
        return view('index',$data);
    }

    //添加案例
    public function casesAdd(){
        if($this->request->isPost()){
            $validate = new Validate($this->roleValidate);
            if(!$validate->check($this->param)) return ['code' => 0, 'msg' => $validate->getError()];
            return operateResult(BaseCaseModel::create($this->param),'cases/index','add');
        }
        $data['cateList'] = BaseCaseCategoryModel::order('sort asc')->select();
        return view('casesAdd',$data);
    }

    //修改案例
    public function casesEdit(){
        $data['info'] = BaseCaseModel::get($this->id);
        if(!$data['info']) $this->error(lang('sys_param_error'));
        if($this->request->isPost()){
            $validate = new Validate($this->roleValidate);
            if(!$validate->check($this->param)) return ['code' => 0,'msg' => $validate->getError()];
            return operateResult($data['info']->save($this->param),'cases/index','edit');
        }
        $data['cateList'] = BaseCaseCategoryModel::order('sort asc')->select();
        return view('casesEdit',$data);
    }

    // 删除案例
    public function casesDelete(){
        if($this->request->isPost()) {
            $result = BaseCaseModel::get($this->id);
            if (empty($result)) return ['code' => 0, 'msg' => lang('sys_param_error')];
            @unlink(Config::get('upload.path').$result['url']);
            @unlink(Config::get('upload.path').$result['content_url']);
            return operateResult($result->delete(),'cases/index','del');
        }
        return ['code'=>0,'msg'=>lang('sys_method_error')];
    }

    // 排序案例
    public function inputCases(){
        if($this->request->isPost()) {
            $result = BaseCaseModel::get($this->id);
            if (empty($result)) return ['code' => 0, 'msg' => lang('sys_param_error')];
            $data = [$this->param['name'] => $this->param['data']];
            return inputResult($result->save($data),'sort');
        }
        return ['code'=>0,'msg'=>lang('sys_method_error')];
    }

}