<?php
namespace app\cms\controller;
use app\cms\controller\CmsController;
use think\Db;

class Worker extends cmsController
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
        $where['a.status'] = 1;
		if (isset($post['name']) && $post["name"]!=="") {
			$where['a.name'] = array('like', '%'.$post['name'].'%');
			$this->assign('name', $post['name']);
		}
        if (isset($post['cms_user_type_id']) && $post["cms_user_type_id"]!=="") {
            $where['a.b_id'] = $post['cms_user_type_id'];
            $this->assign('cms_user_type_id', $post['cms_user_type_id']);
        }
		$join = [
            ['branch t','t.id=a.b_id','left'],
        ];
		$res  = db('cms_users')->field('a.*,t.bmlx')->alias('a')->join($join)->where($where)->order('a.id desc')->paginate($searchSize,false,$post_val);
        //dump($List);exit;

        $this->assign('pagenumber',($res->currentPage()-1)*$res->listRows());
        $this->assign('list',$res);
        $this->assign('page',$res->render());
        $arr = ['序号','姓名','账号','性别','部门类型','电话号码','头像'];
        $init_index = 1;   
        $this->assign('init_index',$init_index);
        $this->assign('edit_index',$init_index+count($arr));
        $this->assign('my_rule',
            [
                'showlist'=>$arr,
            ]
        );
        $this->assign('head_title','职员管理');
        return $this->fetch();
    }
                            
    public function update(){  
        if($this->request->isPost()){
            $post = $this->request->post();//dump($post);exit;
            $backurl = $post['backurl'];unset($post['backurl']);
            $id = $post['id'];unset($post['id']);
            unset($post['upload_image']);
            $data1 = db('cms_users')->where(['id'=>$id])->update($post);
            if ($data1 !== false) {
                $this->redirect($backurl);
            }else{
                $this->error('服务器繁忙');
            }
        }else{
            $get = $this->request->param();
            $info = db('cms_users')->where(['id'=>$get['id']])->find();
            $this->assign('info',$info);
             $this->assign('file_dir','cms_users'); //文件上传的文件夹
            $this->assign('file_upload_index',['image'=>'头像展示图(294*198)']);  //数据库中存储多文件的字段名
            $this->assign('backurl',$this->backurl);
            $this->assign('head_title','修改职员');
            return $this->fetch('update');
        }
    }
    public function add(){
        if($this->request->isPost()){
            $post = $this->request->post();//dump($post);exit;
            $backurl = $post['backurl'];unset($post['backurl']);
            unset($post['upload_image']);
            $post['password'] = md5('123456');
            $post['is_admin'] = 1;
            $data1 = db('cms_users')->insert($post);
            if ($data1 !== false) {
                $this->redirect($backurl);
            }else{
                $this->error('服务器繁忙');
            }
        }else{
            $this->assign('file_dir','cms_users'); //文件上传的文件夹
            $this->assign('file_upload_index',['image'=>'头像展示图(294*198)']);  //数据库中存储多文件的字段名
            $this->assign('backurl',$this->backurl);
            $this->assign('head_title','添加职员');
            return $this->fetch('add');         
        }

    }

    public function reset_pwd(){
        $get = $this->request->param();
        // $info=db('cms_users')->where(array('id'=>$get['id']))->find();
        // $pwd=substr($info['password'],-6);

        $password = md5('123456');
        $data1 = db('cms_users')->where(['id'=>$get['id']])->update(['password'=>$password]);
        if ($data1 !== false) {
            $this->redirect('index');
        }else{
            $this->error('服务器繁忙');
        }
    }

    public function delete(){
    $get = $this->request->param();
    if (isset($get['idArr'])) {
        db()->startTrans();
        try{
            Db::table('cms_users')->where(['id'=>['in',$get['idArr']]])->update(['status'=>0]);    
            db()->commit();
        }catch(\Exception $e){
            db()->rollback();
            return 0;
        }
        return 1;

    }
}
}