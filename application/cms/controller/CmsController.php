<?php
namespace app\cms\controller;
use think\Controller;
use think\Db;

class CmsController extends Controller
{
    protected $uid ;
    protected $controller_name;
    protected $action_name;
    protected $request;
    protected $backurl;
    public function _initialize () {
        //登录验证
        $this->request = request();
        $this->backurl = isset($this->request->header()['referer'])?$this->request->header()['referer']:$this->request->url();
        $this->uid = session('cmsuser')['id'];
        if(empty($this->uid)){
            $this->redirect('cms/Login/login');die();
        }  

        //公共参数
        $this->controller_name = $this->request->controller();
        $this->action_name = $this->request->action();
        $this->assign('controller__action',$this->controller_name.'__'.$this->action_name);
        $this->assign('controller__index',$this->controller_name.'__index');

        //
        $bid = session('cmsuser')['b_id'];
        $b_role = db('branch_role')->where(['bid'=>$bid])->column('rid');
        $this->assign('b_role',$b_role);
        header('Content-type: text/html; charset=UTF8');
    }

}