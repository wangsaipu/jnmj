<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:85:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\channel\update.html";i:1597729331;s:84:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\header.html";i:1537169502;s:81:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\top.html";i:1537169502;s:82:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\left.html";i:1596508691;s:81:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\nav.html";i:1537169502;s:84:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\footer.html";i:1541236459;s:91:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\add\footer_js.html";i:1537169500;s:92:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\public_js\file.html";i:1537169502;}*/ ?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<title><?php echo (isset($head_title) && ($head_title !== '')?$head_title:''); ?></title>
	
	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('cms_resource'); ?>/css/bootstrap-fileupload.css" />
	 
		
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('cms_resource'); ?>/css/select2_metro.css" /><!-- select 可搜索css -->
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('cms_resource'); ?>/css/chosen.css" /><!-- select 可搜索css -->
	<link rel="stylesheet" href="<?php echo \think\Config::get('cms_resource'); ?>/css/DT_bootstrap.css" />
		
		
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('cms_resource'); ?>/css/bootstrap-fileupload.css" />
	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" >
		
		
	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/jquery.fancybox.css" rel="stylesheet" />
		
		
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('cms_resource'); ?>/css/datetimepicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('cms_resource'); ?>/css/bootstrap-toggle-buttons.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('cms_resource'); ?>/css/colorpicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('cms_resource'); ?>/css/timepicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('cms_resource'); ?>/css/bootstrap-wysihtml5.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('cms_resource'); ?>/css/clockface.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('cms_resource'); ?>/css/jquery.tagsinput.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('cms_resource'); ?>/css/jquery.gritter.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('cms_resource'); ?>/css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('cms_resource'); ?>/css/daterangepicker.css" />
	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
		
	<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('cms_resource'); ?>/css/multi-select-metro.css" />
		
	
	
	
	
	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/fullcalendar.css" rel="stylesheet" type="text/css"/>
	
	
	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/wuzhenhuai.css" rel="stylesheet" type="text/css"/>
	<link rel="shortcut icon" href="<?php echo \think\Config::get('cms_resource'); ?>/image/favicon.ico" />
	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery-1.10.1.min.js" type="text/javascript"></script>
</head>
<body class="page-header-fixed  page-footer-fixed page-sidebar-fixed page-sidebar-closed">









<body class="page-header-fixed page-footer-fixed">
<!--顶部导航 状态-->
	<div class="header navbar navbar-inverse navbar-fixed-top hidden-print">
		<div class="navbar-inner">
			<div class="container-fluid" style='padding-right:20px;'>
				<h3 class="brand" style='color:#fff;line-height:27px;padding-left:8px;font-weight:500'>
					后台管理系统
				</h3>
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="<?php echo \think\Config::get('cms_resource'); ?>/image/menu-toggler.png" alt="" />
				</a>      
				<div class="navbar hor-menu hidden-phone hidden-tablet">
					<div class="navbar-inner">
						<ul class="nav">
						</ul>
					</div>
				</div>          
				<ul class="nav pull-right">
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" style='padding-top:12px;'>
						<img src="<?php echo \think\Session::get('cmsuser')['image']; ?>" alt="image" style="width:35px;height:35px;border-radius:50px;margin-top:-10px;"/>
						<span class="username"><?php echo \think\Session::get('cmsuser')['name']; ?></span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo url('cms_user/mypass'); ?>"><i class="icon-user"></i> 修改密码</a></li>
							<li><a href="<?php echo url('cms_user/myimage'); ?>"><i class="icon-user"></i> 上传头像</a></li>
							<li><a href="<?php echo url('cms/login/loginout'); ?>"><i class="icon-key"></i> 安全退出</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>



