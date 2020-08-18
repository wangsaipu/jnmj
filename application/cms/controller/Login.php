<?php
namespace app\cms\controller;
use think\Controller;
use think\Db;

class Login extends Controller
{
    public function _initialize(){
        //ip过滤
        $ipAddr = get_client_ip();
        $ipArray = array();
        $tmp = explode('.', $ipAddr);
        $ipArray[] = $tmp[0].'.';
        $ipArray[] = $tmp[0].'.'.$tmp[1].'.';
        $ipArray[] = $tmp[0].'.'.$tmp[1].'.'.$tmp[2].'.';
        $ipArray[] = $ipAddr;
        $availableIp = db('cms_ip_filter')->where("replace(ip,'*','') in('','".$ipArray[0]."','" .$ipArray[1]."','" .$ipArray[2]."','" .$ipArray[3]."') and status=0" )->select();
        if (!$availableIp) {
            $this->redirect('cms/Login/login');die();
        }
    }
    public function login(){
        return $this->fetch('login');
    }

    public function dologin() {
        $post = request()->param();
        $username = $post['username'];
        $password = md5($post['password']);
        // if(!captcha_check($post['verify'])){
        //     $this->redirect('login',['error'=>'1']);
        // }
        $user = db('cms_users')->where(array('username'=>$username, 'password'=>$password, 'is_admin'=>1))->find();
        if ($user) {
            session('cmsuser',$user);
            $bid=$_SESSION['think']['cmsuser']['b_id'];



            if($bid == 2 || $bid == 15 || $bid == 20){
                $this->redirect(url('kefuswt/index'));
            }else{
                $this->redirect(url('member/index'));
            }
        } else {
            $this->redirect('login',['error'=>'2']);
        }
    }
    public function loginout(){
        session('cmsuser',null);
        $this->redirect(url('login'));
    }
}
