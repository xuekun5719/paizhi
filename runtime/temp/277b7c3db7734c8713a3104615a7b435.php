<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:88:"D:\demo\PHPTutorial\WWW\AMS2\public/../application/admin\view\school_management\pay.html";i:1526519698;s:80:"D:\demo\PHPTutorial\WWW\AMS2\public/../application/admin\view\template\base.html";i:1526016189;s:91:"D:\demo\PHPTutorial\WWW\AMS2\public/../application/admin\view\template\javascript_vars.html";i:1526016189;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title><?php echo \think\Config::get('site.title'); ?></title>
    <link rel="Bookmark" href="__ROOT__/favicon.ico" >
    <link rel="Shortcut Icon" href="__ROOT__/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="__LIB__/html5.js"></script>
    <script type="text/javascript" src="__LIB__/respond.min.js"></script>
    <script type="text/javascript" src="__LIB__/PIE_IE678.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/Hui-iconfont/1.0.7/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/icheck/icheck.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/app.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/icheck/icheck.css"/>
    
    <!--[if IE 6]>
    <script type="text/javascript" src="__LIB__/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--定义JavaScript常量-->
<script>
    window.THINK_ROOT = '<?php echo \think\Request::instance()->root(); ?>';
    window.THINK_MODULE = '<?php echo \think\Url::build("/" . \think\Request::instance()->module(), "", false); ?>';
    window.THINK_CONTROLLER = '<?php echo \think\Url::build("___", "", false); ?>'.replace('/___', '');
</script>
</head>
<body>

<nav class="breadcrumb">
    <div id="nav-title"></div>
    <a class="btn btn-success radius r btn-refresh" style="line-height:1.6em;margin-top:3px" href="javascript:;" title="刷新"><i class="Hui-iconfont"></i></a>
</nav>


<div class="page-container">
	<form class="form" id="form" method="post" action="<?php echo url('SchoolManagement/alipay'); ?>">
    <div class="row cl">
    	<div class="col-xs-2 col-sm-2"></div>
    	<div class="col-xs-8 col-sm-8">
			<div class="three steps mb-30" style="margin:0 -15px;">
			  <span class="step">1. 填写预招人数信息</span>
			  <span class="active step">2. 确认并支付</span>
			  <span class="disabled step">3. 完成</span>
			</div>
			<div class="row cl pay-content">
				支付订单详情！
			</div>
			<form action="" method="post" class="form ">
			<div class="row cl pay-list">
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="微信支付" />
					<img src="__STATIC__/images/pay/WXPAY.png" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="支付宝" />
					<img src="__STATIC__/images/pay/alipay.jpg" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="中国银联" />
					<img src="__STATIC__/images/pay/unionpay.gif" alt="" />
				</div>
			</div>
			<div class="row cl pay-list">
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="交通银行" />
					<img src="__STATIC__/images/pay/BCOM.gif" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="农业银行" />
					<img src="__STATIC__/images/pay/ABC.gif" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="中国银行" />
					<img src="__STATIC__/images/pay/BOC.gif" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="北京银行" />
					<img src="__STATIC__/images/pay/BJBANK.gif" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="中国邮政" />
					<img src="__STATIC__/images/pay/PSBC.gif" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="上海银行" />
					<img src="__STATIC__/images/pay/BOS.gif" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="渤海银行" />
					<img src="__STATIC__/images/pay/CBHB.gif" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="建设银行" />
					<img src="__STATIC__/images/pay/CCB.gif" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="光大银行" />
					<img src="__STATIC__/images/pay/CEBB.gif" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="兴业银行" />
					<img src="__STATIC__/images/pay/CIB.gif" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="招商银行" />
					<img src="__STATIC__/images/pay/CMB.gif" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="民生银行" />
					<img src="__STATIC__/images/pay/CMBC.gif" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="中信银行" />
					<img src="__STATIC__/images/pay/CNCB.gif" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="广发银行" />
					<img src="__STATIC__/images/pay/GDB.gif" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="华夏银行" />
					<img src="__STATIC__/images/pay/HXB.gif" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="工商银行" />
					<img src="__STATIC__/images/pay/ICBC.gif" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="宁波银行" />
					<img src="__STATIC__/images/pay/NBBANK.gif" alt="" />
				</div>
				
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="平安银行" />
					<img src="__STATIC__/images/pay/SPABANK.gif" alt="" />
				</div>
				<div class="col-xs-3 col-sm-3 radio-box">
					<input type="radio" name="pay" id="" value="浦发银行" />
					<img src="__STATIC__/images/pay/SPDB.gif" alt="" />
				</div>
			</div>
			
			<div class="row cl">
				<input type="submit" value="确认支付" class="btn btn-primary radius f-r"/>
			</div>
			</form>
    	</div>
    	<div class="col-xs-2 col-sm-2"></div>
    </div>
    </form>
</div>
<style>
	.steps .step.active, .active.step{background: #fea128;}
	.steps .step.active:after, .active.steps:after{border-left-color: #fea128;}
	.pay-content{border: 1px solid #ddd;padding: 15px;}
	.pay-list{border:1px solid #ddd;padding: 15px;}
	.pay-list>div{margin: 10px 0;}
	.pay-list img{border: 1px solid #ddd;width:90%;margin-top: -5px;}
</style>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

<script src="__LIB__/laypage/1.3/laypage.js"></script>
<script src="__LIB__/lightbox2/js/lightbox.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('.pay-list input').iCheck({
			checkboxClass: 'icheckbox-blue',
			radioClass: 'iradio-blue',
			increaseArea: '20%'
		})
	});

	$('.pay-list div').click(function(){
		$('.pay-list div').find('.iradio-blue').removeClass('checked');
		$(this).find('.iradio-blue').addClass('checked');
		var val = $(this).find('input').val()
		console.log(val)
	})
	
	/*$(function(){
		$('.remove-post').click(function(){
			layer.confirm('是否要删除该职位？', {
	            btn : [ '确定', '取消' ]//按钮
	        }, function(index) {
	            layer.close(index);
	            //此处请求后台程序，下方是成功后的前台处理……
	        }); 
		})
	})*/
</script>

</body>
</html>