<?php
namespace app\cms\controller;
use app\cms\controller\CmsController;
use think\Db;

class Claim extends CmsController
{
    public function index()
    {
        $searchSize = 50;
        $post = $this->request->param();
        $post_val = array(
            'query' => $post,
        );
        if (isset($post['searchSize'])) {
            $searchSize = $post['searchSize'];
            //dump($searchSize);exit;
        }
        $this->assign('searchSize', $searchSize);
        $where = [];

        if (isset($post["username"]) && $post["username"] !== "") {
            $where["a.username"] = array('like', '%' . $post["username"] . '%');
            $this->assign("username", $post["username"]);
        }

        if (isset($post["phonenum"]) && $post["phonenum"] !== "") {
            $where["((a.phonenum-5)/3+6)/8"] = array('like', '%' . $post["phonenum"] . '%');
            $this->assign("phonenum", $post["phonenum"]);
        }

        if (isset($post["wechat"]) && $post["wechat"] !== "") {
            $where["a.wx"] = array('like', '%' . $post["wechat"] . '%');
            // var_dump($i);die;

            $this->assign("wechat", $post["wechat"]);
        }


        if (isset($post["kid"]) && $post["kid"] !== "") {
            $where["a.kid"] = array('like', '%' . $post["kid"] . '%');
            $this->assign("kid", $post["kid"]);
        }
        $join = [
            ['lanmu l', 'l.id=a.lid'],
        ];

        //当天时间记录条数
        $start = date('Y-m-d 00:00:00', time());
        $end = date('Y-m-d 23:59:59', time());
        $count = db('excel_swt')->where('createtime', ['>', $start], ['<', $end])->count();
        //客服一
        $count1 = db('excel_swt')->where('createtime', ['>', $start], ['<', $end])->where(array('author' => '客服'))->count();
        //客服二
        $count2 = db('excel_swt')->where('createtime', ['>', $start], ['<', $end])->where(array('author' => '袁子怡'))->count();
        $res = db('claim')->alias('a')->field('a.*')->order('a.id desc')->paginate($searchSize, false, $post_val);

        //dump($res);exit;
        $bmlx = db('branch')->field('bmlx,id')->where('id', 'in', [2, 15, 20])->select();
        $this->ld();
        //var_dump($kefu);die;

        //下拉客服姓名
        $kefu_arr = db('cms_users')->field('name')->where('b_id', 'in', [2, 15, 20])->select();

        $this->assign('pagenumber', $res->total() - ($res->currentPage() - 1) * $res->listRows());
        $this->assign('list', $res);
        $this->assign('page', $res->render());
        $arr = ['收款账户', '客户名称', '认领状态', '到账金额', '付款账户', '待认领金额', '交易编号', '备注', '到账时间', '创建时间'];
        $init_index = 2;
        if($init_index ==2){
            $res2 = substr_replace($init_index,0 ,5);
        }

        $this->assign('res2',$res2);
        //print_r($res2);die;

        $this->assign('init_index',$init_index);
        $this->assign('edit_index',$init_index+count($arr));
        $this->assign('my_rule',
            [
                'showlist'=>$arr,
            ]
        );
        $this->assign('hidden_index',[]);
        $this->assign('head_title','认领记录');
        $this->assign('bmlx',$bmlx);
        $this->assign('kefu_arr',$kefu_arr);
        $this->assign('count',$count);
        $this->assign('count1',$count1);
        $this->assign('count2',$count2);
        return $this->fetch();
    }

    //联动
    public function ld(){
        $get=$this->request->param();
        $id = empty($get['id'])?'2':$get['id'];
        $kefu = db('cms_users')->field('name')->where(['b_id'=>$id])->select();
        $this->assign('kefu',$kefu);
    }
//导入
    public function eximport()
    {
        $file = request()->file('file_stu');
        if ($file == '') {
            $this->error('请选择文件');
        }
        $info = $file->validate(['size' => 3145728, 'ext' => 'xls,csv,xlsx'])->move(ROOT_PATH . 'public' . DS . 'uploads');
        if ($info) {
            $filename = $info->getSaveName();
            $filenames = ROOT_PATH . 'public' . DS . 'uploads/' . $filename;
            vendor("phpExcel.PHPExcel");
            $filetype = \PHPExcel_IOFactory::identify($filenames);//自动获取文件类型
            $objReader = \PHPExcel_IOFactory::createReader($filetype);//获取文件读取对象
            $objPHPExcel = $objReader->load($filenames);//加载excel文件
            $sheetname = $objPHPExcel->getSheet();//获取当前sheet
            $highestRow = $sheetname->getHighestRow(); // 取得总行数
            $highestColumn = $sheetname->getHighestColumn(); // 取得总列数
            $data = $sheetname->toArray();
            unset($data[0]);
            //dump($data);exit;
            $post = [];
            foreach ($data as $k => $v) {
                if (empty($v[2]) && empty($v[3]) && empty($v[4])) {
                    continue;
                }
                $t = strtotime($v[0]);
                $k = $k - 1;
                //var_dump ($post[$k]['phonenum']);exit;
                //$kefu = db('excel_swt')->field('phonenum')->where(array('phonenum' => ($v[2]*8-6)*3+5))->select();
                $kefu = db('excel_swt')->field('phonenum')->where(array('phonenum' => $v[2]))->select();
                $qq = db('excel_swt')->field('tout')->where(array('tout' => $v[3]))->select();
                $wx = db('excel_swt')->field('wx')->where(array('wx' => $v[4]))->select();
                if (empty($kefu) && empty($qq) && empty($wx)) {
                    $post[$k]['createtime'] = date("Y-m-d H:i:s", $t);
                    $post[$k]['username'] = empty($v[1])?'':$v[1];
                    $post[$k]['phonenum'] = empty($v[2])?'':(($v[2]*8)-6)*3+5;
                    $post[$k]['tout'] = empty($v[3])?'':$v[3];
                    $post[$k]['wx'] = empty($v[4])?'':$v[4];
                    $post[$k]['keyword'] = empty($v[5])?'':$v[5];
                    $post[$k]['inurl'] = empty($v[6])?'':$v[6];
                    $post[$k]['area'] = empty($v[7])?'':$v[7];
                    $post[$k]['kid'] = empty($v[8])?'':$v[8];
                    $post[$k]['state'] = empty($v[9])?'':$v[9];
                    $post[$k]['beizhu'] = empty($v[10])?'':$v[10];
                }
            }
            //var_dump($post);die;

            Db::startTrans();//开启事务
            try {
                //var_dump($kefu);die;
                if (!empty($post)) {
                    db('excel_swt')->insertAll($post);
                }
                Db::commit();
                $this->redirect('Swt/index');
            } catch (\Exception $e) {
                Db::rollback();
                throw $e;
                $this->error('服务器繁忙');
            }
        }
    }

