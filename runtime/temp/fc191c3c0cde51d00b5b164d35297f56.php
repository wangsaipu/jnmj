<?php if (!defined('THINK_PATH')) exit(); /*a:10:{s:78:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/lanmu/update.html";i:1537424223;s:79:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/common/header.html";i:1537169502;s:76:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/common/top.html";i:1537169502;s:77:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/common/left.html";i:1537169502;s:76:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/common/nav.html";i:1537169502;s:79:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/common/footer.html";i:1541236461;s:90:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/common/public_js/js_tmpl.html";i:1537169502;s:93:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/common/public_js/fileupload.html";i:1537169502;s:86:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/common/add/footer_js.html";i:1537169500;s:87:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/common/public_js/file.html";i:1537169502;}*/ ?>
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
						<h3 class="page-title">修改栏目信息
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="<?php echo url('index/index'); ?>">首页</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								
								<a href="<?php echo url('lanmu/index'); ?>">栏目管理</a>
								<i class="icon-angle-right"></i>
							</li>
							
							<li> 
								<div href="javascript:;" style='font-size:14px;'>
									修改栏目信息
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
										<label class="control-label">栏目名称<span class="required">*</span></label>
										<div class="controls">
											<input type="text" name="lname" class="span6 m-wrap" placeholder="请输入栏目名称" value="<?php echo (isset($info['lname']) && ($info['lname'] !== '')?$info['lname']:''); ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">PC网址<span class="required">*</span></label>
										<div class="controls">
											<input type="text" name="pcurl" class="span6 m-wrap" placeholder="PC网址" value="<?php echo (isset($info['pcurl']) && ($info['pcurl'] !== '')?$info['pcurl']:''); ?>">
										</div>
									</div>
                                  <div class="control-group">
										<label class="control-label">移动端网址<span class="required">*</span></label>
										<div class="controls">
											<input type="text" name="murl" class="span6 m-wrap" placeholder="移动端网址" value="<?php echo (isset($info['murl']) && ($info['murl'] !== '')?$info['murl']:''); ?>">
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








<!-- 文件上传js html脚本   无文件上传请删除-->
<?php if(!empty($files_upload_index)): ?>
	<!-- 
	jquery上传插件的效果模板  既然post提交数据库
	file.name             文件名字
	file.size             文件大小
	file.thumbnail_url    数据库存储的值
	file.column           数据库字段名
 -->
<div class="row-fluid" >

					<div class="span12">

						<script id="template-upload" type="text/x-tmpl">

							{% for (var i=0, file; file=o.files[i]; i++) { %}

							    <tr class="template-upload fade">

							        <td class="preview"><span class="fade"></span></td>

							        <td class="name"><span>{%=file.name%}</span></td>

							        <td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>

							        {% if (file.error) { %}

							            <td class="error" colspan="2"><span class="label label-important">Error</span> {%=file.error%}</td>

							        {% } else if (o.files.valid && !i) { %}

							            <td>

							                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="bar" style="width:0%;"></div></div>

							            </td>

							            <td class="start">{% if (!o.options.autoUpload) { %}

							                <button class="btn">

							                    <i class="icon-upload icon-white"></i>

							                    <span>上传</span>

							                </button>

							            {% } %}</td>

							        {% } else { %}

							            <td colspan="2"></td>

							        {% } %}

							        <td class="cancel">{% if (!i) { %}

							            <button class="btn red">

							                <i class="icon-ban-circle icon-white"></i>

							                <span>取消</span>

							            </button>

							        {% } %}</td>

							    </tr>

							{% } %}

						</script>

						<!-- The template to display files available for download -->

						<script id="template-download" type="text/x-tmpl">

							{% for (var i=0, file; file=o.files[i]; i++) { %}

							    <tr class="template-download fade">

							        {% if (file.error) { %}

							            <td></td>

							            <td class="name" ><span>{%=file.name%}</span></td>

							            <td class="size" ><span>{%=o.formatFileSize(file.size)%}</span></td>

							            <td class="error" colspan="2" style='line-height:36px'><span class="label label-important">Error</span> {%=file.error%}</td>

							        {% } else { %}

							            <td class="preview">

							            {% if (file.thumbnail_url) { %}
							            	<input type="hidden" name='{%=file.column%}[]' value="{%=file.thumbnail_url%}">

							                <a class="fancybox-button" data-rel="fancybox-button" href="<?php echo \think\Config::get('cms_upload'); ?>/{%=file.thumbnail_url%}" title="{%=file.name%}">

							                <img src="<?php echo \think\Config::get('cms_upload'); ?>/{%=file.thumbnail_url%}" width='100' >

							                </a>

							            {% } %}</td>

							            <td class="name" >

							                <a href="<?php echo \think\Config::get('cms_upload'); ?>/{%=file.thumbnail_url%}" title="{%=file.name%}" data-gallery="{%=file.thumbnail_url&&'gallery'%}" download="{%=file.name%}">{%=file.name%}</a>

							            </td>

							            <td class="size" ><span>{%=o.formatFileSize(file.size)%}</span></td>

							            <td colspan="2"></td>

							        {% } %}

							        <td class="delete">

							            <button class="btn red" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}"{% if (file.delete_with_credentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>

							                <i class="icon-trash icon-white"></i>

							                <span>删除</span>

							            </button>

							            <input type="checkbox" class="fileupload-checkbox hide" name="delete" value="1">

							        </td>

							    </tr>

							{% } %}

						</script>

					</div>

				</div>
	<script>
