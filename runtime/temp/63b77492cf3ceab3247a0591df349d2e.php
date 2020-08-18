<?php if (!defined('THINK_PATH')) exit(); /*a:10:{s:83:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\branch\index.html";i:1537169500;s:84:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\header.html";i:1537169502;s:81:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\top.html";i:1537169502;s:82:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\left.html";i:1537169502;s:95:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\table\show_column.html";i:1537169502;s:93:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\table\page_size.html";i:1557211441;s:89:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\table\thead.html";i:1537169502;s:82:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\page.html";i:1537169502;s:84:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\footer.html";i:1541236459;s:96:"D:\phpstudy_pro\WWW\www.aimier.com\public/../application/cms\view\common\public_js\js_table.html";i:1537169502;}*/ ?>
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
	<div class="page-container ">
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
		<!--主题内容页面-->
		<div class="page-content">
			<div class="container-fluid">
				<div class="row-fluid" style="height:25px;">
							<div class="span12">
								<h3 class="page-title">部门管理
								</h3>
								<ul class="breadcrumb">
									<li>
										<i class="icon-home"></i>
										<a href="<?php echo url('index/index'); ?>">首页</a> 
										<i class="icon-angle-right"></i>
									</li>
									<li> 
										<div href="javascript:;" style='font-size:14px;'>
											列表
										</div>
									</li>
								</ul>
							</div>
						</div>
				<div class="row-fluid inbox">
				<a style="margin-bottom: 5px;" data-toggle="modal" class="btn blue" href="#responsive"><i class="icon-plus"></i> 添加部门信息</a>

					<div class="portlet box green">
												<div class="portlet-title">
							<div class="caption"><i class="icon-reorder"></i><?php echo (isset($table_title) && ($table_title !== '')?$table_title:'列表信息'); ?></div>
							<div class="actions">
									<div class="btn-group">
										<a class="btn" href="#" data-toggle="dropdown">
										显示字段
										<i class="icon-angle-down"></i>
										</a>
										<div id="sample_1_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
											<?php foreach($my_rule['showlist'] as $k=>$v): if(isset($hidden_index)): ?>
												<label><input type="checkbox" <?php if(!in_array($k,$hidden_index)): ?> checked <?php endif; ?> data-column="<?php echo $k+$init_index; ?>"><?php echo $v; ?></label>
												<?php else: ?>
												<label><input type="checkbox"  checked data-column="<?php echo $k+$init_index; ?>"><?php echo $v; ?></label>
												<?php endif; endforeach; if(!isset($no_edit)): ?>
											<label><input type="checkbox" checked data-column="<?php echo $edit_index; ?>">操作</label>
											<?php endif; ?>
										</div>
									</div>
							</div>
						</div> 
						<div class="portlet-body no-more-tables" style='overflow:auto'>	
													<div class="dataTable_length span1" style="width:134px;">
								<label>
									<select class="m-wrap small searchSize" name="searchSize" aria-controls="sample_1">
										<option  value="10" <?php if($searchSize=='10'): ?> selected <?php endif; ?>>10</option>
										<option  value="20" <?php if($searchSize=='20'): ?> selected <?php endif; ?>>20</option>
										<option  value="30" <?php if($searchSize=='30'): ?> selected <?php endif; ?>>30</option>
										<option  value="50" <?php if($searchSize=='50'): ?> selected <?php endif; ?>>50</option>
									</select>
							
								</label>
							</div>
						<form action="<?php echo url('index'); ?>" id='searchForm' method='post' class="span3">
						<input type="hidden" name="searchSize" id='searchSize' value="<?php echo (isset($searchSize) && ($searchSize !== '')?$searchSize:''); ?>">
						<input type="text" name="name" class="m-wrap span9" placeholder="部门名称" value="<?php echo (isset($name) && ($name !== '')?$name:''); ?>">
										<a href="javascript:;" class="btn green submit"><i class="icon-search"></i>搜索</a>		
						</form>
							<table class="table table-striped table-bordered table-hover table-full-width table-condensed  cf"  id="sample_1" >
																<thead class='cf'>
									<tr>
										<?php if($init_index==2): ?>
										<th style="width:8px;" class="numeric"><nobr>选择</nobr></th>
										<?php endif; foreach($my_rule['showlist'] as $k=>$v): if(isset($hidden_index)): ?>
										<th data-column="<?php echo $k+$init_index; ?>" class="numeric <?php if(in_array($k,$hidden_index)): ?> inithidden <?php endif; ?>"><nobr><?php echo $v; ?>&nbsp;&nbsp;&nbsp;</nobr></th>
										<?php else: ?>
										<th data-column="<?php echo $k+$init_index; ?>" class="numeric"><nobr><?php echo $v; ?>&nbsp;&nbsp;&nbsp;</nobr></th>
										<?php endif; endforeach; if(!isset($no_edit)): ?>
											<th data-column="<?php echo $edit_index; ?>" class="numeric">操作</th>
										<?php endif; ?>
									</tr>
								</thead>
								<tbody>
									<?php foreach($list as $k=>$info): ?>
									<tr data-id='<?php echo $info['id']; ?>' >
										<?php if($init_index==2): ?>
										<td class="numeric"><input type="checkbox" class="checkboxes" value="1" data-id='<?php echo $info['id']; ?>'/></td>
										<?php endif; ?>
										<td data-column="1" data-title="序号" class="numeric"><nobr><?php echo $pagenumber+$k+1; ?></nobr></td>
										<td data-column="2" data-title="ID" class="numeric"><nobr><?php echo (isset($info['id']) && ($info['id'] !== '')?$info['id']:''); ?></nobr></td>
										<td data-column="3" data-title="类型名" class="numeric"><nobr><?php echo (isset($info['bmlx']) && ($info['bmlx'] !== '')?$info['bmlx']:''); ?></nobr></td>
										<td data-column="4" data-title="操作" class="numeric">
											<nobr>
												<a data-toggle="modal" href="#responsive2" class='btn mini blue responsive2' style='padding:4px 10px;'><i class="icon-pencil"></i> 修改</a>
												<a href="<?php echo url('role_node',array('id'=>$info['id'])); ?>" class='btn mini blue' style='padding:4px 10px;'><i class="icon-pencil"></i> 配置权限</a>
											</nobr>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							<?php if($init_index==2): ?>
							<button id="delete" class="btn mini red"><i class="icon-trash"></i>批量刪除 </button>
                            <label style='float:left;margin-right: 10px;'><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />全选</label>
                            <?php endif; ?>
													<div >
								<div class="dataTables_paginate paging_bootstrap pagination " style='margin: 0px auto;'>
									<?php echo $page; ?>
								</div>
						</div>



						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div id="responsive" class="modal hide fade" tabindex="-1" data-width="400">
	<form action="<?php echo url('add_bmlx'); ?>" method='post' enctype="multipart/form-data">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			<h3>地区设置</h3>
		</div>
		<div class="modal-body">
			<div class="row-fluid"><style type="text/css">{line-height: }</style>
				<div class="row-fluid">
					<div class="control-group">
						<label class="control-label span4" for="firstName" style="padding-top:6px;">部门名:</label>
						<div class="controls span3">
							<input name="bmlx" type="text" class=" m-wrap" placeholder="请输入部门名" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="reset" data-dismiss="modal" class="btn resetbut">取消</button>
			<input type="submit" class="btn blue" value="提交">
		</div>
	</form>