    //导出
    /*public function downLoad(){

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
        $list = db('excel_swt')->where($where)->order('id')->select();
        //dump($list);exit;
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

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$post['ff_yue'].'--客户信息.xls"');
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
    }*/



    public function downLoad(){
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        date_default_timezone_set('Europe/London');
        if (PHP_SAPI == 'cli')
            die('This example should only be run from a Web Browser');
        $this->DIY();
        $post = $this->request->param();
        //当前用户姓名
        $username = $_SESSION['think']['cmsuser']['username'];
        if ($username == 'sansed'){
            echo'无法导出'; die;
        }

        //dump($username);die;

        $where = [];
        if (!empty($post['ff_yue'])) {
            $where['createtime'] = ['like','%'.$post['ff_yue'].'%'];
        }
        if (!empty($post['state'])) {
            $where['state'] = ['like','%'.$post['state'].'%'];
        }
        $list = db('excel_swt')->where($where)->order('id')->select();
        //var_dump($list);exit;
        import("PHPExcel.Classes.PHPExcel");
        $objPHPExcel = new \PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        $obj = $objPHPExcel->getActiveSheet();
        $obj->setTitle($post['ff_yue'].'--商机信息');


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
                if ($col_val == 'phonenum') {
                    $val = (($info['phonenum']-5)/3+6)/8;
                }
                $obj->setCellValue($this->ZM[$index].$i, $val);
            }
            $i++;
        }

        ob_end_clean();
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$post['ff_yue'].'--商机信息-手机.xls"');
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
            'username' => 0,
            'phonenum' => 1,
            // 'tout' => 2,
            'wx'=>3,
            'area'=> 4,
            'keyword'=> 5,
            'inurl'=> 6,
            'createtime'=>7,
            'kid'=>8,
            'state'=>9,
            'beizhu'=>10,
        ];
        $this->bgcolor_pyindex = 1;
        $this->bgcolor = [
            /* 'E47EF2' =>[1,4,7],
             '538DD5' =>[2,5,8],
             'FFFF00' =>[3,6,9],*/
        ];
        //菜单 键未索引
        $this->nav = [
            '姓名',
            '手机号码',
            'QQ',
            '微信',
            '地域',
            '关键词',
            '来路URL',
            '时间',
            '客服',
            '状态',
            '备注',
        ];
        $this->ZM = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
            'AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU','AV','AW','AX','AY','AZ','BA'
        ];

        $this->col = [
            'username',
            'phonenum',
            //'tout' ,
            'wx',
            'area',
            'keyword',
            'inurl',
            'createtime',
            'kid',
            'state',
            'beizhu',
        ];
    }


    //添加商机数据
    public function add(){
        if($this->request->isPost()){
            $post = $this->request->post();
            //dump($post);die;
            if (empty($kefu)) {
                //$post['author'] = session('cmsuser')['name'];
                //dump($post['author']);die;
                $backurl = $post['backurl'];
                unset($post['backurl']);


                $post['p_id'] = md5(mt_rand(100000,999999));
                $post['create_time'] = date('Y-m-d H:i:s', time());

                //dump($post);die;
                $data1 = db('product')->insert($post);
                if ($data1 !== false) {
                    $this->redirect($backurl);
                } else {
                    $this->error('服务器繁忙');
                }
            }else{
                $this->error('手机号码重复');
            }
        }else {
            //$this->assign('file_dir', 'article'); //文件上传的文件夹
            //$this->assign('file_upload_index', ['wz_img' => '标题展示图(294*198)']);  //数据库中存储多文件的字段名
            $this->assign('backurl', $this->backurl);
            $this->assign('head_title', '新增产品');
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
                $post['update_time'] = date('Y-m-d H:i:s', time());
                //dump($post);die;
                db('product')->where(['id'=>$id])->update($post);
                Db::commit();
            }catch(\Exception $e){
                Db::rollback();
                $this->error('操作失败');
            }
            $this->redirect($backurl);
        }else{
            $get = $this->request->param();
            $info = db('product')->where(['id'=>$get['id']])->find();
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
            db::table('excel_swt')->where(['id'=>['in',$id]])->delete();
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
        //$top_data = 1;date(format:'Y-m-d H:i:s',time());
        //var_dump($get);die;
        Db::startTrans();
        try {
            db::table('excel_swt')->where(['id'=>['in',$id]])->update(['kid' =>$kid,'ftime' =>$ftime]);
            DB::commit();
            $this->redirect($this->backurl);
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
            $this->error('服务器繁忙');
        }
    }
}