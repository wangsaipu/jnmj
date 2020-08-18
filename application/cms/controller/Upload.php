<?php
namespace app\cms\controller;
use think\Controller;
use think\Db;

class Upload extends Controller
{
    /**
     * 文件上传
     */
    public function fileupload(){

        if(request()->isHead()){
            return true;
        }
        $column = array_keys(request()->file())[0];
        $file = request()->file($column)[0];
        $get = request()->param();

        $rootPath = ROOT_PATH . 'public' . DS . 'static/cms_upload/'.$get['file_dir'];
        $info = $file->rule('uniqid')->move($rootPath);

        if($info){
           $savename = $info->getSaveName();
           $tmp_info = $info->getInfo();

           $image = \think\Image::open($rootPath.'/'.$savename);
           $image->thumb(100,100,1)->save($rootPath.'/s_'.$savename);

           return [
                "success"=>1,
                "files"=>[
                    [
                        "name"=>$tmp_info['name'],
                        "error"=>0,
                        "size"=>$tmp_info['size'],
                        "type"=>$tmp_info['type'],
                        "thumbnail_url"=>$get['file_dir'].'/'.$savename,
                        'column'=>$column,
                    ]
                ]
            ];
        }else{
           $tmp_info = $file->getInfo;
           return [
                "success"=>1,
                "files"=>[
                    [
                        "name"=>$tmp_info['name'],
                        "error"=>1,
                        "size"=>$tmp_info['size'],
                        "type"=>$tmp_info['type'],
                        "thumbnail_url"=>$tmp_info['name'],
                    ]
                ]
            ];
        }
        die();
    }


    /**
     * 富文本框文件上传(返回格式与普通上传不一样success->error)
     */
    public function kindEditorUpload() {
        $imgwww = "http://www.aimier.com/uploads/"; //图片存放的域名
        $imgurl = ROOT_PATH . 'public' . DS . 'uploads' . DS;//图片存放的域名路径
        config('app_debug',false);
        config('app_trace',false);
        if(request()->isHead()){
            return true;
        }
        $file = request()->file('imgFile');
        $get = request()->param();
        $info = $file->move($imgurl.'/'.$get['file_dir']);

        $savename = $info->getSaveName();
        $suffix=str_replace("\\","/",$savename);
        $url = $imgwww.$get['file_dir'].'/'.$suffix;
        if($info){
           $result = json_encode([
                "error"=>0,
                "url"=>$url
            ]);
        }else{
           $result = json_encode(['error'=>1]);
        }

        return $result;

    }

    public function uploadimg(){
        $imgwww = "http://www.aimier.com/uploads/"; //图片存放的域名
        $imgurl = ROOT_PATH . 'public' . DS . 'uploads' . DS;//图片存放的域名路径

        $file_dir = $_POST['file_dir'];

        $file = $this->request->file('upload_'.$_POST['column']);
         //dump($file);exit;
        $rootPath = $imgurl.$file_dir;
        $info = $file->move($rootPath);
        //dump($info);exit;
        if($info){
            $savename = $info->getSaveName();
            //dump($savename);exit;
            $suffix=str_replace("\\","/",$savename);
            //dump($suffix);exit;
            $arr = array(".text", ".docx");
            $arrimg = array(".gif", ".jpe",".png",".jpeg");
            if(in_array($suffix,$arrimg)){
                $image = \think\Image::open($rootPath.'/'.$savename);
                $image->thumb(100,100,1)->save($rootPath.'/s_'.$savename);
            }
            $appPath = $imgwww.$file_dir.'/'.$suffix;
            echo  $appPath;
        }else{
            return 0;
        }
    }


}
