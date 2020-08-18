<?php
namespace app\cms\controller;
use app\cms\controller\CmsController;
use think\Db;

class Consumer extends cmsController
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

        if(isset($post["keyword"]) && $post["keyword"]!==""){
            $where["a.keyword"] = array('like','%'.$post["keyword"].'%');
            $this->assign("keyword",$post["keyword"]);
        }
        if(isset($post["phonenum"]) && $post["phonenum"]!==""){
            $where["a.phonenum"] = array('like','%'.$post["phonenum"].'%');
            $this->assign("phone",$post["phonenum"]);
        }
        if(isset($post["state"]) && $post["state"]!==""){
            $where["a.state"] = array('like','%'.$post["state"].'%');
            $this->assign("state",$post["state"]);
        }
        $join = [
            ['lanmu l','l.id=a.lid'],
        ];
      
        //当天时间记录条数
        $start = date('Y-m-d 00:00:00',time());
        $end = date('Y-m-d 23:59:59',time());
        $count = db('excel_consumer')->where('createtime',['>',$start],['<',$end])->count();

        $res = db('excel_consumer')->alias('a')->field('a.*,l.lname')->join($join)->where($where)->order('a.id desc')->paginate($searchSize,false,$post_val);
        //var_dump($res);exit;
        $bmlx = db('branch')->field('bmlx,id')->where('id','in',[2,15])->select();
        $this->ld();
        //var_dump($kefu);die;
        $this->assign('pagenumber',$res->total()-($res->currentPage()-1)*$res->listRows());
        $this->assign('list',$res);
        $this->assign('page',$res->render());
        $arr = ['序号','姓名','手机号','QQ号码','微信号','职业','地区','来路','项目','时间','客服','数据状态','备注'];
        $init_index = 2;
        $this->assign('init_index',$init_index);
        $this->assign('edit_index',$init_index+count($arr));
        $this->assign('my_rule',
            [
                'showlist'=>$arr,
            ]
        );
        $this->assign('hidden_index',[5,6,7]);
        $this->assign('head_title','客户资料');
        $this->assign('bmlx',$bmlx);
        $this->assign('count',$count);
        return $this->fetch();
    }

    //联动
    public function ld(){
        $get=$this->request->param();
        $id = empty($get['id'])?'2':$get['id'];
        $kefu = db('cms_users')->field('name')->where(['b_id'=>$id])->select();
        $this->assign('kefu',$kefu);
    }

    //添加数据
    public function add(){
        if ($this->request->isPost()) {
            $post = $this->request->post();
            $backurl = $post['backurl'];
            unset($post['backurl']);
            $post['cname'] = empty($post['cname']) ? '' : $post['cname'];
            $post['phonenum'] = empty($post['phonenum'])?'':($post['phonenum']*8-6)*3+5;
            $post['tout'] = empty($post['tout']) ? '' : $post['tout'];
            $post['wx'] = empty($post['wx']) ? '' : $post['wx'];
            $post['job'] = empty($post['job']) ? '' : $post['job'];
            $post['place'] = empty($post['place']) ? '' : $post['place'];
            $post['road'] = empty($post['road']) ? '' : $post['road'];
            $post['createtime'] = date('Y-m-d H:i:s', time());
            $post['kid'] = empty($post['kid']) ? '' : $post['kid'];
            $post['state'] = empty($post['state']) ? '' : $post['state'];
            $post['beizhu'] = empty($post['beizhu']) ? '' : $post['beizhu'];
            //var_dump($post);die;
            $data1 = db('excel_consumer')->insert($post);
            if ($data1 !== false) {
                $this->redirect($backurl);
            } else {
                $this->error('服务器繁忙');
            }
        } else {
            $this->assign('file_dir', 'article'); //文件上传的文件夹
            $this->assign('file_upload_index', ['wz_img' => '标题展示图(294*198)']);  //数据库中存储多文件的字段名
            $this->assign('backurl', $this->backurl);
            $this->assign('head_title', '添加信息');
            return $this->fetch('add');
        }
    }

    //导出
    public function downLoad(){
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        date_default_timezone_set('Europe/London');
        
        if (PHP_SAPI == 'cli')
            die('This example should only be run from a Web Browser');
        $this->DIY();
        $post = $this->request->param();
        $where = [];
        if (!empty($post['ff_yue'])) {
            $where['createtime'] = ['like','%'.$post['ff_yue'].'%'];
        }
        if (!empty($post['state'])) {
            $where['state'] = ['like','%'.$post['state'].'%'];
        }
        $list = db('excel_consumer')->where($where)->order('id')->select();
        //var_dump($list);exit;
        import("PHPExcel.Classes.PHPExcel");
        $objPHPExcel = new \PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        $obj = $objPHPExcel->getActiveSheet();
        $obj->setTitle($post['ff_yue'].'--客户信息');


        $i=1;
        foreach($this->nav as $index=>$v){
            $obj->setCellValue($this->ZM[$index].$i, $v);
            foreach($this->bgcolor as $bgcolor=>$v){
                if(in_array($index, $v)){
                    $obj->getStyle($this->ZM[$index].$i)->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID);
                    $obj->getStyle($this->ZM[$index].$i)->getFill()->getStartColor()->setRGB($bgcolor);

                }
            }
            $obj->getStyle($this->ZM[$index].$i)->getAlignment()->setWrapText(true);
            $obj->getDefaultStyle()->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);

            // $obj->getColumnDimension($this->ZM[$index])->setAutoSize(true);
            // $obj->getColumnDimension($this->ZM[$index])->setWidth(12);


        }

        $i = 2;
        foreach($list as $info){
            foreach($this->col as $index=>$col_val){
                if($info[$col_val]==='0.0' || $info[$col_val]==='0'){
                    $val = '';
                }else{
                    $val = $info[$col_val];
                }
                $obj->setCellValue($this->ZM[$index].$i, $val);
            }
            $i++;
        }

       ob_end_clean();
        header("Content-type: application/vnd.ms-excel;charset=utf-8");
        header('Content-Disposition: attachment;filename="'.$post['ff_yue'].'--客户信息-客户.xls"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');
        // If you're serving to IE over SSL, then the following may be needed
        header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
        header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header ('Pragma: public'); // HTTP/1.0

        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }

    public function DIY(){
        //要导出的字段及索引
        $this->col_index = [
            'cname' => 0,
            'phonenum' => 1,
            'tout'=> 2,
            'wx'=> 3,
            'job'=>4,
            'place'=> 5,
            'road'=>6,
            'createtime'=>7,
            'kid'=>8,
            'state'=>9,
            'beizhu'=>10,
        ];
        $this->bgcolor_pyindex = 1;
        $this->bgcolor = [
           // 'E47EF2' =>[1,4,7],
           // '538DD5' =>[2,5,8],
           // 'FFFF00' =>[3,6,9],
        ];
        //菜单 键未索引
        $this->nav = [
            '姓名',
            '手机号码',
            'QQ号码',
            '微信号',
            '职业',
            '地区',
            '来路',
            '时间',
            '客服',
            '状态',
            '备注',
        ];
        $this->ZM = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
            'AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU',
        ];

        $this->col = [
            'cname',
            'phonenum',
            'tout' ,
            'wx',
            'job',
            'place',
            'road',
            'createtime',
            'kid',
            'state',
            'beizhu',
        ];
    }


    public function update(){
        if ($this->request->isPost()) {
            $post = $this->request->post();
            $backurl = $post['backurl'];
            Db::startTrans();
            try{
                unset($post['backurl']);
                $id = $post['id'];unset($post['id']);

                db('excel_consumer')->where(['id'=>$id])->update($post);
                Db::commit();
            }catch(\Exception $e){
                Db::rollback();
                $this->error('操作失败');
            }
            $this->redirect($backurl);
        }else{
            $get = $this->request->param();
            $info = db('excel_consumer')->where(['id'=>$get['id']])->find();
            $this->assign('info',$info);
            $this->assign('a',23);
            $this->assign('backurl',$this->backurl);
            return $this->fetch();
        }
    }

    public function remove_class(){
        $get=$this->request->param();
        $id = $get['idArr'];
        Db::startTrans();
        try {
            db::table('excel_consumer')->where(['id'=>['in',$id]])->delete();
            DB::commit();
            $this->redirect($this->backurl);
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
            $this->error('服务器繁忙');
        }
    }
    public function update_class(){
        $get=$this->request->param();
        $kid=$get['kefu'];
        $id = $get['idArr'];
        //var_dump($get);die;
        Db::startTrans();
        try {
            db::table('excel_consumer')->where(['id'=>['in',$id]])->update(['kid' =>$kid]);
            DB::commit();
            $this->redirect($this->backurl);
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
            $this->error('服务器繁忙');
        }
    }
}