</div>
<div id="responsive2" class="modal hide fade" tabindex="-1" data-width="400">
	<form action="<?php echo url('update_bmlx'); ?>" method='post' enctype="multipart/form-data">
		<input type="hidden" name="id">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			<h3>地区设置</h3>
		</div>
		<div class="modal-body">
			<div class="row-fluid"><style type="text/css">{line-height: }</style>
				<div class="row-fluid">
					<div class="control-group">
						<label class="control-label span4" for="firstName" style="padding-top:6px;">部门名:</label>
						<div class="controls span3">
							<input name="bmlx" type="text" class=" m-wrap" placeholder="请输入部门名" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="reset" data-dismiss="modal" class="btn resetbut">取消</button>
			<input type="submit" class="btn blue" value="提交">
		</div>
	</form>
</div>
<!--页脚公共-->
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
			var initTable1 = function() {
			    function fnFormatDetails ( oTable, nTr )
			    {
			        var aData = oTable.fnGetData( nTr );
			        var sOut = '<table>';
			        <?php foreach($my_rule['showlist'] as $k=>$v): ?>                   //***************************************************************)

			        sOut += '<tr><td style="width:120px"><?php echo $v; ?>：</td><td>'+aData[<?php echo $k+$init_index; ?>].replace(/<(\/)*nobr>/ig,"")+'</td></tr>';
			        <?php endforeach; if(!isset($no_edit)): ?>
			        sOut += '<tr><td style="width:120px">操作：</td><td>'+aData[<?php echo $edit_index; ?>]+'&nbsp;<a href="javascript:;" class="btn mini black shouqi"><i class="icon-upload-alt"></i> 收起</a></td></tr>';
			        <?php endif; ?>
			        sOut += '</table>';
			         
			        return sOut;
			    }
			    var nCloneTh = document.createElement( 'th' );
			    var nCloneTd = document.createElement( 'td' );
			    nCloneTh.innerHTML = '<nobr>查看详情</nobr>';
			    nCloneTd.innerHTML = '<span class="row-details row-details-close"></span>';
			     
			    $('#sample_1 thead tr').each( function () {
			        this.insertBefore( nCloneTh, this.childNodes[0] );
			        $(this).children().first().css({'width':'40px'});
			    } );
			     
			    $('#sample_1 tbody tr').each( function () {
			        this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
			    } );
			     

			    var oTable = $('#sample_1').dataTable( {
			        "aoColumnDefs": [   //是否进行排序
			            {"bSortable": false, "aTargets": [ 0,-1] }
			        ],
			        // "aaSorting": [[1, 'asc']], //默认排序方式
			    //      "aLengthMenu": [         //分页下拉选择项
			    //         [5,10, 15, 20, -1],
			    //         [5,10, 15, 20, "All"] 
			    //     ],
			         "iDisplayLength": 50,       //默认分页数
			    });

			    // jQuery('#sample_1_wrapper .dataTables_filter input').addClass("m-wrap small"); // 查询的大小
			    jQuery('#sample_1_wrapper .row-fluid').remove(); // 查询的大小

			    // jQuery('#sample_1_wrapper .dataTables_length select').addClass("m-wrap small"); // 变小
			    jQuery('#sample_1_wrapper .dataTables_length').remove();  //删除分页
			    // jQuery('#sample_1_wrapper .dataTables_length select').select2(); // 默认选择哪个

			    jQuery('#sample_1_wrapper .row-fluid').last().remove();  //删除底部导航
			     

			    $('#sample_1').on('click', ' tbody td .row-details', function () {
			        var nTr = $(this).parents('tr')[0];
			        if ( oTable.fnIsOpen(nTr) )
			        {
			            /* This row is already open - close it */
			            $(this).addClass("row-details-close").removeClass("row-details-open");
			            oTable.fnClose( nTr );
			        }
			        else
			        {
			            /* Open this row */                
			            $(this).addClass("row-details-open").removeClass("row-details-close");
			            oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );

            			$('.shouqi').click(function(){
							return $(this).parents('tr').last().prev().first('td').find('span').first().click()
						})
						
			        }
			    });

		        $('#sample_1_column_toggler input[type="checkbox"]').change(function(){
		            /* Get the DataTables object again - this is not a recreation, just a get of the object */

		            var iCol = parseInt($(this).attr("data-column"));

		            var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
		            oTable.fnSetColumnVis(iCol, (bVis ? false : true));
	

		        });	

				function DIY_init_table(index){ // 自定义初始显示字段
		            $('#sample_1 .numeric').each(function(){
		            	if($(this).data('column')==index){
		            		$(this).removeClass('inithidden')
		            	}
		            });
		            var bVis = oTable.fnSettings().aoColumns[index].bVisible;
		            oTable.fnSetColumnVis(index, (bVis ? false : true));

				}
				<?php if(isset($hidden_index)): foreach($hidden_index as $v): ?>
						DIY_init_table(<?php echo $v+$init_index; ?>);
					<?php endforeach; endif; ?>		//默认隐藏字段索引值                          ***************************************************
			}
		    App.init();
		    // TableAdvanced.init(); //表单样式
        	if (jQuery().dataTable) {
            	initTable1();
            }
		    // TableManaged.init(); //表格样式
           jQuery('.group-checkable').change(function () {  //全选效果
                var set = jQuery(this).attr("data-set");
                var checked = jQuery(this).is(":checked");
                jQuery(set).each(function () {
                    if (checked) {
                        $(this).attr("checked", true);
                    } else {
                        $(this).attr("checked", false);
                    }
                });
                jQuery.uniform.update(set);
            });

			$('.submit').click(function(){                                         //***************************************************************)
				searchSize = $('.searchSize').val();
				$('#searchSize').val(searchSize);
				return $('#searchForm').submit();
			})
			$('.searchSize').change(function(){                                   //***************************************************************)
				searchSize = $('.searchSize').val();
				$('#searchSize').val(searchSize);
				return $('#searchForm').submit();
			})
		});
	</script>
<script type="text/javascript" src="<?php echo \think\Config::get('cms_resource'); ?>/js/bootstrap-fileupload.js"></script>
<script type="text/javascript">
	$(function(){
		$('.responsive2').click(function(){
			var pert = $(this).parent().parent().parent();
			var id = pert.data('id');
			var bmlx = pert.find('td[data-column="3"]').text();
			$('#responsive2').find('input[name="bmlx"]').val(bmlx);
			$('#responsive2').find('input[name="id"]').val(id);
		});
	})
</script>