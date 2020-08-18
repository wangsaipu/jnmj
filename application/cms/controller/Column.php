<?php
namespace app\cms\controller;
use app\cms\controller\CmsController;
use think\Db;

class Column extends cmsController
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
			$where['c.column_name'] = array('like', '%'.$post['name'].'%');
			$this->assign('name', $post['name']);
		}
		$join = [
            ['classify c','c.id=a.classify_id'],
        ];
		$res  = db('column')->field('a.*,c.column_name')->alias('a')->join($join)->where($where)->order('a.id desc')->paginate($searchSize,false,$post_val);

        $this->assign('pagenumber',($res->currentPage()-1)*$res->listRows());
        $this->assign('list',$res);
        $this->assign('page',$res->render());
        $arr = ['序号','栏目名','栏目别名','栏目目录','栏目关键词','栏目描述'];
        $init_index = 2;   
        $this->assign('init_index',$init_index);
        $this->assign('edit_index',$init_index+count($arr));
        $this->assign('my_rule',
            [
                'showlist'=>$arr,
            ]
        );
        $this->assign('hidden_index',[5]);
        $this->assign('head_title','栏目信息');
        return $this->fetch();
    }
                            
    public function update(){  
        if($this->request->isPost()){
            $post = $this->request->post();//dump($post);exit;
            $backurl = $post['backurl'];unset($post['backurl']);
            $id = $post['id'];unset($post['id']);
            $data1 = db('column')->where(['id'=>$id])->update($post);
            if ($data1 !== false) {
                $this->redirect($backurl);
            }else{
                $this->error('服务器繁忙');
            }
        }else{
            $get = $this->request->param();
            $join = [
                ['classify c','c.id=a.classify_id'],
            ];
            $info = db('column')->alias('a')->field('a.*,c.column_name')->join($join)->where(['a.id'=>$get['id']])->find();
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
            $data1 = db('column')->insert($post);
            if ($data1 !== false) {
                $this->redirect($backurl);
            }else{
                $this->error('服务器繁忙');
            }
        }else{
            $arrid = db('column')->column('classify_id');
            $arr = $this->get_array(0);
            $this->assign('str',$arr[0]);
            $this->assign('backurl',$this->backurl);
            $this->assign('head_title','添加栏目信息');
            return $this->fetch('add');         
        }

    }

    public function delete(){
        $get = $this->request->param();
        if (isset($get['idArr'])) {
            db()->startTrans();
            try{
                Db::table('column')->where(['id'=>['in',$get['idArr']]])->delete();    
                db()->commit();
                $this->redirect($this->backurl);
            }catch(\Exception $e){
                db()->rollback();
                throw $e;
                $this->error('服务器繁忙');
            }
        }
    }
    function get_array($id=0,$number=0){ //查询option
        $data = db('classify')->field('id,pid,path,column_name')->where(['pid'=>$id])->select();
        $str = '';
        $number++;
        if (!empty($data)) {
            foreach ($data as $k => $rows) {
                $str .= '<option value="'.$rows['id'].'" ';
                if (!empty($rows['path'])) {
                    $str .= 'disabled';
                }
                $str .= '>';
                $temp = $number;
                for ($i=1; $i < $temp; $i++) { 
                    $str .= '--';
                }
                $str .= $rows['column_name'].'</option>';
                $arr = $this->get_array($rows['id'],$number); //调用函数，传入参数，继续查询下级 
                $str .= $arr[0];
            } 
            return [$str,$number]; 
        }
    }

}