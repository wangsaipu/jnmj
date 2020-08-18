<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

	/**
	 * 获取客户端IP地址
	 * @param integer $type 返回类型 0 返回IP地址 1 返回IPV4地址数字
	 * @return mixed
	 */
	function get_client_ip($type = 0) {
		$type       =  $type ? 1 : 0;
	    static $ip  =   NULL;
	    if ($ip !== NULL) return $ip[$type];
	    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	        $arr    =   explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
	        $pos    =   array_search('unknown',$arr);
	        if(false !== $pos) unset($arr[$pos]);
	        $ip     =   trim($arr[0]);
	    }elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
	        $ip     =   $_SERVER['HTTP_CLIENT_IP'];
	    }elseif (isset($_SERVER['REMOTE_ADDR'])) {
	        $ip     =   $_SERVER['REMOTE_ADDR'];
	    }
	    // IP地址合法验证
	    $long = ip2long($ip);
	    $ip   = $long ? array($ip, $long) : array('0.0.0.0', 0);
	    return $ip[$type];
	}

	function new_showstatus($status,$str){
		$arr = explode('~', $str);
		$key = explode('`', $arr[1]);
		$name = explode('`', $arr[0]);
		foreach($name as $k=>$v){
			$res[$key[$k]] = $v;
		}
		if($status!=='' && isset($res[$status])){
			echo $res[$status];
		}

	}
	function showstatus($status,$str){
		$arr = explode(':', $str);
		$key = explode(',', $arr[1]);
		$name = explode(',', $arr[0]);
		foreach($name as $k=>$v){
			$res[$key[$k]] = $v;
		}
		if($status!=='' && isset($res[$status])){
			echo $res[$status];
		}
	}
	//下载文件
	function download($filepath,$name){
        $download=__STATIC__.DS.$filepath.DS.$name;
        return $download;
    }
	function getfkarr($column,$table,$prefix,&$arr){
		$table = str_replace($prefix,'',$table);
		$arr = db("{$table}")->field("id ,{$column}")->select();
	}
		function getfkarrall($column,$table,$prefix,&$arr){
		$table = str_replace($prefix,'',$table);
		$arr = db("{$table}")->field("level ,{$column}")->select();
	}
	function getfkarrlihui($column,$table1,$bid,$table2,$prefix,&$arr){
		$join = [
			["{$table2} b","b.id=a.{$bid}"]
		];
		$arr = db("{$table1}")->alias('a')->field("a.id ,{$column}")->order('b.id')->join($join)->select();
	}
	function arraylihui($str,$arr,&$str2){
		$isin = in_array($str,$arr);
		if($isin){
		    $str2 = "in";
		}else{
		    $str2 = "out";
		}
	}
	function new_getfkarr($column,$table,&$arr,$where=[]){
		$arr = db("{$table}")->where($where)->field("id ,{$column}")->select();
	}
	function join_getfkarr($column,$table1,$table2,$val,&$arr,$where=[]){
		$join=[
			["{$table2} t",'t.id=a.'.$val],
		];
		$arr = db("{$table1}")->alias('a')->where($where)->join($join)->field("a.id ,{$column}")->select();
	}
	// 找到已有的id
	function get_rel_idarr($column,$table,&$arr,$where=''){ //存在关联集合中id集合
		$arr = db("{$table}")->where($where)->column($column);
	}

	/* 总共---已有
		$column  查询的字段
		$table   查询的表

		$table1  条件表
		$where   条件
		$column1 字段

	*/
	function get_not_in_arr($column,$table,$table1,$where,$column1,&$arr,$map=[]){                              //不存在关联集合中的数据（针对供应商）
		$idarr = db("{$table1}")->where($where)->column("{$column1}");
		$idarr = array_filter($idarr);
		if(!empty($idarr)){
			$map['id'] = ['not in',$idarr];
		}
		$arr = db("{$table}")->where($map)->field("id ,{$column}")->select();
	}
	/* 总共---已有
		$column  查询的字段
		$table   查询的表

		$table1  条件表
		$where   条件
		$column1 字段

	*/
	function u_nav_get_not_in_arr(&$arr){     //开发管理，添加节点
	    $where = [];                   
		$map = ['a.pid'=>['<>',0],'a.status'=>0];
		$join = [
			['cms_nav_menu b','b.pid=a.id','left'],
		];
		$map['b.id'] = ['exp','is null'];
		$arr = db("cms_nav_menu as a")->where($map)->field("a.id ,a.name")->join($join)->select();
	}//开发管理，修改节点


	function nav_get_not_in_arr(&$arr){     //开发管理，添加节点
	    $where = [];                   
		$idarr = db("cms_node")->where($where)->column("nav_id");
		$idarr = array_filter($idarr);
		$map = ['a.pid'=>['<>',0],'a.status'=>0];
		if(!empty($idarr)){
			$map['a.id'] = ['not in',$idarr];
		}
		$join = [
			['cms_nav_menu b','b.pid=a.id','left'],
		];
		$map['b.id'] = ['exp','is null'];
		$arr = db("cms_nav_menu as a")->where($map)->field("a.id ,a.name")->join($join)->select();
	}
	function last_nav_menu(&$arr){
		$join = [
			['cms_nav_menu b','b.pid=a.id','left'],
		];
		$map['b.id'] = ['exp','is null'];
		$map['a.status'] = 0;
		$arr = db("cms_nav_menu as a")->where($map)->field("a.id ,a.name")->join($join)->select();
	}
	//
	function get_proroom_notinself(&$arr,$supplier_product_id,$map=[]){            //不存在关联集合中的数据（针对供应商）
		$idarr = db("rel_supplier_product_room")->where(['supplier_product_id'=>$supplier_product_id])->column("pro_room_id");
		$map['a.status'] = 1;

		if(!empty($idarr)){
			$map['a.id'] = ['not in',$idarr] ;
		}
		$join = [
			['cruise_room_info r','r.id=a.room_id','left'],
		];	
		$arr = db('product_room')->alias('a')->where($map)->join($join)->field("a.id,a.price,r.name")->select();
	}

	function show_nav($show_nav){
		$str = '';
		foreach($show_nav as $v){
			$str .= '<li >
						<a href="javascript:;">
							<i class="'.$v['icon'].'"></i> 
							<span class="title">'.$v["name"].'</span>
							<span class="selected"></span>
							<span class="arrow "></span>
						</a>
						<ul class="sub-menu">';
			if(isset($v['children'])){
				$str .= show_nav($v['children']);
			}
			if(isset($v['node'])){
				foreach($v['node'] as $vv){
					$str .='
							<li class='.$vv['mname'].'__'.$vv['aname'].'>
								<a href="'.url($vv['mname'].'/'.$vv['aname']).'">
									<i class=""></i>'.$vv['name'].'
								</a>
							</li>';					
				}
			}
			$str .= '</ul></li>';
		}
		return  $str;
	}

	function toexcel($filename,$arr,$result,$addstr = ''){

	    header('Content-Type: text/html; charset=UTF-8');
	    header('Cache-Control: no-cache, must-revalidate');
	    header('Content-type: application/vnd.ms-excel');
	    header('Content-Disposition: attachment; filename='.$filename.'.xls');

	    $str='
	                <table bgcolor="#fff" border="1" bordercolor="green">
	                    <tr align="center" height="50" style="color:#fff">';
	    foreach($arr as $v){
	        $str.= '<th bgcolor="#4BACC6">'.$v.'</th>';
	    }
	    $str.= '</tr >';
	    $i = 1;
	    foreach($result as $info){
		    foreach ($info as $v) {
		        $i++;
		        $color = '';
		        if($i%2){
		            $color = '#B7DDE8';
		        }
		        $str.=' <tr align="center" height="40">';
		        foreach($arr as $k=>$s){
		            $str.=  '<td bgcolor='.$color.'>'.$v[$k].'&nbsp;</td>';
		        }
		        $str.= '</tr>';
		    }

	    }


	    $str .= $addstr;
	    $str.='</table>';
	    echo  $str;
	}

	function excel_export($table,$file){
        $Ym = date('Ymd',time());
        foreach ($table['field'] as $key => $value) {
            $field[$key]=$key;
        }
        //dump($field);
        $list = db($table['name'])->alias('a')->where($table['where'])->join($table['join'])->field($field)->select();
       // dump($list);exit;
        vendor("phpExcel.PHPExcel");
        $objPHPExcel = new \PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        $obj = $objPHPExcel->getActiveSheet();
        $obj->setTitle($Ym.'--'.$file['sheet']);  
        $a=0;
        $col_index=[];
        foreach ($table['field'] as $key => $value) {
                $col_index[$key]=$a;
                $titles[$a]=$value;
                $a++;
        }
        $ZM = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
                'AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU',
        ];
        $i=1;           
        foreach($titles as $index=>$v){
            $obj->setCellValue($ZM[$index].$i, $v);
        }
        $i = 2;
        foreach($list as $k=>$info){
            foreach($info as $col=>$v){
                $obj->setCellValue($ZM[$col_index[$col]].$i, $v);
            }  
            $i++;        
        }
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$Ym.'--'.$file['file_name'].'.xls"');
        header('Cache-Control: max-age=0');
        // 如果你为IE 9,然后下面的可能需要
        header('Cache-Control: max-age=1');
        // 如果你服务即通过SSL,那么下面的可能需要
        header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // 在过去的日期
        header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // 总是修改
        header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header ('Pragma: public'); // HTTP/1.0
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
        exit;
    }

    function eximport(){   //excel导入员工信息
         // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('excel');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->validate(['size'=>3145728,'ext'=>'xls,csv,xlsx'])->move(ROOT_PATH . 'public' . DS . 'uploads');
        if($info){
            $filename=$info->getSaveName(); 
            $filenames=ROOT_PATH . 'public' . DS . 'uploads/'.$filename;
           // dump($filenames);exit;
            vendor("phpExcel.PHPExcel");
            $filetype=\PHPExcel_IOFactory::identify($filenames);//自动获取文件类型
            $objReader=\PHPExcel_IOFactory::createReader($filetype);//获取文件读取对象
            $objPHPExcel =$objReader->load($filenames);//加载excel文件
            $name=$objPHPExcel->getsheetNames();
            $sheetn=end($name);
            $objReader->setLoadSheetsOnly($sheetn);
            $objPHPExcel=$objReader->load($filenames);
            $sheetname=$objPHPExcel->getSheet();//获取当前sheet
            $data=$sheetname->toArray();
            //dump($data);exit;
            $post=[];
            Db::startTrans();//开启事务
            $config = $this->config;
            try{
                foreach ($data as $key => $value) {
                   if($key==0){
                    continue;
                   }
                   $post[$key]['kqkf_note']=$value[4]?$value[4]:'';
                   $post[$key]['kqkf']=$value[3]?$value[3]:0;
                   $where['uid']=$value[0];
                   $where['ff_yue']=$value[1];
                   db::table('new_gz_info')->where($where)->update($post[$key]);
                }
                Db::commit();
                $this->redirect('class_info/index');
            }catch(\Exception $e){
                Db::rollback();
                throw $e;
                $this->error('服务器繁忙');
            }
        }else{
           $this->error('服务器繁忙');
        }
    }