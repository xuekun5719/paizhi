<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"C:\wwwroot\AMS\public/../application/index\view\mailbox\index.html";i:1522373688;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, user-scalable=no" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="address=no" />
    <title>园长信箱</title>
    <link rel="stylesheet" href="__STATIC__/css/reset.css" />
    <link rel="stylesheet" href="__STATIC__/css/common.css">
    <script type="text/javascript" src="__STATIC__/js/jquerys-1.7.2.min.js"></script>
    <script type="text/javascript" src="__STATIC__/js/rem.js"></script>
	<script src="__STATIC__/js/jsbridge.js"></script>
</head>

<body>
    <div id="wrap">
        <header class="header">
            <a  class="back"></a>园长信箱
        </header>
        <form class="form form-horizontal" id="form" method="post">
		    <input type="hidden" name="account" value="<?php echo $account; ?>">
			<input type="hidden" name="type" value="<?php echo $type; ?>">
            <div class="star_b zb_b jy">
            <textarea class="xq_textarea" name="content" id="content"  placeholder="希望家长提出宝贵意见"></textarea>
            <button  type="submit"  class="submit_xx" >提交</button >
            </div>
        </form>
    </div>
    
</body>

<script>


 $(function(){
     $('#form').submit(function(){
        content = $('#content').val();
		var account = $(" input[ name='account' ] ").val();
		var type = $(" input[ name='type' ] ").val();
		if(content == ''){
			alert('请输入内容！');
			return false;
		}
         $.ajax({
             type:"POST", //post提交方式
             url:"<?php echo url('Index/Mailbox/getMessage'); ?>",
             data:{content:content,account:account,type:type},
			// async:false,
             success:function(data)
            {
                if(data == 'success'){
                    $('#content').val('');
                    alert('提交成功！');
                }
                if(data == 'fail'){
                    $('#content').val('');
                    alert('提交失败！');
                }
            }
         });
         return false;
     })
	 
	  // 首先调用JSBridge初始化代码，完成后再设置其他
        initJsBridge(function () {
			$(".back").click(function(){
				window.WebViewJavascriptBridge.callHandler('back','1', function (response) {
				
					 //showResponse(response);
				});
			
			})
		
	    })
 })
</script>
</html>