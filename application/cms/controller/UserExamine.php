<?php
namespace app\cms\controller;
use app\cms\controller\CmsController;
use think\Db;

class UserExamine extends cmsController
{
    public function index(){
    	$searchSize = 10;
        $post = $this->request->post();
        $post_val = array(
            'query' => $post,
        );
        if (isset($post['searchSize'])) {
            $searchSize = $post['searchSize'];
        }
        $this->assign('searchSize',$searchSize);

        $where = [];
		if (isset($post['name']) && $post["name"]!=="") {
			$where['a.user_examine_name'] = array('like', '%'.$post['name'].'%');
			$this->assign('name', $post['name']);
		}
        if (isset($post['type']) && $post["type"]!=="") {
            $where['a.user_examine_status'] = $post['type'];
            $this->assign('type', $post['type']);
        }else{
            $where['a.user_examine_status'] = 0;
        }
		$join = [
            ['user u','u.id=a.user_id'],
        ];
		$res  = db('user_examine')->field('a.*')->alias('a')->join($join)->where($where)->order('a.id desc')->paginate($searchSize,false,$post_val);

        $this->assign('list',$res); 
        $this->assign('page',$res->render());
        $arr = ['用户ID','用户真实姓名','身份证地区','用户身份证号码','用户身份证照片','联系方式','用户相关证书文件','审核状态'];
        $init_index = 1;   
        $this->assign('init_index',$init_index);
        $this->assign('edit_index',$init_index+count($arr));
        $this->assign('my_rule',
            [
                'showlist'=>$arr,
            ]
        );
        $this->assign('hidden_index',[]);
        $this->assign('head_title','用户审核管理');
        return $this->fetch();
    }
                            
    public function update(){  
        if($this->request->isPost()){
            $post = $this->request->post();//dump($post);exit;
            $backurl = $post['backurl'];unset($post['backurl']);
            $id = $post['id'];unset($post['id']);
            $data1 = db('user_examine')->where(['id'=>$id])->update($post);
            if ($data1 !== false) {
                $this->redirect($backurl);
            }else{
                $this->error('服务器繁忙');
            }
        }else{
            $get = $this->request->param();
            $info = db('user_examine')->where(['id'=>$get['id']])->find();
            $this->assign('info',$info);

            $this->assign('backurl',$this->backurl);
            $this->assign('head_title','信息审核');
            return $this->fetch();
        }
    }

    public function delete(){
        $get = $this->request->param();
        if (isset($get['idArr'])) {
            db()->startTrans();
            try{
                Db::table('user_examine')->where(['id'=>['in',$get['idArr']]])->delete();    
                db()->commit();
                $this->redirect($this->backurl);
            }catch(\Exception $e){
                db()->rollback();
                throw $e;
                $this->error('服务器繁忙');
            }
        }
    }
}