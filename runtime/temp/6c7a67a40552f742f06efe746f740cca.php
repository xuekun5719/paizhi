<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wwwroot\AMS\public/../application/index\view\workinfo\index.html";i:1522292229;}*/ ?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, user-scalable=no" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="address=no" />
    <title>接送记录</title>
    <link rel="stylesheet" href="__STATIC__/css/index.css" />
    <link rel="stylesheet" href="__STATIC__/css/common.css">
    <link rel="stylesheet" href="__STATIC__/css/reset.css" />
    <link rel="stylesheet" href="__STATIC__/css/swiper-3.4.2.min.css">
    <script type="text/javascript" src="__STATIC__/js/jquerys-1.7.2.min.js"></script>
    <script type="text/javascript" src="__STATIC__/js/rem.js"></script>
    <script type="text/javascript" src="__STATIC__/js/swiper-3.4.2.jquery.min.js"></script>
	<script src="__STATIC__/js/jsbridge.js"></script>
</head>
<body>
<div id="wrap"style="padding: 0;background: #f0f0f0;min-height: 100vh;">
    <header class="header  header-fixed">
        <a href="javascript:;" onclick="history.go(-1)" class="back"></a>接送记录
    </header>
    <div id="rightPart2" class="box rightPart2" style="margin-top: 0.54rem">
		<div class="schedule1">
			<div id="calendar">
				<table id="dayshow" class="dates">
					<tr class="riqi">
						<th class="tl" colspan="2"><button id="last-week" class="lastW" title="上一周">上一周</button></th>
						<th id="curday" style="color:#333;font-weight: bold !important;" colspan="3"></th>
						<th class="tr" colspan="2"><button id="next-week" class="nextW" title="下一周">下一周</button></th>
					</tr>
					<tr id="monitor">
						<td><div class="<?php if(!empty($riqi['0'])){?>button-bg3 <?php } ?>"><button >日<br/><i></i></button></div></td>
						<td><div class="<?php if(!empty($riqi['1'])){?>button-bg3 <?php } ?>"><button >一<br/><i></i></button></div></td>
                        <td><div class="<?php if(!empty($riqi['2'])){?>button-bg3 <?php } ?>"><button >二<br/><i></i></button></div></td>
                        <td><div class="<?php if(!empty($riqi['3'])){?>button-bg3 <?php } ?>"><button >三<br/><i></i></button></div></td>
                        <td><div class="<?php if(!empty($riqi['4'])){?>button-bg3 <?php } ?>"><button  >四<br/><i></i></button></div></td>
                        <td><div class="<?php if(!empty($riqi['5'])){?>button-bg3 <?php } ?>"><button >五<br/><i></i></button></div></td>
                        <td><div class="<?php if(!empty($riqi['6'])){?>button-bg3 <?php } ?>"><button  >六<br/><i></i></button></div></td>
					</tr>
				</table>
			</div>
		</div>
		<div id="ranking-item-container1" class="swiper-container" >
		    <div class="swiper-wrapper">
			    
			<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>    
			    <div class="swiper-slide ">
			        <div class="content-slide">
					<?php if(empty($vo)): ?>
			        	<div class="default-class">
				        	<div><img src="__STATIC__/img/defult-shuttle.png"/></div>
				        	<p>暂无接送记录</p>
				        </div>
					<?php else: ?>
				        <div class="main-food-family">
				        	<ul class="main-shuttle">
							    <?php if(is_array($vo) || $vo instanceof \think\Collection || $vo instanceof \think\Paginator): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
				        		<li>
									<span><?php echo $vo1['relation']; ?></span>
									<span><?php echo $vo1['flag']; ?></span>
									<span><?php echo $vo1['time']; ?></span>
									<span class="js-img">查看图片</span>
									<input type="hidden" class="js-image" value="<?php echo $vo1['file']; ?>">
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
				        	</ul>
						</div>
					<?php endif; ?>
			        </div>
			    </div>

			<?php endforeach; endif; else: echo "" ;endif; ?>
			
               <input type="hidden" name="phone_account" value="<?php echo $phone_account; ?>">
		       <input type="hidden" name="account" value="<?php echo $account; ?>">
			   <input type="hidden" name="type" value="<?php echo $type; ?>">    
			</div>
		</div>
		
	</div>
</div>
<script type="text/javascript">
	$(function() {
		var jsButton = $("#monitor button")
		var rankingSwiper = new Swiper('#ranking-item-container1', {
			speed: 500,
			on: {
				slideChangeTransitionStart: function() {
					$("#monitor .mark1").removeClass('mark1');
					jsButton.eq(this.activeIndex).addClass('mark1');
				},
			},
		})
		$("#monitor td").on('click', function(e) {
			e.preventDefault()
			$("#monitor .mark1").removeClass('mark1')
			$(this).find('button').addClass('mark1')
			rankingSwiper.slideTo($(this).index())
		})
		
		
	})
</script>
<script src="__STATIC__/js/date-workinfo.js"></script> 
<script type="text/javascript">
$(function(){
		var jsButton = $("#monitor button")
		var ii = $("#monitor td button i")
		var yearMouth = $('#curday').html();
		var _year = parseInt(yearMouth.substring(0, 4));
		var _mouth = parseInt(yearMouth.substring(5));
		var mouth = yearMouth.substring(5,7);
		for(j = 0; j < 7; j++){
			var _day = parseInt(ii.eq(j).html());
			if (_day < 10) {
				day = '0' + _day;
			} else {
				day = _day;
			}
			for (i = 0; i < 7; i++) {
				var iiEq = parseInt(ii.eq(6).html())
				if (_day <= iiEq) {
					if (_mouth < 10) {
						var data = _year + "-0" + _mouth + "-" + day;
					} else {
						var data = _year + "-" + _mouth + "-" + day;
					}
				} else {
					var d = _mouth - 1;
					if (d != 0) {
						if (_mouth < 10) {
							var data = _year + "-0" + d + "-" + day;
						} else {
							var data = _year + "-" + d + "-" + day;
						}
					}else{
						var data = (_year - 1) + "-" + "12" + "-" + day;
					}
				}
			}
		//	console.log(data)
		}
		
		// 首先调用JSBridge初始化代码，完成后再设置其他
        initJsBridge(function () {
		
			
			 $(document).on('click','.js-img',function(){
			 
				var index = $(this).parents('li').index();
				var length = $(this).parents('.main-shuttle').find('li').length;
			//alert(index);
			    var str = '';
				//var images = new Array();
				for(var i=0;i<length;i++){
					//images[i]=$(this).parents('.main-class').find('.js-image').eq(i).val();
				str +=$(this).parents('li').find('.js-image').eq(i).val()+",";
				}
			    str += index;
			   // console.log(images);
			    window.WebViewJavascriptBridge.callHandler('get',str, function (response) {
					   // showResponse(response);
						});

		
		    })
			
			$(".back").click(function(){
				window.WebViewJavascriptBridge.callHandler('back','1', function (response) {
				
					 //showResponse(response);
		        });
	        })	
          
        })
		
		
		
	})	
</script>
</body>
</html>