<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"C:\wwwroot\AMS\public/../application/index\view\parentlogin\index.html";i:1511752546;}*/ ?>
<!DOCTYPE html>
<html>
 <head> 
  <meta charset="UTF-8" /> 
  <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, user-scalable=no" /> 
  <meta name="apple-mobile-web-app-status-bar-style" content="black" /> 
  <meta name="apple-mobile-web-app-capable" content="yes" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <meta name="format-detection" content="address=no" /> 
  <title></title> 
  <link rel="stylesheet" href="__STATIC__/css/reset.css" /> 
  <link rel="stylesheet" href="__STATIC__/css/common.css" /> 
  <script src="__STATIC__/js/jquerys-1.7.2.min.js"></script> 
  <script src="__STATIC__/js/rem.js"></script> 
 </head> 
 <body class="login"> 
  <div id="wrap" class="wrap1"> 
   <div class="login_w1"> 
    <form method="post" id="form"> 
     <div class="login_box"> 
	 
      <div class="clearfix"> 
       <span class="fl">用&nbsp;户&nbsp;名&nbsp;：</span> 
       <input type="text" class="fl" id="username" name="username" placeholder="输入手机号" /> 
      </div> 
      <div class="clearfix"> 
       <span class="fl">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</span> 
       <input type="password" class="fl" id="password" name="password" placeholder="输入密码" /> 
       <!--<button class="yzm_btn">获取验证码</button>--> 
      </div> 
      <button type="submit" id="submit" class="login_btn">家长登录</button> 
     </div> 
    </form> 
    <div class="qh_w"> 
     <div class="qh">
      <span>切换角色登录</span>
     </div> 
    </div> 
    <!--<a href="<?php echo \think\Url::build('Teacherlogin/index'); ?>" class="login_lx">教师登录</a>--> 
    <a href="javascript:;" class="login_lx login_lx1">教师登录</a> 
   </div> 
   <div class="login_w2" style="display:none;"> 
    <form method="post" id="form"> 
     <div class="login_box"> 
	
      <div class="clearfix"> 
       <span class="fl">用&nbsp;户&nbsp;名&nbsp;：</span> 
       <input type="text" class="fl" id="username1" name="username1" placeholder="输入手机号" /> 
      </div> 
      <div class="clearfix"> 
       <span class="fl">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</span> 
       <input type="password" class="fl" id="password1" name="password1" placeholder="输入密码" /> 
       <!--<button class="yzm_btn">获取验证码</button>--> 
      </div> 
      <button type="submit" id="submit1" class="login_btn">教师登录</button> 
     </div> 
    </form> 
    <div class="qh_w"> 
     <div class="qh">
      <span>切换角色登录</span>
     </div> 
    </div> 
    <!--<a href="<?php echo \think\Url::build('Teacherlogin/index'); ?>" class="login_lx">教师登录</a>--> 
    <a href="javascript:;" class="login_lx login_lx2">家长登录</a> 
   </div> 
  </div> 
  <div id="errM"></div>  
  <script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script> 
  <script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script> 
  <script type="text/javascript" src="__LIB__/Validform/5.3.2/Validform.min.js"></script> 
  <script>
   $(function(){
   
    $('.login_lx1').click(function(){
	$('.login_w1').hide();
	$('.login_w2').show();
	
	})
 $('.login_lx2').click(function(){
	$('.login_w2').hide();
	$('.login_w1').show();
	
	})
	
	 //家长登录
      var username = $("input[name='username']");
      var password = $("input[name='password']");
      var schoolName = $("#schoolName").val();
      //var code = $("input[name='code']");
      $("#submit").click(function(){
          event.preventDefault();//取消默认提交表单
          var username = $("#username").val(); 
          var password = $("#password").val(); 
          var schoolName = $("#schoolName").val();
        
          //alert(password);
        
        //serialize() 方法通过序列化表单值，创建 URL 编码文本字符串,这个是jquery提供的方法  
        $.ajax({  
            type:"POST", //提交方式
            //dataType:"TEXT", //返回数据格式
            url:"<?php echo \think\Url::build('Parentlogin/checkLogin'); ?>",  
            data:{username:username,password:password,schoolName:schoolName},//这里data传递过去的是序列化以后的字符串  
            success:function(ret){ 
                if (ret.code){
                    layer.msg(ret.msg);
                }
                else
                {
                    layer.msg(ret.msg);
                    location.href = '<?php echo \think\Request::instance()->get('callback')?: \think\Url::build("Index/index"); ?>';
                }
            }  
        }); })
    })

 //教师登录
      var username1 = $("input[name='username1']");
      var password1 = $("input[name='password1']");
      var schoolName1 = $("#schoolName1").val();
      $("#submit1").click(function(){
          event.preventDefault();//取消默认提交表单
          var username1 = $("#username1").val(); 
          var password1 = $("#password1").val(); 
          var schoolName1 = $("#schoolName1").val();
        //alert(schoolName1);
        
        //serialize() 方法通过序列化表单值，创建 URL 编码文本字符串,这个是jquery提供的方法  
        $.ajax({  
            type:"POST", //提交方式
            //dataType:"TEXT", //返回数据格式
            url:"<?php echo \think\Url::build('Teacherlogin/checkLogin'); ?>",  
            data:{username:username1,password:password1,schoolName:schoolName1},//这里data传递过去的是序列化以后的字符串  
            success:function(ret){ 
                if (ret.code){
                    layer.msg(ret.msg);
                }
                else
                {
                    layer.msg(ret.msg);
                    location.href = '<?php echo \think\Request::instance()->get('callback')?: \think\Url::build("Index/index"); ?>';
                }
            }  
        }); })

    

</script> 

 </body>
</html>