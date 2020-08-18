<?php
namespace app\index\controller;
use app\index\controller\CommonController;
use think\Db;
use think\File;

class Index extends CommonController
{
    public function index(){
        // session_id(3245);
        // $zaixian = session('zaixian');
        // $zaixian++;
        // session('zaixian',$zaixian);
        // dump(session('zaixian'));exit;
        

        
        //（2）定义超时时间
        $timeout = 30;   // 30秒内没动作，认为掉线

        //（3）文件内容读取
        $user_arr = cache('user_online');// 将文件内容赋予一个字符串
        //$user_arr = json_decode($user_arr, true);//将json字符串转换为数组  ip(用户id),time
        //
        //（4）获取远程在线用户信息
        $temp = array();  // 放置所有用户信息
        if (!empty($user_arr)) {
            foreach($user_arr as $value){
                $user = $value['ip'];
                $time = $value['time'];
                // 如果不是本机IP,并且时间没有超过，则放入数组temp中
                // getenv('REMOTE_ADDR')是获取远程IP地址（在IIS下无效果），$_SERVER['REMOTE_ADDR']也可以获取IP地址。
                if( ($user != getenv('REMOTE_ADDR')) && ($time > time()) ){
                    array_push($temp,['ip'=>$user,'time'=>$time]);  //没超时的重新加入数组
                }
            }
        }

        //（5）保存本用户的信息
        $timeout = time()+$timeout;
        array_push($temp,['ip'=>getenv('REMOTE_ADDR'),'time'=>$timeout]); //加入自己的登录信息

        //（7）对文件进行写入
        cache('user_online',$temp);

        //（8）输出当前在线人数至页面
        echo"当前有".count($temp)."人在线"; // 输出当前在线人数
        exit;
        return $this->fetch();
    }
    public function add(){
        if ($this->request->isGet()) {

        	return $this->fetch();
        }else{
        	$rootPath = ROOT_PATH . 'public' . DS . 'static/video/';
        	$file = request()->file('video');
        	$info = $file->validate(['ext'=>'mp3,mp4'])->move($rootPath);
        	if($info){
	            $savename = $info->getSaveName();
	            //dump($savename);exit;
	            $suffix=str_replace("\\","/",$savename);
	            //dump($suffix);exit;
	            return 1;
	        }else{
	            return 0;
	        }
        }
        
    }
}