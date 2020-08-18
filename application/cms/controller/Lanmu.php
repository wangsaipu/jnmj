<?php
namespace app\cms\controller;
use app\cms\controller\CmsController;
use think\Db;

class Lanmu extends cmsController
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
            $where['a.lname'] = array('like', '%'.$post['name'].'%');
            $this->assign('name', $post['name']);
        }

        $join = [

        ];
        $res  = db('lanmu')->field('a.*')->alias('a')->join($join)->where($where)->order('a.id')->paginate($searchSize,false,$post_val);
        //dump($res);die;
        $this->assign('pagenumber',($res->currentPage()-1)*$res->listRows());
        $this->assign('list',$res);
        $this->assign('page',$res->render());
        $arr = ['选择','序号','项目名称','PC网址','移动端网址'];
        $init_index = 1;
        $this->assign('init_index',$init_index);
        $this->assign('edit_index',$init_index+count($arr));
        $this->assign('my_rule',
            [
                'showlist'=>$arr,
            ]
        );
        $this->assign('hidden_index',[]);
        $this->assign('head_title','首页设置管理');
        return $this->fetch();
    }

    public function update(){
        if($this->request->isPost()){
            $post = $this->request->post();//dump($post);exit;
            $backurl = $post['backurl'];unset($post['backurl']);
            $id = $post['id'];unset($post['id']);
            $post['lname'] = empty($post['lname'])?'':$post['lname'];
            $post['pcurl'] = empty($post['pcurl'])?'':$post['pcurl'];
            $post['murl'] = empty($post['murl'])?'':$post['murl'];
            $data1 = db('lanmu')->where(['id'=>$id])->update($post);
            if ($data1 !== false) {
                $this->redirect($backurl);
            }else{
                $this->error('服务器繁忙');
            }
        }else{
            $get = $this->request->param();
            $info = db('lanmu')->where(['id'=>$get['id']])->find();
            $this->assign('info',$info);
            $this->assign('backurl',$this->backurl);
            $this->assign('head_title','修改栏目信息');
            return $this->fetch();
        }
    }
    public function add(){
        if($this->request->isPost()){
            $post = $this->request->post();
            $backurl = $post['backurl'];unset($post['backurl']);
            $data1 = db('lanmu')->insert($post);
            if ($data1 !== false) {
                $this->redirect($backurl);
            }else{
                $this->error('服务器繁忙');
            }
        }else{
            $this->assign('backurl',$this->backurl);
            $this->assign('head_title','添加栏目设置信息');
            return $this->fetch('add');
        }

    }

    public function delete(){
        $get = $this->request->param();
        if (isset($get['idArr'])) {
            db()->startTrans();
            try{
                Db::table('lanmu')->where(['id'=>['in',$get['idArr']]])->delete();
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