<!--顶部导航 状态-->
<div class="page-container row-fluid">
    <!-- 导航栏 start-->
    <div class="page-sidebar nav-collapse collapse">
			<ul class="page-sidebar-menu" id='nav_start'>
				<li>
					<div class="sidebar-toggler hidden-phone"></div>
				</li>
				<li class="Index__index">
					<a href="<?php echo url('index/index'); ?>">
					<i class="icon-home"></i>
					<span class="title">首页</span>
					<span class="selected"></span>
						
					</a>
				</li>
			<?php echo new_getfkarr('id,menuname,icon','cms_role_name',$getfkarr,['pid'=>0]); foreach($getfkarr as $k=>$fk): if(in_array($fk['id'],$b_role) || \think\Session::get('cmsuser')['is_super'] == 1): ?>
                <li class="">
                    <a href="javascript:;">
                        <i class="<?php echo $fk['icon']; ?>"></i>
                        <span class="title"><?php echo $fk['menuname']; ?></span>
                        <span class="selected"></span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                    	<?php echo new_getfkarr('id,menuname,modelname','cms_role_name',$getfkarr2,['pid'=>$fk['id']]); foreach($getfkarr2 as $k2=>$fk2): if(in_array($fk2['id'],$b_role) || \think\Session::get('cmsuser')['is_super'] == 1): ?>
	                        <li class="<?php echo $fk2['modelname']; ?>__index">
	                            <a href="<?php echo url($fk2['modelname'].'/index'); ?>"><?php echo $fk2['menuname']; ?></a>
	                        </li>
	                        <?php endif; endforeach; ?>
                    </ul>
                </li>
                <?php endif; endforeach; ?>
			</ul>
</div>
<script>
	if($('li').hasClass('<?php echo $controller__action; ?>')){
		$('.<?php echo $controller__action; ?>').addClass('active').parents("li").addClass('active').each(function(){
			$(this).find('a').find('.arrow').first().addClass('open');
		});
	}else{
		$('.<?php echo $controller__index; ?>').addClass('active').parents("li").addClass('active').each(function(){
			$(this).find('a').find('.arrow').first().addClass('open');
		});
	}
