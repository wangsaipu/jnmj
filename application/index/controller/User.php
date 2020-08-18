<?php
namespace app\index\controller;
use app\index\controller\CommonController;
use think\Db;

class User extends CommonController
{
    public function user_img(){//用户头像切换
    	header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        if ($this->request->isPost()) {
        	$post = $this->request->post();
        	if (isset($post['id']) && !empty($post['id'])) {
        		$file = $this->request->file('img');
                $imgwww = "http://img.gujinge.net/"; //图片存放的域名
                $imgurl = 'D:\OS\img.gujinge.net' . DS;//图片存放的域名路径

		        $info = $file->validate(['ext'=>'jpg,png,gif'])->move($imgurl.'user/');
		        if($info){
                    $savename = $info->getSaveName();
                    $suffix = str_replace("\\","/",$savename);
		            $imgname = $imgurl . 'user/'.$suffix;
		            $image = \think\Image::open($imgname);
		            $image->thumb(300, 300)->save($imgname);

		            $idImg = db('user')->where(['id'=>$post['id']])->value('img');
		            if (!empty($idImg)) {//是否存在头像
                        $idImg = str_replace($imgwww,$imgurl,$idImg);//替换
                        if ($this->delfile($idImg)) {
                            Db::startTrans();
                            try{
                                $imgname = $imgwww.'user/'.$suffix;
                                db('user')->where(['id'=>$post['id']])->update(['img'=>$imgname]);
                                Db::commit();
                            }catch(\Exception $e){
                                Db::rollback();
                                $res['code'] = '操作失败';
                                return json_encode($res);
                            }
                            $res['code'] = '修改头像成功';
                            return json_encode($res);
                        }
                        $res['code'] = '图片不存在';
                        return json_encode($res);
                    }else{
                        Db::startTrans();
                        try{
                            $imgname = $imgwww.'user/'.$suffix;
                            db('user')->where(['id'=>$post['id']])->update(['img'=>$imgname]);
                            Db::commit();
                        }catch(\Exception $e){
                            Db::rollback();
                            $res['code'] = '操作失败';
                            return json_encode($res);
                        }
                        $res['code'] = '修改头像成功';
                        return json_encode($res);
                    }
		        }else{
		            // 上传失败获取错误信息
		            $res['code'] = $file->getError();
        			return json_encode($res);
		        }
        	}
        	$res['code'] = '用户名不存在';
        	return json_encode($res);
        }else{
        	$res['code'] = '方式错误';
        	return json_encode($res);
        }
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