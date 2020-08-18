<?php
namespace app\cms\controller;
use app\cms\controller\CmsController;
use think\Db;

class Index extends cmsController
{   
    public function index(){
        
        return $this->fetch();
    }

}
