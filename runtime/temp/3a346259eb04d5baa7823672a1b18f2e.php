<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"/www/wwwroot/emil_pc21_com_cn/public/../application/cms/view/login/login.html";i:1542793034;}*/ ?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>鱼苗</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- 全局样式 -->
	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- 全局样式结束 -->

	<!-- 登陆页样式 -->

	<link href="<?php echo \think\Config::get('cms_resource'); ?>/css/login-soft.css" rel="stylesheet" type="text/css"/>

	<!-- 登陆页结束样式 -->

	<link rel="shortcut icon" href="<?php echo \think\Config::get('cms_resource'); ?>/image/favicon.ico" />

</head>

<body class="login">


	<div class="logo">

		<!-- <img src="<?php echo \think\Config::get('cms_resource'); ?>/image/logo-big.png" alt="" />  -->

	</div>



	<div class="content">


		<form class="form-vertical login-form"  method='post' action='<?php echo url('login/dologin'); ?>'>

			<h3 class="form-title">登录到您的帐户</h3>

			<div class="alert alert-error hide">

				<button class="close" data-dismiss="alert"></button>

				<span>输入任何用户名和密码。</span>

			</div>

			<div class="control-group">


				<div class="controls">

					<div class="input-icon left">

						<i class="icon-user"></i>

						<input class="m-wrap placeholder-no-fix" type="text" placeholder="用户名" name="username"/>

					</div>

				</div>

			</div>

			<div class="control-group">

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-lock"></i>

						<input class="m-wrap placeholder-no-fix" type="password" placeholder="密码" name="password"/>

					</div>

				</div>

			</div>

			<!--<div class="control-group">

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-lock"></i>

						<input class="m-wrap placeholder-no-fix" style='width:30%;float:left' type="text" placeholder="验证码" name="verify"/>
						<img src="<?php echo captcha_src(); ?>" alt="" style="margin-left:10%;width:40%;height:34px;" onclick="this.src='<?php echo captcha_src(); ?>?d='+Math.random();" >
					</div>

				</div>

			</div>-->
			<div class="control-group" style='color:#fdd'>
				<?php switch(\think\Request::instance()->param('error')): case "1": ?>
					验证码错误！！！
				<?php break; case "2": ?>
					用户密码错误！！！
				<?php break; endswitch; ?>		
			</div>
				<button type="submit" class="btn red btn-block">
					<div style='float:left;width:60%;padding-left:19%'>
						登录 
					</div>
				
				<div class="m-icon-swapright m-icon-white" style="float:right"></div>
				</button>    

<!-- 			<div class="forget-password" style="text-align: center;">
					<a href="javascript:;"  id="forget-password">忘记密码</a>
			</div> -->

		</form>



		<form class="form-vertical forget-form" action="#">

			<h3 class="">忘记密码 ?</h3>

			<p>输入您的电子邮件地址重新设置您的密码.</p>

			<div class="control-group">

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-envelope"></i>

						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" name="email" />

					</div>

				</div>

			</div>

			<div class="form-actions">

				<button type="button" id="back-btn" class="btn">

				<i class="m-icon-swapleft"></i> Back

				</button>

				<button type="submit" class="btn blue pull-right">

				Submit <i class="m-icon-swapright m-icon-white"></i>

				</button>            

			</div>

		</form>
	</div>


	<div class="copyright">

		2018 © Power by Sansed

	</div>


	<!-- 核心插件 -->

	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/excanvas.min.js"></script>

	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- 核心插件结束 -->

	<!-- 页面级别的插件 -->

	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.validate.min.js" type="text/javascript"></script>

	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/jquery.backstretch.min.js" type="text/javascript"></script>

	<!-- 页面级别的插件结束 -->

	<!-- 页面级别的脚本-->

	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/app.js" type="text/javascript"></script>

	<script src="<?php echo \think\Config::get('cms_resource'); ?>/js/login-soft.js" type="text/javascript"></script>      

	<!-- 页面级别脚本 --> 

	<script>

		jQuery(document).ready(function() {     

		  App.init();

		  Login.init();

		});

	</script>
</body>
</html>