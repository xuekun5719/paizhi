<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wwwroot\AMS\public/../application/index\view\personal\index.html";i:1514188856;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, user-scalable=no" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="address=no" />
    <title>我的</title>
    <link rel="stylesheet" href="__STATIC__/css/reset.css" />
    <link rel="stylesheet" href="__STATIC__/css/common.css">
    <script src="__STATIC__/js/jquerys-1.7.2.min.js"></script>
    <script src="__STATIC__/js/rem.js"></script>
</head>
<body>
    <div id="wrap" style="margin-bottom:0;">
      <!--<div class="center_box">
        <h2>个人中心</h2>
        <div class="center_img">
          <img src="__STATIC__/../../uploads/file/<?php echo $headurl; ?>">
        </div>
      </div>-->
      <div class="class_new"style="background: #FC729C;">
	   		<div class="new-left"style="border-radius: 3em;">
	   			 <img src="__STATIC__/../../<?php echo $headurl; ?>">
	   		</div>
	   		<div class="new-right">
	   			<p><?php echo $name; ?></p>
	   			<span>成长值&nbsp;&nbsp;<i>1</i></span>
	   			<span>|</span>
	   			<span>小红花&nbsp;&nbsp;<i>0</i>朵</span>
	   		</div>
	   		<div class="clear"></div>
	  	</div>
      <div class="center_link">
        <a href="<?php echo \think\Url::build('Userinfo/index'); ?>">
        	<img src="__STATIC__/img/personal.png"/>
        	个人信息
        </a>
        <a href="<?php echo \think\Url::build('Modifyinformation/index'); ?>">
        	<img src="__STATIC__/img/detailed.png"/>
        	详情信息
        </a>
        <a href="<?php echo \think\Url::build('Mailbox/index'); ?>">
        	<img src="__STATIC__/img/Director-feedback.png"/>
        	园长反馈
        </a>
        <a href="<?php echo \think\Url::build('Copyright/index'); ?>">
        	<img src="__STATIC__/img/put-up.png"/>
        	设置
        </a>
      </div>
      <!--<a href="<?php echo \think\Url::build('Personal/logout'); ?>" class="unload">退出登录</a>-->
    </div>
    <div class="foot_nav">
         <a href="<?php echo \think\Url::build('Circle/index'); ?>" class="fl">
            <i class="fexed-qzhi"></i>
            <span style=" color: #aeaeac;font-size: 10px;">圈子</span>
          </a>
           <a href="<?php echo \think\Url::build('Index/index'); ?>" class="active_nav">
           <i class="fexed-class"></i>
           <span style="font-size: 10px;">班级</span>
          </a>
		 <a href="<?php echo \think\Url::build('News/index'); ?>">
           <i class="fexed-new"></i>
           <span style="color: #aeaeac; font-size: 10px;">消息</span>
         </a>
          <a href="<?php echo \think\Url::build('Entrance/index'); ?>" class="fr"> 
            <i class="fexed-room"></i>
            <span style="color: #aeaeac;font-size: 10px;">门禁</span>
          </a>
          <a href="<?php echo \think\Url::build('Personal/index'); ?>" class="active fr"> 
            <i class="fexed-our"></i>
            <span style="color: #aeaeac;font-size: 10px;">我的</span>
          </a>
    </div>
</body>
</html>