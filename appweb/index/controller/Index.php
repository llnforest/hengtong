<?php
/**
 * author: Lynn
 * since: 2018/3/23 13:05
 */
namespace web\index\controller;

use chromephp\chromephp;
use model\BaseCaseCategoryModel;
use model\BaseCaseModel;
use model\BaseContactModel;
use model\BaseInfoModel;
use model\BasePartnerModel;
use model\BaseServiceModel;


class Index extends BaseController{

    //构造函数
    public function __construct()
    {
        parent::__construct();
    }

    //官网列表页
    public function index(){
        $data['info'] = BaseInfoModel::get(1);//官网信息
        $data['info']['bg_url'] = str_replace('\\','/',$data['info']['bg_url']);
        $data['serviceList'] = BaseServiceModel::order('sort asc')->limit(8)->select();//业务列表
        foreach($data['serviceList'] as $v){
            $v['url'] = str_replace('\\','/',$v['url']);
        }
        $data['caseList'] = BaseCaseModel::order('sort asc')->limit(6)->select();//案例列表
        foreach($data['caseList'] as $v){
            $v['url'] = str_replace('\\','/',$v['url']);
        }
        $data['partnerList'] = BasePartnerModel::order('sort asc')->limit(8)->select();//合作伙伴
        $data['contactList'] = BaseContactModel::order('sort asc')->limit(3)->select();//联系我们
        chromephp::info($data);
        return view('index',$data);
    }

    //案例列表
    public function caseList(){
        $data['info'] = BaseInfoModel::get(1);//官网信息
        $data['contactList'] = BaseContactModel::order('sort asc')->limit(3)->select();//联系我们
        $data['list'] = BaseCaseModel::order('sort asc')
            ->limit(6)
            ->select();
        foreach($data['list'] as $v){
            $v['url'] = str_replace('\\','/',$v['url']);
        }
        $count = BaseCaseModel::count();
        $data['total'] = ceil($count/6);
        $data['cateList'] = BaseCaseCategoryModel::order('sort asc')->limit(4)->select();
        $data['nav'] = 'case';
        return view('caseList',$data);
    }

    //案例详情
    public function caseDetail(){
        $data['info'] = BaseInfoModel::get(1);//官网信息
        $data['contactList'] = BaseContactModel::order('sort asc')->limit(3)->select();//联系我们
        $data['case'] = BaseCaseModel::alias('a')->join('tp_base_case_category b','a.cate_id = b.id','left')->field('a.*,b.name')->where(['a.id'=>$this->id])->find();
        $where = empty($this->param['cate_id'])?[]:['cate_id'=>$this->param['cate_id']];
        $caseList = BaseCaseModel::where($where)->order('sort asc')->select();
        foreach($caseList as $k => $v){
            if($v['id'] == $this->id){
                $sort = $k;
                break;
            }
        }
        if(!empty($caseList[$k-1])) $data['prev'] = $caseList[$k-1];
        if(!empty($caseList[$k+1])) $data['next'] = $caseList[$k+1];
        $data['nav'] = 'case';
        return view('caseDetail',$data);
    }

}