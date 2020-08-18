<?php
namespace app\cms\controller;
use app\cms\controller\CmsController;
use think\Db;

class Item extends cmsController
{
    public function index(){
        $searchSize = 50;
        $post = $this->request->param();
        $post_val = array(
            'query' => $post,
        );
        $this->assign('searchSize',$searchSize);
        $res = db('cms_users')->alias('a')->field('a.*')->order('a.id desc')->where(array('b_id'=>'4'))->paginate($searchSize,false,$post_val);
        //var_dump($res);exit;

        //var_dump($kefu);die;

        $this->assign('pagenumber',$res->total()-($res->currentPage()-1)*$res->listRows());
        $this->assign('list',$res);
        $this->assign('page',$res->render());
        $arr = ['序号','姓名','空'];
        $init_index = 2;
        $this->assign('init_index',$init_index);
        $this->assign('edit_index',$init_index+count($arr));
        $this->assign('my_rule',
            [
                'showlist'=>$arr,
            ]
        );
        $this->assign('hidden_index',[3]);
        $this->assign('head_title','客户资料');


        return $this->fetch();
    }

 public function remove_class(){
        $get = $this->request->param();
        $id = $get['idArr'];
        if(isset($id)){
            $arr = explode(',', $id);
            $num = count($arr);
            $arr_name = db('cms_users')->field('name')->where("id in ($id)")->select();//客服名字
            $phone = db('excel_phone')->where(array('kid' => ''))->select();
            foreach($phone as $k=>$v){
                $i=$k%$num;
                db('excel_phone')->where(array('kid'=>'','id'=>$v['id']))->update(['kid' =>$arr_name[$i]['name']]);
            }
            $this->redirect($this->backurl);
        }else{
            $this->error('服务器繁忙');
        }

    }

}