</script>
    <!-- 导航栏 end-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- <div class="row-fluid" style="height:25px;">
					<div class="span12">
						<h3 class="page-title">
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="<?php echo url('index/index'); ?>">首页</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href=""></a>
								<i class="icon-angle-right"></i>
							</li>
							<li> 
								<div href="javascript:;" style='font-size:14px;'>
									列表
								</div>
							</li>
						</ul>
					</div>
				</div> -->
            <div class="row-fluid">
                <div class="span12">
                    <h3 class="page-title">修改客户资料
                    </h3>
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="<?php echo url('index/index'); ?>">首页</a>
                            <i class="icon-angle-right"></i>
                        </li>
                        <li>

                            <a href="<?php echo url('consumer/index'); ?>">客户资料</a>
                            <i class="icon-angle-right"></i>
                        </li>

                        <li>
                            <div href="javascript:;" style='font-size:14px;'>
                                修改客户资料
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption"><i class="icon-reorder"></i>修改</div>
                            <div class="tools">
                                <!-- <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a> -->
                                <!-- <a href="javascript:;" class="remove"></a> -->
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form action="<?php echo url('update'); ?>" method='post' id="form_sample_2" class="form-horizontal">
                                <input type="hidden" name='backurl' value='<?php echo (isset($backurl) && ($backurl !== '')?$backurl:''); ?>'>
                                <input type="hidden" name='id' value='<?php echo (isset($info['id']) && ($info['id'] !== '')?$info['id']:''); ?>'>
                                <div class="alert alert-error hide">  <!-- 后跳的位置 -->
                                    <button class="close" data-dismiss="alert"></button>
                                    你有一些形式的错误。请检查下面。
                                </div>
                                <div class="alert alert-success hide">
                                    <button class="close" data-dismiss="alert"></button>
                                    您的表单验证成功！
                                </div>

                                 <div class="control-group">
                                    <label class="control-label">渠道状态<span class="required">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="state" data-required="1" class="span6 m-wrap" placeholder="请输入" value="<?php echo (isset($info['state']) && ($info['state'] !== '')?$info['state']:''); ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">渠道商名称<span class="required">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="channel_name" data-required="1" class="span6 m-wrap" placeholder="请输入" value="<?php echo (isset($info['channel_name']) && ($info['channel_name'] !== '')?$info['channel_name']:''); ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">联系人<span class="required">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="contact" data-required="1" class="span6 m-wrap" placeholder="请输入" value="<?php echo (isset($info['contact']) && ($info['contact'] !== '')?$info['contact']:''); ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">手机号<span class="required">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="phone" data-required="1" class="span6 m-wrap" placeholder="请输入" value="<?php echo (isset($info['phone']) && ($info['phone'] !== '')?$info['phone']:''); ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">邮箱地址<span class="required"></span></label>
                                    <div class="controls">
                                        <input type="text" name="mail" data-required="1" class="span6 m-wrap" placeholder="请输入" value="<?php echo (isset($info['mail']) && ($info['mail'] !== '')?$info['mail']:''); ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">渠道负责人<span class="required">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="channel_manager" data-required="1" class="span6 m-wrap" placeholder="请输入" value="<?php echo (isset($info['channel_manage']) && ($info['channel_manage'] !== '')?$info['channel_manage']:''); ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">资源归属<span class="required">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="resource" data-required="1" class="span6 m-wrap" placeholder="请输入" value="<?php echo (isset($info['resource']) && ($info['resource'] !== '')?$info['resource']:''); ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">可见范围<span class="required">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="range" data-required="1" class="span6 m-wrap" placeholder="请输入" value="<?php echo (isset($info['range']) && ($info['range'] !== '')?$info['range']:''); ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">签约日期<span class="required"></span></label>
                                    <div class="controls">
                                        <input type="text" name="sign_date" data-required="1" class="span6 m-wrap" placeholder="请输入" value="<?php echo (isset($info['sign_date']) && ($info['sign_date'] !== '')?$info['sign_date']:''); ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">上传附件<span class="required"></span></label>
                                    <div class="controls">
                                        <input type="text" name="upload_file" data-required="1" class="span6 m-wrap" placeholder="请输入" value="<?php echo (isset($info['upload_file']) && ($info['upload_file'] !== '')?$info['upload_file']:''); ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">备注<span class="required"></span></label>
                                    <div class="controls">
                                        <input type="text" name="mark" data-required="1" class="span6 m-wrap" placeholder="请输入" value="<?php echo (isset($info['mark']) && ($info['mark'] !== '')?$info['mark']:''); ?>">
                                    </div><!---->
                                </div>

                                <div class="control-group">
                                    <label class="control-label">账户信息<span class="required"></span></label>
                                    <div class="controls">
                                        <input type="text" name="account_type" data-required="1" class="span6 m-wrap" placeholder="请输入" value="<?php echo (isset($info['account_type']) && ($info['account_type'] !== '')?$info['account_type']:''); ?>">
                                    </div>
                                </div>





                                <div class="form-actions">

                                    <button type="submit" class="btn green">保存</button>

                                    <button type="button" onclick="history.go(-1);" class="btn">取消</button>

                                </div>

                            </form>


                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
</div>
	<div class="footer hidden-print" style='background-color:#333;'>
		<div class="footer-inner" style='padding-left:1%'>
			2018 © Power by  <a href='http://www.vowkin.com' target='_blank' > www.pc21.com.cn</a>
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
		<div class="footer-inner" style='float:right;padding-right:1%'>Version 1.3.1</div>
	
	</div>
	
<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/bootstrap.min.js" type="text/javascript"></script>

<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.slimscroll.min.js" type="text/javascript"></script>

<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.blockui.min.js" type="text/javascript"></script>  

<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.cookie.min.js" type="text/javascript"></script>

<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.uniform.min.js" type="text/javascript" ></script>

<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.validate.min.js"></script>



<?php if(!empty($files_upload_index)): ?>
<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.ui.widget.js"></script>
<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/tmpl.min.js"></script>
<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/load-image.min.js"></script>
<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/canvas-to-blob.min.js"></script>
<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.iframe-transport.js"></script>
<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.fileupload.js"></script>
<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.fileupload-fp.js"></script>
<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.fileupload-ui.js"></script>  
<?php endif; if(!empty($file_upload_index)): ?>
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/bootstrap-fileupload.js"></script>
<?php endif; if(!empty($file_index_file)): ?>
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/bootstrap-fileupload.js"></script>
<?php endif; ?>

