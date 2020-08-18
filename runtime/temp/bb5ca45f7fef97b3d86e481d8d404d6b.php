<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:86:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\cms_user\update.html";i:1537169500;s:84:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\header.html";i:1537169502;s:81:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\top.html";i:1537169502;s:82:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\left.html";i:1537169502;s:81:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\nav.html";i:1537169502;s:84:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\footer.html";i:1541236459;}*/ ?>
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
					<span class="title">Dashboard</span>
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
								<h3 class="page-title">管理员修改
								</h3>
								<ul class="breadcrumb">
									<li>
										<i class="icon-home"></i>
										<a href="<?php echo url('index/index'); ?>">首页</a> 
										<i class="icon-angle-right"></i>
									</li>
									
									<li> 
										<div href="javascript:;" style='font-size:14px;'>
											管理员修改
										</div>
									</li>
								</ul>
							</div>
						</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="portlet box green">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>编辑</div>
								<div class="tools">
								</div>
							</div>
							<div class="portlet-body form">
								<form action="<?php echo url('update'); ?>" method='post' id="form_sample_2" class="form-horizontal">
									<input type="hidden" name='backurl' value='<?php echo (isset($backurl) && ($backurl !== '')?$backurl:''); ?>'>
									<input type="hidden" name='id' value='<?php echo (isset($info['id']) && ($info['id'] !== '')?$info['id']:''); ?>'>

									<div class="control-group">

										<label class="control-label">用户名<span class="required">*</span></label>
										<div class="controls">
											<input type="text" value='<?php echo (isset($info['name']) && ($info['name'] !== '')?$info['name']:''); ?>' data-required="1" class="span6 m-wrap" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">角色分配<span class="required">*</span></label>
										<div class="controls">
											<label class="checkbox line">
											<input type="radio" name="is_super"  value="0" <?php if($info['is_super']==0): ?> checked <?php endif; ?>/>管理员
											</label>
											<label class="checkbox line">
											<input type="radio" name="is_super"  value="1" <?php if($info['is_super']==1): ?> checked <?php endif; ?>/>超级管理员
											</label>
											<div id="form_2_service_error"></div>
										</div>
									</div>
									<div class="form-actions">

										<button type="submit" class="btn green">保存</button>

										<button type="reset" class="btn">取消</button>

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
		jQuery(document).ready(function() {       
		   App.init();
		   //FormValidation.init();
		})
	</script>