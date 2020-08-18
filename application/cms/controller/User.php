<?php
namespace app\cms\controller;
use app\cms\controller\CmsController;
use think\Db;

class User extends cmsController
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
        if(isset($post["name"]) && $post["name"]!==""){
            $where["a.name"] = array('like','%'.$post["name"].'%');
            $this->assign("name",$post["name"]);
        }
        if(isset($post["phone"]) && $post["phone"]!==""){
            $where["a.phone"] = array('like','%'.$post["phone"].'%');
            $this->assign("phone",$post["phone"]);
        }
        $join = [

        ];

        $res = db('user')->alias('a')->field('a.*')->join($join)->where($where)->order('a.id')->paginate($searchSize,false,$post_val);
        $this->assign('pagenumber',$res->total()-($res->currentPage()-1)*$res->listRows());
        $this->assign('list',$res);
        $this->assign('page',$res->render());
        $arr = ['序号','手机号码','昵称','头像','状态','喊单状态','博客状态','直播状态'];
        $init_index = 1;   
        $this->assign('init_index',$init_index);
        $this->assign('edit_index',$init_index+count($arr));
        $this->assign('my_rule',
            [
                'showlist'=>$arr,
            ]
        );
        $this->assign('hidden_index',[3]);
        $this->assign('head_title','用户信息管理');
        return $this->fetch();
    } 

    public function huiyuan(){
        $get = $this->request->param();
        Db::startTrans();//开启事务
        try{
            Db::table('user')->where(['id'=>$get['id']])->update(['status'=>$get['status']]);
            Db::commit();
        }catch(\Exception $e){
            Db::rollback();
            $this->error('服务器繁忙');
        }
        $this->redirect($this->backurl);
    } 

    public function handan(){
        $get = $this->request->param();
        Db::startTrans();//开启事务
        try{
            Db::table('user')->where(['id'=>$get['id']])->update(['is_handan'=>$get['is_handan']]);
            Db::commit();
        }catch(\Exception $e){
            Db::rollback();
            $this->error('服务器繁忙');
        }
        $this->redirect($this->backurl);
    } 
    public function boke(){
        $get = $this->request->param();
        Db::startTrans();//开启事务
        try{
            Db::table('user')->where(['id'=>$get['id']])->update(['is_boke'=>$get['is_boke']]);
            Db::commit();
        }catch(\Exception $e){
            Db::rollback();
            $this->error('服务器繁忙');
        }
        $this->redirect($this->backurl);
    }
    public function zhibo(){
        $get = $this->request->param();
        Db::startTrans();//开启事务
        try{
            Db::table('user')->where(['id'=>$get['id']])->update(['is_zhibo'=>$get['is_zhibo']]);
            Db::commit();
        }catch(\Exception $e){
            Db::rollback();
            $this->error('服务器繁忙');
        }
        $this->redirect($this->backurl);
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
        $where['status'] = ['<>',0];
        if (!empty($post['ff_yue'])) {
            $where['createtime'] = ['like','%'.$post['ff_yue'].'%'];
        }
        $list = db('user')->where($where)->order('id')->select();

        import("PHPExcel.Classes.PHPExcel");
        $objPHPExcel = new \PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        $obj = $objPHPExcel->getActiveSheet();
        $obj->setTitle($post['ff_yue'].'--用户信息');   


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

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$post['ff_yue'].'--用户信息.xls"');
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
            'phone' => 0,
            'name'=>1,
        ];
        $this->bgcolor_pyindex = 1;
        $this->bgcolor = [
            // 'E47EF2' =>[13,14,15,16,17,18,19],
            // '538DD5' =>[20,21,22,23,24,25],
            // 'FFFF00' =>[26,27,28,29,30,31,32,33,34],
        ];
        //菜单 键未索引
        $this->nav = [    
            '手机号码',
            '昵称',
        ];
        $this->ZM = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
                'AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU',
        ];

        $this->col = [
            'phone',
            'name',
        ];
    }
}