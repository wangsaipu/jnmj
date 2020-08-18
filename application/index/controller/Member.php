<?php
namespace app\index\controller;
use app\index\controller\CommonController;
use think\Db;

class Member extends CommonController
{
    public function index(){
        $word = $this->search_word_from();
        session('word',$word);
        header("Location: http://www.sosoyun.cn/?i=32413");
        return $this->fetch();
    }

    public function dengru(){
    	$post = $this->request->post();
        if (!empty(session('word')['ip'])) {
            $post['ip'] = session('word')['ip'];
        }
        if (!empty(session('word')['keyword'])) {
            $post['keyword'] = session('word')['keyword'];
        }
        if (!empty(session('word')['Antecedents'])) {
            $post['Antecedents'] = session('word')['Antecedents'];
        }
        if (!empty(session('word')['url'])) {
            $post['url'] = session('word')['url'];
        }
        $post['createtime'] = date('Y-m-d H:i:s',time());
        $post['phone'] = ($post['phone']*8-6)*3+5;
        $post['read'] = '0';
        
        $num = db('member')->where(['ip'=>$post['ip']])->column('id');//数据库里有几条数据
        if (count($num) > 5) {
            $res['code'] = 2;//该ip不能在提交了
        }else{
          
            $data = db('member')->insert($post);
            $res = [];
            if ($data !== false) {
                $res['code'] = 1;
            }else{
                $res['code'] = 0;
            }
        }
    	
        return json_encode($res);
    }

    public function dengru2(){
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        $post = $this->request->post();
        $post['ip'] = isset($_SERVER["REMOTE_ADDR"])?$_SERVER["REMOTE_ADDR"]:'';
        $post['createtime'] = date('Y-m-d H:i:s',time());
        $post['phone'] = ($post['phone']*8-6)*3+5;
        $post['read'] = '0';
        $num = db('member')->where(['ip'=>$post['ip']])->column('id');//数据库里有几条数据
        if (count($num) > 5) {
            $res['code'] = 100;//该ip不能在提交了
        }else{
            $data = db('member')->insert($post);
            $res = [];
            if ($data !== false) {
                $res['code'] = 1;
            }else{
                $res['code'] = 0;
            }
        }

        return json_encode($res);
    }

    public function add(){
        return $this->fetch();
    }

    function search_word_from() {  //获取关键词
        $referer = isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'';  
        if(strstr( $referer, 'baidu.com')){ //百度  
            preg_match( "|baidu.+wo?r?d=([^\\&]*)|is", $referer, $tmp );  
            $keyword = urldecode( $tmp[1] );  
            $from = 'baidu';  
        }elseif(strstr( $referer, 'google.com') or strstr( $referer, 'google.cn')){ //谷歌  
            preg_match( "|google.+q=([^\\&]*)|is", $referer, $tmp );  
            $keyword = urldecode( $tmp[1] );  
            $from = 'google';  
        }elseif(strstr( $referer, 'so.com')){ //360搜索  
            preg_match( "|so.+q=([^\\&]*)|is", $referer, $tmp );  
            $keyword = urldecode( $tmp[1] );  
            $from = '360';   
        }elseif(strstr( $referer, 'sogou.com')){ //搜狗  
            preg_match( "|sogou.com.+query=([^\\&]*)|is", $referer, $tmp );  
            $keyword = urldecode( $tmp[1] );  
            $from = 'sogou';     
        }elseif(strstr( $referer, 'soso.com')){ //搜搜  
            preg_match( "|soso.com.+w=([^\\&]*)|is", $referer, $tmp );  
            $keyword = urldecode( $tmp[1] );  
            $from = 'soso';  
        }else {  
            $keyword ='';  
            $from = '';  
        }  
        $ip = isset($_SERVER["REMOTE_ADDR"])?$_SERVER["REMOTE_ADDR"]:'';
        return array('keyword'=>$keyword,'Antecedents'=>$from,'url'=>$referer,'ip'=>$ip);  
    }
}