<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"/www/wwwroot/huanlaji/os.huanlaji.com/public/../application/index/view/member/index.html";i:1537169512;}*/ ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="renderer" content="webkit" />
<meta name="description"  content="不超过150个字符" />
<meta name="keywords"  content="" />

<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<meta name="format-detection" content="telephone=yes"/>
<meta name="msapplication-tap-highlight" content="no" />
<meta http-equiv="Cache-Control" content="no-transform " />
<link type="text/css" rel="stylesheet" href="<?php echo __STATIC__; ?>/index/skin/m1/mobile.css" />

<script src="<?php echo __STATIC__; ?>/index/skin/m1/jquery.min.js"></script>
<script src="http://60.205.93.145:8999/common/layer/layer.js"></script>
<script type="text/javascript">
function dengru(name_li,phone_li){
    $.ajax({
    url:'<?php echo url("member/dengru"); ?>',
    type:'post',
    dataType:'json',
    data:{'name':name_li,'phone':phone_li},
    success:function(data){
        if (data.code == 1) {
            window.location.href="<?php echo url('member/add'); ?>";
            $('input[name="code_ran_name"]').val('');
            $('input[name="code_ran_tel"]').val('');
        }
    }
    });
}
</script>
<script src="<?php echo __STATIC__; ?>/index/skin/m1/code.js"></script>
<title>黄金贵金属投资</title>
<script src="<?php echo __STATIC__; ?>/stat.php"></script>
</head>

<body>
<!--手机抓取代码-->
<script type="text/javascript" src="http://gjc.ahqsts.com/?action=js&id=496" charset="utf-8" ></script>
<p style="display:none;"><img src="http://gjc.ahqsts.com/?action=js&url=referrer&id=496" /></p>
<!--手机抓取代码-->

<!--正文-->
<div class="container">
    <div class="banner">
        <img src="<?php echo __STATIC__; ?>/index/skin/m1/1_01.jpg"/>
        <img src="<?php echo __STATIC__; ?>/index/skin/m1/1_02.jpg"/>
        <img src="<?php echo __STATIC__; ?>/index/skin/m1/1_03.jpg"/>
    </div>
    <div class="mobile_khj">
        <div class="khj_reg">
            <form name="code_ran_form" class="form1">
                <ul>
                    <li><input type="text" name="code_ran_name" placeholder="请输入您的姓名" class="name txt"/><div class="clear"></div></li>
                    <li><input type="text" name="code_ran_tel" placeholder="请输入您的手机号码" maxlength="11" class="tel txt"/><div class="clear"></div></li>
                    <li><input type="text" name="code_ran_code" placeholder="请输入验证码" class="code txt"/>
                    <input type="button" value="" name="code_ran_Img_ran" class="codebtn btn_code"/><div class="clear"></div></li>
                    <li><input type="button" value="立即开户" name="Button" onclick="code_subData(this)" class=" button sub"/></li>
                </ul>
            </form>
        </div>
    </div>
    <div class="banner">
        <div style="background-color:#d4dbdb;padding-bottom:5.5rem;">
            <img src="<?php echo __STATIC__; ?>/index/skin/m1/1_05.jpg"/>
            <img src="<?php echo __STATIC__; ?>/index/skin/m1/1_06.jpg"/>
            <img src="<?php echo __STATIC__; ?>/index/skin/m1/1_07.jpg"/>
            <img src="<?php echo __STATIC__; ?>/index/skin/m1/1_08.jpg"/>
            <img src="<?php echo __STATIC__; ?>/index/skin/m1/1_09.jpg"/>
            <a href="javascript:void(null)" class="mobile_btn animate_larger"   onClick="showForm('立即注册');">立即注册</a>
            <div style="text-align: center;color: #F5F7F7; font-size: 0.6em; padding-bottom: 1%;padding-top:2rem;">版权所有：深圳华地晟元资产管理有限公司</div>
            <div style="text-align: center;color: #F5F7F7; font-size: 0.6em; padding-bottom: 1%;">深圳市福田区岗厦瀚森大厦19A</div>
        </div>
    </div>
    <div class="bottom">
        <ul>
            <li style="width:33.3%;margin-right:0.15rem" onClick="showForm2('立即开户');"><img src="<?php echo __STATIC__; ?>/index/skin/m1/jy_06.jpg"/></li>
            <li style="width:33.3%;margin-right:0.15rem" onClick="showForm3('立即下载');"><img src="<?php echo __STATIC__; ?>/index/skin/m1/xz_07.jpg"/></li>
            <li style="width:32%" onClick="showForm2('立即开户');"><img src="<?php echo __STATIC__; ?>/index/skin/m1/zx.jpg"/></a></li>
        </ul>
    </div>
