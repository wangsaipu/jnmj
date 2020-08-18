<?php
namespace app\cms\model;

class CmsUser extends \think\Model
{
 	protected $table = 'cms_users';
  
  	public function getCmsUsersInfoByBranchId($b_id){
      	$result = db($this->table)->where('b_id',$b_id)->select();
      	return empty($result)?[]:$result;
    }
}