<?php
namespace app\cms\model;

use think\Model;

class Excel extends Model
{
    public function uploadFile(){
        $filetmpname = APP_PATH.'public/Uploads/624.xls';
        Vendor('Classes.PHPExcel');
        $objPHPExcel = PHPExcel_IOFactory::load($filetmpname);
        $arrExcel = $objPHPExcel->getSheet(0)->toArray();
        //删除不要的表头部分，我的有三行不要的，删除三次
        array_shift($arrExcel);
        array_shift($arrExcel);
        array_shift($arrExcel);//现在可以打印下$arrExcel，就是你想要的数组啦
        
        //查询数据库的字段
        $m = M('swt');
        $fieldarr = $m->query("describe kefu_swt");
        foreach($fieldarr as $v){
            $field[] = $v['Field'];
        }
        array_shift($field);//删除自动增长的ID        
        //循环给数据字段赋值
        foreach($arrExcel as $v){
            $fields[] = array_combine($field,$v);//将excel的一行数据赋值给表的字段
        }        
        //批量插入        
        if(!$ids = $m->addAll($fields)){
            $this->error("没有添加数据");
        }
        $this->success('添加成功');
    }
}