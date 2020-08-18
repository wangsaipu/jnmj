<?php

namespace app\cms\controller;
use app\cms\controller\CmsController;
use think\Db;

class MainIndustry extends CmsController
{
    public function index()//无限级分类
    {


        $rows = db('main_industry')->select();
        //调用
        $arr = $this->getChild($rows);

        //$array = urlencode($arr);
        $array = json_encode($arr,JSON_UNESCAPED_UNICODE);
        //dump($array);die;

        $this->assign('array', $array);
        return $this->fetch();
    }

    function getChild($data , $id=0)
    {

        //创建一个保存最后输出结果的数据
        $tree=[];
        //循环所有数据找到pid为传入id的数组，也就是找到id的儿子们
        foreach($data as $key =>$value) {
            //找到了儿子
            if($value['pid']==$id) {
                //将数组保存进最后结果
                $tree[$value['id']]=$value;
                //为了减少数据量删掉了自己，因为自己不可能是自己的儿子。。
                unset($data[$key]);
                //将儿子的儿孙数组保存到儿子的child数组里（递归查找）
                $tree[$value['id']]['child'] = $this->getChild($data , $value['id']);
            }
        }

        return $tree;
    }





}
