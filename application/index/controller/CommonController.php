<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class CommonController extends Controller
{
    public $user_info;
    public function _initialize(){
        $action = $this->request->action();
        $controller = $this->request->controller();
        $active_str = $controller.'/'.$action;
        $this->assign('controller',$controller);
        $this->assign('active_str',$active_str);
        // header('Content-type: text/html; charset=UTF8');
        // $file_path = "D:\phpStudy\WWW\\JM742603843R90250000000.doc";
        // $fp = fopen($file_path,"r");
        // $str = fread($fp,filesize($file_path));//指定读取大小，这里把整个文件内容读取出来
        // echo $str = str_replace("\r\n","<br />",$str);
        // fclose($fp);exit;
        
        // $date = strtotime('2018-08-11 12:39');
        // $date2 = strtotime('2018-08-11 12:39:00');
        // dump($date);
        // echo "<br />";
        // dump($date2);exit;
        
        
        // $TestCookie =  cookie('TestCookie');
        // if (!isset($TestCookie)) {
        //     setcookie('TestCookie','成功',time()+10);
        // }
        // echo cookie('TestCookie');exit;  
                 
        
        header('Content-type: text/html; charset=UTF8');
        // $mobile = model('Mobile');
        // $arr['getPhoneNumber'] = $mobile->getPhoneNumber();
        // $arr['getHttpHeader'] = $mobile->getHttpHeader();
        // $arr['getPhoneType'] = $mobile->getPhoneType();
        // $arr['isOpera'] = $mobile->isOpera();
        // $arr['isM3gate'] = $mobile->isM3gate();
        // $arr['getHttpAccept'] = $mobile->getHttpAccept();
        // $arr['getIP'] = $mobile->getIP();
        // dump($arr);exit;
         
        
        // if ($this->delfile('D:\phpStudy\WWW\img.gujinge.net'.DS.'/sss.txt')) {
        //     echo "成功";
        // }else{
        //     echo "失败";
        // }exit;
        //dump(ROOT_PATH);exit;
        //dump(dirname(__FILE__));exit;// D:\OS\img.gujinge.net   //D:\phpStudy\WWW\img.gujinge.net
    }

    function numberArr($str){//{1}{2}{3}{4}{5}{6}{7}{8}{9}，这种形式的我怎么把数字变成数组
        $str=trim($str);//删除空格
        $str = preg_replace('/\D/s', '|', $str);//非数字用‘|’代替
        $arr = explode("|",$str);//字符串转成数组
        $arr = array_filter($arr);//删除空数组
        $arr = array_values($arr);//重置数组信息
        //sort($arr);//重新排序
        return $arr;
    }

    function delfile($url) {//删除文件 
        if( file_exists($url) && is_file($url)){ 
                if(unlink($url)) { 
                    return true; 
                }else { 
                    return false; 
                } 
        }else { 
            return false; 
        } 
    }

    
}