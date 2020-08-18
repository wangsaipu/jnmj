<?php
namespace app\cms\controller;
use app\cms\controller\CmsController;
use think\Db;

class CmsUser extends CmsController {
	public function _initialize() {
		parent::_initialize();
	}
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
        $where['is_admin'] = 1;
		if (isset($post['username'])) {
			$where['u.name'] = array('like', '%'.$post['username'].'%');
			$this->assign('username', $post['username']);
		}
		$userList  = db('cms_users')->where($where)->alias('u')->paginate($searchSize,false,$post_val);
        $this->assign('list', $userList);

        $arr = ['ID','用户名','用户角色'];
        $init_index = 2;   

        //$this->assign('hidden_index',[4,5,6,7,8,9,10]);//要隐藏$arr数组索引值 
        $this->assign('init_index',$init_index);//初始索引值
        $this->assign('edit_index',$init_index+count($arr));
        $this->assign('my_rule',
            [
                'showlist'=>$arr,
            ]
        );
        $this->assign('page',$userList->render());
		return $this->fetch();
	}
	

	public function add(){
		if($this->request->isPost()){
			$post = $this->request->post();//dump($post);exit;
			$backurl = $post['backurl'];unset($post['backurl']);
			$id = $post['id'];unset($post['id']);
			$post['is_admin'] = 1;
			Db::startTrans();
			try{
				Db::table('cms_users')->where(['id'=>$id])->update($post);
				Db::commit();
			}catch(\Exception $e){
				Db::rollback();
				$this->error('操作失败');
			}
			$this->redirect($backurl);
		}else{
			$this->assign('backurl',$this->backurl);
			return $this->fetch('add');			
		}

	}
	public function update() {
		if ($this->request->isPost()) {
			$backurl = $this->request->post('backurl');
			Db::startTrans();
			try{
				$post = $this->request->post();
				unset($post['backurl']);
				$id = $post['id'];unset($post['id']);
				Db::table('cms_users')->where(['id'=>$id])->update($post);
				Db::commit();
			}catch(\Exception $e){
				Db::rollback();
				$this->error('操作失败');
			}
			$this->redirect($backurl);	
		} else {
			$user = null;
			$id = input('id');
			if (isset($id)) {
				$user = db('cms_users')->where(array('id'=>$id))->find();
			 	$this->assign('info', $user);
				$this->assign('backurl',$this->backurl);
				return $this->fetch();	
			}
		}
	}
	public function mypass(){
		if($this->request->isPost()){
			$post = $this->request->post();//dump($post);exit;
			$backurl = $post['backurl'];unset($post['backurl']);
			$pass['password']=md5($post['password']);
			db('cms_users')->where(['id'=>$post['id']])->update($pass);
			return $this->redirect('login/login');

		}else{
			$id = session('cmsuser')['id'];
			$userList  = db('cms_users')->where(['id'=>$id])->find();
	        $this->assign('backurl',$this->backurl);
			$this->assign('user',$userList);
			return $this->fetch();
		}
		

	}
	public function myimage(){
       if($this->request->isPost()){
            $post = $this->request->post();//dump($post);exit;
			$backurl = $post['backurl'];unset($post['backurl']);
			unset($post['upload_image']);
			db('cms_users')->where(array('id'=>$post['id']))->update($post);
			$this->redirect($backurl);
        }else{
        	$id = session('cmsuser')['id'];
        	$res = db('cms_users')->where(array('id'=>$id))->find();
        	$this->assign('info',$res);
            $this->assign('backurl',$this->backurl);  //会跳的url地址
            $this->assign('file_dir','cms_users'); //文件上传的文件夹
           	$this->assign('file_upload_index',['image'=>'上传头像']);
            return $this->fetch('myimage');
        }
    }
	public function resetpassword() {
		$get = $this->request->param();//dump($get);exit;

		$pass='123456';
		$password['password']=md5($pass);
		db('cms_users')->where(['id'=>$get['id']])->update($password);
		return $this->redirect('index');

	}
	
	public function delete() {
		$get = $this->request->param();
		if (isset($get['idArr'])) {
			db()->startTrans();
			try{
				db('cms_users')->where(['id'=>['in',$get['idArr']]])->update(['is_admin'=>0]);
				$where['userid'] = ['in',$get['idArr']];
				db('cms_role_user')->where($where)->delete();	
				db()->commit();
			}catch(\Exception $e){
				db()->rollback();
				return 0;
			}
			return 1;

		}
	}
	
}
?>