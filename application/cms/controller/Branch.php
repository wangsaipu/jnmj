<?php
// 部门分配管理
namespace app\cms\controller;
use app\cms\controller\CmsController;
use think\Db;

class Branch extends cmsController
{
	public function index(){
        $searchSize = 50;
        $post = $this->request->param();
        $post_val = array(
            'query' => $post,
        );
        if (isset($post['searchSize'])) {
            $searchSize = $post['searchSize'];
            //dump($searchSize);exit;
        }
        $this->assign('searchSize',$searchSize);
        $where = [];
        if (isset($post['name']) && $post['name'] !== '') {
            $where['a.bmlx'] = array('like','%'.$post['name'].'%');
            $this->assign('name',$post['name']);
        }
        $join = [

        ];
        $res = db('branch')->alias('a')->field('a.*')->join($join)->where($where)->order('a.id')->paginate($searchSize,false,$post_val);
        $this->assign('pagenumber',($res->currentPage()-1)*$res->listRows());
        $this->assign('list',$res);
        $this->assign('page',$res->render());
        $arr = ['序号','ID','类型名'];
        $init_index = 1;   
        $this->assign('init_index',$init_index);
        $this->assign('edit_index',$init_index+count($arr));
        $this->assign('my_rule',
            [
                'showlist'=>$arr,
            ]
        );
        $this->assign('head_title','部门管理');
        return $this->fetch();
	}

    public function add_bmlx(){
        if ($this->request->isPost()) {
            $post = $this->request->post();
            $data = db('branch')->insert($post);
            if ($data !== false) {
                $this->redirect('index');
            }else{
                $this->error('服务器繁忙');
            }
        }else{
            $this->error('访问路径错误');
        }
    }

    public function update_bmlx(){
        if ($this->request->isPost()) {
            $post = $this->request->post();
            $id = $post['id'];unset($post['id']);
            $data = db('branch')->where(['id'=>$id])->update($post);
            if ($data !== false) {
                $this->redirect('index');
            }else{
                $this->error('服务器繁忙');
            }
        }else{
            $this->error('访问路径错误');
        }
    }

    public function role_node(){
        if ($this->request->isPost()) {
            $post = $this->request->post();
            $backurl = $post['backurl'];unset($post['backurl']);
            $id = $post['id'];unset($post['id']);
            Db::startTrans();
            try{
                $noderes = Db::table('branch_role')->where(['bid'=>$id])->column('rid');
                $deleteIdArr = array_diff($noderes,$post['node']); //要更新为无效状态的
                $addIdArr = array_diff($post['node'],$noderes);  //要创建的
   
                if(!empty($deleteIdArr)){
                    Db::table('branch_role')->where(['rid'=>['in',$deleteIdArr]])->delete();
                }
                if(!empty($addIdArr)){
                    $data = [];
                    foreach($addIdArr as $k=>$v){
                        $data[$k]['bid'] = $id;
                        $data[$k]['rid'] = $v;
                    }
                    Db::table('branch_role')->insertAll($data);
                }
                Db::commit();    
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
                throw $e;
                $this->error('服务器繁忙');
            }
            $this->redirect($backurl);
        }else{
            $get = $this->request->param();
            $arr = db('branch_role')->where(['bid'=>$get['id']])->column('rid');
            $this->assign('id',$get['id']);
            $this->assign('arr',$arr);
            $this->assign('backurl',$this->backurl);
            return $this->fetch();
        }
    }
}