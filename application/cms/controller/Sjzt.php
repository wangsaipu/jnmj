<?php
namespace app\cms\controller;
use app\cms\controller\CmsController;
use think\Db;

class Sjzt extends cmsController
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
        if (isset($post['state']) && $post["state"]!=="") {
            $where['a.state'] = array('like', '%'.$post['state'].'%');
            $this->assign('state', $post['state']);
        }

        $join = [

        ];
        $res  = db('data_state')->field('a.*')->alias('a')->join($join)->where($where)->order('a.id')->paginate($searchSize,false,$post_val);
        //dump($res);die;
        $this->assign('pagenumber',($res->currentPage()-1)*$res->listRows());
        $this->assign('list',$res);
        $this->assign('page',$res->render());
        $arr = ['选择','序号','状态名称'];
        $init_index = 1;
        $this->assign('init_index',$init_index);
        $this->assign('edit_index',$init_index+count($arr));
        $this->assign('my_rule',
            [
                'showlist'=>$arr,
            ]
        );
        $this->assign('hidden_index',[]);
        $this->assign('head_title','数据状态设置');
        return $this->fetch();
    }

    public function update(){
        if($this->request->isPost()){
            $post = $this->request->post();//dump($post);exit;
            $backurl = $post['backurl'];unset($post['backurl']);
            $id = $post['id'];unset($post['id']);
            $post['state'] = empty($post['state'])?'':$post['state'];
            $data1 = db('data_state')->where(['id'=>$id])->update($post);
            if ($data1 !== false) {
                $this->redirect($backurl);
            }else{
                $this->error('服务器繁忙');
            }
        }else{
            $get = $this->request->param();
            $info = db('data_state')->where(['id'=>$get['id']])->find();
            $this->assign('info',$info);
            $this->assign('backurl',$this->backurl);
            $this->assign('head_title','修改数据状态信息');
            return $this->fetch();
        }
    }
    public function add(){
        if($this->request->isPost()){
            $post = $this->request->post();
            $backurl = $post['backurl'];unset($post['backurl']);
            $data1 = db('data_state')->insert($post);
            if ($data1 !== false) {
                $this->redirect($backurl);
            }else{
                $this->error('服务器繁忙');
            }
        }else{
            $this->assign('backurl',$this->backurl);
            $this->assign('head_title','添加数据状态信息');
            return $this->fetch('add');
        }

    }

    public function delete(){
        $get = $this->request->param();
        if (isset($get['idArr'])) {
            db()->startTrans();
            try{
                Db::table('data_state')->where(['id'=>['in',$get['idArr']]])->delete();
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