<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/ckeditor.js"></script>  
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/select2.min.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/wysihtml5-0.3.0.js"></script> 
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.toggle.buttons.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/bootstrap-datetimepicker.js?201"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/clockface.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/date.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/daterangepicker.js?20112"></script> 
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/bootstrap-colorpicker.js"></script>  
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.inputmask.bundle.min.js"></script>   
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.input-ip-address-control-1.0.min.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.multi-select.js"></script>   
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/moment.js"></script>   
<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/bootstrap-modal.js" type="text/javascript" ></script>
<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/bootstrap-modalmanager.js" type="text/javascript" ></script> 


<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/DT_bootstrap.js"></script>   


<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/additional-methods.min.js"></script>



<script src="<?php echo \think\Config::get('cms_resource'); ?>/kindeditor/kindeditor.js" type="text/javascript"></script>
<script src="<?php echo \think\Config::get('cms_resource'); ?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>
	<script src="<?php echo \think\Config::get('cms_resource'); ?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>  




	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/app.js"></script>	

	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/form-validation.js"></script>  
	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/table-advanced.js"></script>   
	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/table-managed.js"></script>    
	 <script src="<?php echo \think\Config::get('cms_resource'); ?>/js/form-components.js"></script>
	
	 <!-- <script src="<?php echo \think\Config::get('huai_god'); ?>/js/daterangepicker/daterangepicker.js?201"></script>   -->

</body>
</html>
<script type="text/javascript">
	$(function(){
		
		<?php if(isset($select_max) && !empty($select_max)): ?>
			$('#my_multi_select1').multiSelect(<?php echo $select_max; ?>);
		<?php else: ?>
			$('#my_multi_select1').multiSelect(0);
		<?php endif; ?>
		$('.chosen').chosen({
			'no_results_text':'没有找到关键字',
			'allow_single_deselect':true,
		})
        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                rtl : App.isRTL()
            });
        }

	})
</script>










