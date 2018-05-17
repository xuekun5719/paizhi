<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wwwroot\AMS\public/../application/index\view\entrance\index.html";i:1514336758;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, user-scalable=no" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="address=no" />
    <title>门禁</title>
    <link rel="stylesheet" href="__STATIC__/css/reset.css" />
    <link rel="stylesheet" href="__STATIC__/css/common.css">
    <script src="__STATIC__/js/jquerys-1.7.2.min.js"></script>
    <script src="__STATIC__/js/rem.js"></script>
</head>
<body>
    <div id="wrap">
   
      <div class="class_new" style="background: #FC729C;">
	   		<div class="new-left"style="border-radius: 3em;">
	   			 <img src="__STATIC__/../../<?php echo $linkman_info['linkman_headurl']; ?>">
	   		</div>
	   		<div class="new-right">
	   			<p>学生姓名</p>
	   			<span">所在班级</span>
	   		</div>
	   		<div class="clear"></div>
	  	</div>
      <div class="center_link">
         <a href="<?php echo \think\Url::build('Shuttle/index'); ?>">
            <img src="__STATIC__/img/shuttle.png"/>
                                    接送管理
          </a>
        <a href="<?php echo \think\Url::build('collect/index'); ?>">
        	<img src="__STATIC__/img/Head-image.png"/>
        	头像采集
        </a>
        <a href="<?php echo \think\Url::build('leave/index'); ?>">
        	<img src="__STATIC__/img/App-leave.png"/>
        	请假申请
        </a>
        <a href="<?php echo \think\Url::build('Workinfo/index'); ?>">
        	<img src="__STATIC__/img/Time-tag.png"/>
        	考勤记录
        </a>
      </div>
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
          <a href="<?php echo \think\Url::build('Entrance/index'); ?>" class="active fr"> 
            <i class="fexed-room"></i>
            <span style="color: #aeaeac;font-size: 10px;">门禁</span>
          </a>
          <a href="<?php echo \think\Url::build('Personal/index'); ?>" class="fr"> 
            <i class="fexed-our"></i>
            <span style="color: #aeaeac;font-size: 10px;">我的</span>
          </a>
    </div>
</body>

</html>