<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:74:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/zhao/add.html";i:1540890408;s:79:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/common/header.html";i:1537169502;s:76:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/common/top.html";i:1537169502;s:77:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/common/left.html";i:1537169502;s:76:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/common/nav.html";i:1537169502;s:79:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/common/footer.html";i:1541236459;s:86:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/common/add/footer_js.html";i:1537169500;s:87:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/common/public_js/file.html";i:1537169502;}*/ ?>
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
                        <h3 class="page-title">添加数据
                        </h3>
                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo url('index/index'); ?>">首页</a> 
                                <i class="icon-angle-right"></i>
                            </li>
                            <li>
                                
                                <a href="<?php echo url('qq/index'); ?>">客户数据</a>
                                <i class="icon-angle-right"></i>
                            </li>
                            
                            <li> 
                                <div href="javascript:;" style='font-size:14px;'>
                                    添加数据
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption"><i class="icon-reorder"></i>新增</div>
                                <div class="tools">
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form action="<?php echo url('add'); ?>" method='post' id="form_sample_2" class="form-horizontal">
                                    <input type="hidden" name='backurl' value='<?php echo (isset($backurl) && ($backurl !== '')?$backurl:''); ?>'>
                                    <div class="alert alert-error hide">  <!-- 后跳的位置 -->
                                        <button class="close" data-dismiss="alert"></button>
                                        你有一些形式的错误。请检查下面。
                                    </div> 
                                    <div class="alert alert-success hide">
                                        <button class="close" data-dismiss="alert"></button>
                                        您的表单验证成功！
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">项目<span class="required">*</span></label>
                                        <div class="controls">
                                            <select  class="m-wrap" data-with-diselect="1" name="lid" data-placeholder="请选择项目" tabindex="1">
                                                <option value=""></option>
                                                <?php echo new_getfkarr('lname','lanmu',$arr,[]); foreach($arr as $k=>$fk): if(isset($lname)): ?>
                                                <option value="<?php echo $fk['id']; ?>" <?php if($state==$fk['id']): ?> selected <?php endif; ?>><?php echo $fk['lname']; ?></option>
                                                <?php else: ?>
                                                <option value="<?php echo $fk['id']; ?>"><?php echo $fk['lname']; ?></option>
                                                <?php endif; endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">姓名<span class="required">*</span></label>
                                        <div class="controls">
                                            <input type="text" name="username" data-required="1" class="span6 m-wrap" placeholder="请输入客户姓名">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">手机<span class="required">*</span></label>
                                        <div class="controls">
                                            <input type="text" name="phonenum" data-required="1" class="span6 m-wrap" placeholder="请输入客户手机">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">地址<span class="required">*</span></label>
                                        <div class="controls">
                                            <input type="text" name="address" data-required="1" class="span6 m-wrap" placeholder="请输入地址">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">来源<span class="required">*</span></label>
                                        <div class="controls">
                                            <input type="text" name="laiyuan" data-required="1" class="span6 m-wrap" placeholder="请输入来源">
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label">客服<span class="required">*</span></label>
                                        <div class="controls">
                                            <input type="text" name="kid" data-required="1" class="span6 m-wrap" placeholder="请输入客服">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">数据状态<span class="required">*</span></label>
                                        <div class="controls">
                                            <select  class="m-wrap" data-with-diselect="1" name="state" data-placeholder="数据状态" tabindex="1">
                                                <option value=""></option>
                                                <?php echo new_getfkarr('state','data_state',$arr,[]); foreach($arr as $k=>$fk): if(isset($state)): ?>
                                                <option value="<?php echo $fk['state']; ?>" <?php if($state==$fk['id']): ?> selected <?php endif; ?>><?php echo $fk['state']; ?></option>
                                                <?php else: ?>
                                                <option value="<?php echo $fk['state']; ?>"><?php echo $fk['state']; ?></option>
                                                <?php endif; endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">备注<span class="required">*</span></label>
                                        <div class="controls">
                                            <input type="text" name="beizhu" data-required="1" class="span6 m-wrap" placeholder="请输入备注">
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
    var editor;
    jQuery(document).ready(function() {       
       App.init();
        rules = {
           /* qudao: {
                required: true,
            },
            cname: {
                required: true,
            },
            phonenum: {
                required: true,
            },*/
        };
        messages = { // custom messages for radio buttons and checkboxes
            /*qudao: {
                required: '不能为空',
            },
            cname: {
                required: '不能为空',
            },
            phonenum: {
                required: '不能为空',
            },*/

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