/*
    执行对象    #column_{ $k}    
    服务器存储文件夹    $ file_dir
*/ 
var FormFileUpload = function () {


    return {
        init: function () {
            <?php if(!empty($files_upload_index)): foreach($files_upload_index as $k=>$v): ?>
                $('#column_<?php echo $k; ?>').fileupload({
                    // autoUpload:true,
                    url: '<?php echo url("upload/fileupload",array("file_dir"=>$file_dir)); ?>',
                    dataType: 'json',
                    autoUpload: false,
                    acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                    maxFileSize: 999000,
                    disableImageResize: /Android(?!.*Chrome)|Opera/
                        .test(window.navigator.userAgent),
                    previewMaxWidth: 100,
                    previewMaxHeight: 100,
                    previewCrop: true
                })
                <?php endforeach; endif; if(!empty($files_index_file)): foreach($files_index_file as $k=>$v): ?>
                $('#column_<?php echo $k; ?>').fileupload({
                    // autoUpload:true,
                    url: '<?php echo url("upload/fileupload",array("file_dir"=>$file_dir)); ?>',
                    dataType: 'json',
                    autoUpload: false,
                    acceptFileTypes: /(\.|\/)(text|docx)$/i,
                    maxFileSize: 999000,
                    disableImageResize: /Android(?!.*Chrome)|Opera/
                        .test(window.navigator.userAgent),
                    previewMaxWidth: 100,
                    previewMaxHeight: 100,
                    previewCrop: true
                })
                <?php endforeach; endif; ?>
            

            if ($.support.cors) {
                $.ajax({
                    url: '<?php echo url("upload/fileupload",array("file_dir"=>$file_dir)); ?>',
                    type: 'HEAD'
                }).fail(function () {
                    $('<span class="alert alert-error"/>')
                        .text('上载服务器当前不可用！！！')
                        .appendTo('#fileupload');
                });
            }

            // initialize uniform checkboxes  
            App.initUniform('.fileupload-toggle-checkbox');
        }

    };
}(); 



</script>

 
<?php endif; ?>
<script>
	var editor;
	jQuery(document).ready(function() {       
	   App.init();
//需要修改的部分 
		rules = {
				dy_bname: {
                    required: true,
                },
                dy_name: {
                    required: true,
                },
                dy_title: {
                    required: true,
                },
            };
        messages = { // custom messages for radio buttons and checkboxes
        		dy_bname: {
                    required: '不能为空',
                },
                dy_name: {
                    required: '不能为空',
                },
                dy_title: {
                    required: '不能为空',
                },
            };//需要修改的部分 
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