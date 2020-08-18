<?php
namespace app\cms\controller;
use app\cms\controller\CmsController;
use think\Db;

class Member extends cmsController
{
	public function index(){
	    $time1='2018-09-01';
        $time2=date('Y-m-d 23:59:59',time());
        $searchSize = 50;
        $post = $this->request->param();
        $post_val = array(
            'query' => $post,
        );
        if (isset($post['searchSize'])) {
            $searchSize = $post['searchSize'];
            //dump($searchSize);exit;
        }
        if(isset($post["time1"]) && $post["time1"]!==""){
            $time1 = $post['time1'];
            $this->assign("time1",$time1);
        }

        if(isset($post["time2"]) && $post["time2"]!==""){
            $time2 = $post['time2'];
            $this->assign("time2",$time2);
        }

        $this->assign('searchSize',$searchSize);
        $where = [];
        if(isset($post["name"]) && $post["name"]!==""){
            $where["a.name"] = array('like','%'.$post["name"].'%');
            $this->assign("name",$post["name"]);
        }

        if(isset($post["phone"]) && $post["phone"]!==""){
            $where["((a.phone-5)/3+6)/8"] = array('like','%'.$post["phone"].'%');
            // var_dump($i);die;

            $this->assign("phone",$post["phone"]);
        }
      

        if(isset($post["kid"]) && $post["kid"]!==""){
            $where["a.kid"] = array('like','%'.$post["kid"].'%');
            $this->assign("kid",$post["kid"]);
        }
        $join = [
             ['lanmu l','l.id=a.lid'],
        ];
        //当天时间记录条数
        $start = date('Y-m-d 00:00:00',time());
        $end = date('Y-m-d 23:59:59',time());
        $count = db('member')->where('createtime',['>',$start],['<',$end])->count();
        $res = db('member')->alias('a')->field('a.*,l.lname')->join($join)->where($where)->where('createtime',['>',$time1],['<',$time2],'and')->order('a.id desc')->paginate($searchSize,false,$post_val);
        foreach($res as $k=>$v) {
            if(!empty($v['phone'])){

               $i =(($v['phone']-5)/3+6)/8;
                $v['phone1'] = substr_replace($i,'****',3,4);
                $v['phone'] = (($v['phone']-5)/3+6)/8;
            }else{
                $v['phone']='';
            }
            $res[$k]=$v;
        }
        //dump($res);die;
        //下拉客服
        $bmlx = db('branch')->field('bmlx,id')->where('id','in',[2,15,20])->select();

        //下拉客服姓名
        $kefu_arr = db('cms_users')->field('name')->where('b_id','in',[2,15,20])->select();
        $this->ld();
        $this->assign('pagenumber',$res->total()-($res->currentPage()-1)*$res->listRows());
        $this->assign('list',$res);
        $this->assign('page',$res->render());
        $arr = ['序号','时间','姓名','手机号码','ip地址','关键词','来路渠道','来路URL','项目','端口','客服','数据状态','留言','备注'];
        $init_index = 2;   
        $this->assign('init_index',$init_index);
        $this->assign('edit_index',$init_index+count($arr));
        $this->assign('my_rule',
            [
                'showlist'=>$arr,
            ]
        );
        $this->assign('hidden_index',[7]);
        $this->assign('head_title','客户资料');
        $this->assign('bmlx',$bmlx);
        $this->assign('kefu_arr',$kefu_arr);
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
            // '姓名','手机号','QQ号码','微信号','地区','来路','时间','客服','数据状态','备注'
            $post['name'] = empty($post['name']) ? '' : $post['name'];
          
            $post['phone'] = empty($post['phone'])?'':($post['phone']*8-6)*3+5;
            $post['Antecedents'] = empty($post['Antecedents']) ? '' : $post['Antecedents'];
            $post['url'] = empty($post['url']) ? '' : $post['url'];
            $post['keyword'] = empty($post['keyword']) ? '' : $post['keyword'];
            $post['lid'] = empty($post['lid']) ? '' : $post['lid'];
            $post['port'] = empty($post['port']) ? '' : $post['port'];
            $post['state'] = empty($post['state']) ? '' : $post['state'];
            $post['beizhu'] = empty($post['beizhu']) ? '' : $post['beizhu'];
            $post['createtime'] = date('Y-m-d H:i:s', time());
            //dump($post);die;
            $data1 = db('member')->insert($post);
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




    public function update(){
        if ($this->request->isPost()) {
            $post = $this->request->post();
            $backurl = $post['backurl'];
            Db::startTrans();
            try{
                unset($post['backurl']);
                $id = $post['id'];unset($post['id']);
                db('member')->where(['id'=>$id])->update($post);
                Db::commit();
            }catch(\Exception $e){
                Db::rollback();
                $this->error('操作失败');
            }
            $this->redirect($backurl);
        }else{
            $get = $this->request->param();
            $info = db('member')->where(['id'=>$get['id']])->find();
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
            db::table('member')->where(['id'=>['in',$id]])->delete();
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
        $ftime = date('Y-m-d H:i:s',time());
        //var_dump($get);die;
        Db::startTrans();
        try {
            db::table('member')->where(['id'=>['in',$id]])->update(['kid' =>$kid]);
            DB::commit();
            $this->redirect($this->backurl);
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
            $this->error('服务器繁忙');
        }
    }

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
        $list = db('member')->where($where)->order('id')->select();

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
              	if ($col_val == 'phone') {
                    $val = (($info['phone']-5)/3+6)/8;
                }
                $obj->setCellValue($this->ZM[$index].$i, $val);
            }
            $i++;                
        }

        ob_end_clean();
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$post['ff_yue'].'--客户信息-竞价.xls"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');
        // If you're serving to IE over SSL, then the following may be needed
        header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
        header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header ('Pragma: public'); // HTTP/1.0
        header("Content-type: text/html; charset=utf-8"); 
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }

    public function DIY(){
        //要导出的字段及索引
        $this->col_index = [
            'name' => 0,   
            'phone' => 1,
            'ip'=> 2,
            'keyword'=> 3,
            'Antecedents'=> 4,
            'url'=> 5,
            'kid'=>6,
            'state'=>7,
            'beizhu'=>8,
        ];
        $this->bgcolor_pyindex = 1;
        $this->bgcolor = [
            // 'E47EF2' =>[13,14,15,16,17,18,19],
            // '538DD5' =>[20,21,22,23,24,25],
            // 'FFFF00' =>[26,27,28,29,30,31,32,33,34],
        ];
        //菜单 键未索引
        $this->nav = [
            '姓名',    
            '手机号码',
            'ip地址',
            '关键词',
            '来路渠道',
            '来路URL',
            '客服',
            '状态',
            '备注',
        ];
        $this->ZM = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
                'AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU',
        ];

        $this->col = [
            'name',
            'phone',
            'ip',
            'keyword',
            'Antecedents',
            'url',
            'kid',
            'state',
            'beizhu',
            ];
    }
}