<script>
    var editor;
    jQuery(document).ready(function() {
        App.init();
//需要修改的部分
        rules = {
            cname: {
                required: true,
            },
            kid: {
                required: true,
            },
            state: {
                required: true,
            },
            beizhu: {
                required: true,
            },
        };
        messages = { // custom messages for radio buttons and checkboxes
            cname: {
                required: '不能为空',
            },
            kid: {
                required: '不能为空',
            },
            state: {
                required: '不能为空',
            },
            beizhu: {
                required: '不能为空',
            },
        };
//需要修改的部分
        		    FormValidation.init(rules,messages);


		    <?php if(!empty($file_upload_index)): ?>
							   $('.upload_img').click(function(){	
			   
			   	   var formData = new FormData($( "#form_sample_2" )[0]); 
			   	   column = $(this).data('column');
			   	   formData.append('column',column);
			   	   formData.append('file_dir','<?php echo $file_dir; ?>');
				   $.ajax({  
				          url: '<?php echo url("upload/uploadImg"); ?>' ,  
				          type: 'post',  
				          data: formData,  
				          async: false,  
				          cache: false,  
				          contentType: false,  
				          processData: false,  
				          success: function (returndata) {  
				          		if(returndata!=0){
				          			$('#column_'+column).val(returndata);
				          			$('.default_img').html('');
				          			$('#click_'+column).html('已上传').removeClass('red').addClass('blue');
				          		}else{
				          			alert('未上传成功')
				          		}
				          },  
				          error: function (returndata) {  
				          }  
				   }); 		   	
			   })
		    <?php endif; if(!empty($file_index_file)): ?>
							   $('.upload_img').click(function(){	
			   
			   	   var formData = new FormData($( "#form_sample_2" )[0]); 
			   	   column = $(this).data('column');
			   	   formData.append('column',column);
			   	   formData.append('file_dir','<?php echo $file_dir; ?>');
				   $.ajax({  
				          url: '<?php echo url("upload/uploadImg"); ?>' ,  
				          type: 'post',  
				          data: formData,  
				          async: false,  
				          cache: false,  
				          contentType: false,  
				          processData: false,  
				          success: function (returndata) {  
				          		if(returndata!=0){
				          			$('#column_'+column).val(returndata);
				          			$('.default_img').html('');
				          			$('#click_'+column).html('已上传').removeClass('red').addClass('blue');
				          		}else{
				          			alert('未上传成功')
				          		}
				          },  
				          error: function (returndata) {  
				          }  
				   }); 		   	
			   })
		    <?php endif; if(!empty($files_upload_index)): ?>
		   		FormFileUpload.init();
			<?php endif; ?>
			// 富文本框初始化
			<?php if(!empty($editor)): foreach($editor as $v): ?>
	            	initKindEditor('#<?php echo $v; ?>');
		            function initKindEditor(field) {
			            KindEditor.ready(function(K) {
			                editor.push(K.create(field, {
			                    resizeType : 1,
			                    allowFileManager : true,
			                    allowPreviewEmoticons : false,
			                    allowImageUpload : true,
			                    uploadJson : '<?php echo url("upload/kindEditorUpload"); ?>?file_dir=<?php echo (isset($file_dir) && ($file_dir !== '')?$file_dir:''); ?>_text',
			                    height:500,
			                    width:'100%',
			                    filterMode: false,
			                    items : ["source", 
		                    		"|", 
		                    		"undo", "redo", 
		                    		"|", 
		                    		"preview", "print", "template", "code", "cut", "copy", "paste", "plainpaste", "wordpaste",
									"|", 
									"justifyleft", "justifycenter", "justifyright", "justifyfull", "insertorderedlist", "insertunorderedlist", "indent", "outdent", "subscript", "superscript", "clearhtml", "quickformat", "selectall", 
									"|", 
									"fullscreen", "/", "formatblock", "fontname", "fontsize", 
									"|", 
									"forecolor", "hilitecolor", "bold", "italic", "underline", "strikethrough", "lineheight", "removeformat", 
									"|", 
									"image",  "table", "hr", "emoticons", "baidumap", "pagebreak", "anchor", "link", "unlink", 
									],
			                    afterBlur : function(){
				                	//编辑器失去焦点时直接同步，可以取到值
				                    this.sync();
				                }
			                })
			                )
			            });
			        }
				<?php endforeach; else: ?>
            	initKindEditor('.content');            
            	function initKindEditor(field) {
		            KindEditor.ready(function(K) {
		                editor = K.create(field, {
		                    resizeType : 1,
		                    allowFileManager : true,
		                    allowPreviewEmoticons : false,
		                    allowImageUpload : true,
		                    uploadJson : '<?php echo url("upload/kindEditorUpload"); ?>?file_dir=<?php echo (isset($file_dir) && ($file_dir !== '')?$file_dir:''); ?>_text',
		                    height:500,
		                    width:'100%',
		                    filterMode: false,
		                    items : ["source", 
		                    		"|", 
		                    		"undo", "redo", 
		                    		"|", 
		                    		"preview", "print", "template", "code", "cut", "copy", "paste", "plainpaste", "wordpaste",
									"|", 
									"justifyleft", "justifycenter", "justifyright", "justifyfull", "insertorderedlist", "insertunorderedlist", "indent", "outdent", "subscript", "superscript", "clearhtml", "quickformat", "selectall", 
									"|", 
									"fullscreen", "/", "formatblock", "fontname", "fontsize", 
									"|", 
									"forecolor", "hilitecolor", "bold", "italic", "underline", "strikethrough", "lineheight", "removeformat", 
									"|", 
									"image",  "table", "hr", "emoticons", "baidumap", "pagebreak", "anchor", "link", "unlink", 
									],
		                    afterBlur : function(){
			                	//编辑器失去焦点时直接同步，可以取到值
			                    this.sync();
			                }
		                });
		            });
		        }
            <?php endif; ?>






    })
</script>