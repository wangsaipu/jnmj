<?php
namespace app\cms\controller;
use app\cms\controller\CmsController;
use think\Db;

class DyHome extends cmsController
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
			$where['a.dy_name'] = array('like', '%'.$post['name'].'%');
			$this->assign('name', $post['name']);
		}
        
		$join = [

        ];
		$res  = db('dy_home')->field('a.*')->alias('a')->join($join)->where($where)->order('a.id')->paginate($searchSize,false,$post_val);

        $this->assign('pagenumber',($res->currentPage()-1)*$res->listRows());
        $this->assign('list',$res); 
        $this->assign('page',$res->render());
        $arr = ['序号','名称','别名','标题','描述','关键词','APP二维码','qq分享图片','微信分享图片'];
        $init_index = 1;   
        $this->assign('init_index',$init_index);
        $this->assign('edit_index',$init_index+count($arr));
        $this->assign('my_rule',
            [
                'showlist'=>$arr,
            ]
        );
        $this->assign('hidden_index',[4,5,6,7,8]);
        $this->assign('head_title','首页设置管理');
        return $this->fetch();
    }
                            
    public function update(){  
        if($this->request->isPost()){
            $post = $this->request->post();//dump($post);exit;
            $backurl = $post['backurl'];unset($post['backurl']);
            $id = $post['id'];unset($post['id']);
            unset($post['upload_dy_code']);
            unset($post['upload_dy_qq']);
            unset($post['upload_dy_weixin']);
            $post['dy_code'] = empty($post['dy_code'])?'':$post['dy_code'];
            $post['dy_qq'] = empty($post['dy_qq'])?'':$post['dy_qq'];
            $post['dy_weixin'] = empty($post['dy_weixin'])?'':$post['dy_weixin'];
            $data1 = db('dy_home')->where(['id'=>$id])->update($post);
            if ($data1 !== false) {
                $this->redirect($backurl);
            }else{
                $this->error('服务器繁忙');
            }
        }else{
            $get = $this->request->param();
            $info = db('dy_home')->where(['id'=>$get['id']])->find();
            $this->assign('info',$info);
            $this->assign('file_dir','dy_home'); //文件上传的文件夹
            $this->assign('file_upload_index',['dy_qq'=>'qq分享展示图(26*26)','dy_weixin'=>'微信朋友圈分享展示图(26*26)','dy_code'=>'APP二维码展示图(294*198)']);
            $this->assign('backurl',$this->backurl);
            $this->assign('head_title','修改首页设置信息');
            return $this->fetch();
        }
    }
    public function add(){
        if($this->request->isPost()){
            $post = $this->request->post();
            $backurl = $post['backurl'];unset($post['backurl']);
            unset($post['upload_dy_code']);
            unset($post['upload_dy_qq']);
            unset($post['upload_dy_weixin']);
            $post['dy_code'] = empty($post['dy_code'])?'':$post['dy_code'];
            $post['dy_qq'] = empty($post['dy_qq'])?'':$post['dy_qq'];
            $post['dy_weixin'] = empty($post['dy_weixin'])?'':$post['dy_weixin'];
            $data1 = db('dy_home')->insert($post);
            if ($data1 !== false) {
                $this->redirect($backurl);
            }else{
                $this->error('服务器繁忙');
            }
        }else{
            $this->assign('file_dir','dy_home'); //文件上传的文件夹
            $this->assign('file_upload_index',['dy_qq'=>'qq分享展示图(26*26)','dy_weixin'=>'微信朋友圈分享展示图(26*26)','dy_code'=>'APP二维码展示图(294*198)']);  //数据库中存储多文件的字段名
            $this->assign('backurl',$this->backurl);
            $this->assign('head_title','添加首页设置信息');
            return $this->fetch('add');         
        }

    }

    public function delete(){
        $get = $this->request->param();
        if (isset($get['idArr'])) {
            db()->startTrans();
            try{
                Db::table('dy_home')->where(['id'=>['in',$get['idArr']]])->delete();    
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