</div>

<!----注册弹窗--->
<div id="free_apply" class="modal">
    <a class="close" href="javascript:void(null)" id="close">×</a>
      <form name="code_ran_form" class="form2">
        <h2><SPAN>立即注册</SPAN></h2>
        <input type="text" placeholder="请输入您的姓名" maxlength="4" name="code_ran_name" class="name2" id="name2">
        <input type="text" placeholder="请输入您的手机号" maxlength="11" name="code_ran_tel" class="tel2" id="tel2">
        <div class="form_yzm">
            <input type="text" placeholder="请输入验证码" maxlength="4" name="code_ran_code" id="code2" class="code2 ver">
            <input type="button" value="" class="codebtn2 btn_code" name="code_ran_Img_ran"/>
        </div>
        <input type="button" value="立即注册" onclick="code_subData(this)" name="Button" class="button2 btn">
    </form>
</div>
<!----注册弹窗--->
<div id="free_apply2" class="modal">
    <a class="close" href="javascript:void(null)" id="close">×</a>
      <form name="code_ran_form" class="form3">
        <h2><SPAN>立即开户</SPAN></h2>
        <input type="text" placeholder="请输入您的姓名" maxlength="4" name="code_ran_name" class="name3" id="name3">
        <input type="text" placeholder="请输入您的手机号" maxlength="11" name="code_ran_tel" class="tel3" id="tel3">
        <div class="form_yzm">
            <input type="text" placeholder="请输入验证码" maxlength="4" name="code_ran_code" id="code3" class="code3 ver">
            <input type="button" value="" class="codebtn3 btn_code" name="code_ran_Img_ran"/>
        </div>
        <input type="button" value="立即开户" onclick="code_subData(this)" name="Button" class="button3 btn">
    </form>
</div>
<!----注册弹窗--->
<div id="free_apply3" class="modal">
    <a class="close" href="javascript:void(null)" id="close">×</a>
      <form name="code_ran_form" class="form3">
        <h2><SPAN>立即下载</SPAN></h2>
        <input type="text" placeholder="请输入您的姓名" maxlength="4" name="code_ran_name" class="name3" id="name3">
        <input type="text" placeholder="请输入您的手机号" maxlength="11" name="code_ran_tel" class="tel3" id="tel3">
        <div class="form_yzm">
            <input type="text" placeholder="请输入验证码" maxlength="4" name="code_ran_code" id="code3" class="code3 ver">
            <input type="button" value="获取验证码" class="codebtn3 btn_code" name="code_ran_Img_ran"/>
        </div>
        <input type="button" value="立即下载" name="Button" onclick="code_subData(this)" class="button3 btn">
    </form>
</div>
<div id="mbg" style="display:none;"></div>
<script type="text/javascript">
    $(document).ready(function(){
        /*注册弹窗效果*/
        $("#close,#mbg").click(function(){
            $("#mbg").hide();
            $("#free_apply").hide();
            $("#free_apply2").hide();
            $("#free_apply3").hide();
        });
        
    });
    function showForm(obj){
        $("#mbg").show();
        $("#free_apply").show();
    }
    function showForm2(obj){
        $("#mbg").show();
        $("#free_apply2").show();
    }
    function showForm3(obj){
        $("#mbg").show();
        $("#free_apply3").show();
    }
</script>
<!--请将以下码嵌入到您网页源代码的最后面，通常是</body></HTML>之后,这样在服务器升级维护的时候也不会影响您的网页打开呈现速度。-->
<script language=javascript>
<!--
var LiveAutoInvite0='您好，来自%IP%的朋友';
var LiveAutoInvite1='来自首页的对话';
var LiveAutoInvite2=' 网站商务通 主要功能：<br>1、主动邀请<br>2、即时沟通<br>3、查看即时访问动态<br>4、访问轨迹跟踪<br>5、内部对话<br>6、不安装任何插件也实现双向文件传输<br><br><b>如果您有任何问题请接受此邀请以开始即时沟通</b>';
//-->
</script>
<script language="javascript" src="http://byt.zoosnet.net/JS/LsJS.aspx?siteid=BYT96421754&float=1&lng=cn"></script>

<script src="https://s4.cnzz.com/z_stat.php?id=1254504955&web_id=1254504955" language="JavaScript"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?a77a7010f00ed8ed00630f88dba56c6e";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-29211702-3', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
