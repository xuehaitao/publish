<?php
/* Smarty version 3.1.30-dev/79, created on 2018-03-27 18:36:06
  from "/home/www/test/application/views/templates/about/6.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/79',
  'unifunc' => 'content_5aba1e96a69366_78470973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '277ae48658240c4e63836041af6413acb64b82d0' => 
    array (
      0 => '/home/www/test/application/views/templates/about/6.html',
      1 => 1522058083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:about/header.html' => 1,
    'file:about/footer.html' => 1,
  ),
),false)) {
function content_5aba1e96a69366_78470973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:about/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--联系我们-->
	
	<style>
	.wrap div
	 {
		 padding:0;
		 }

	.map {
		width: 100%;
	}
	.main {
		width: 100%;
	margin-top:30px;
	font-size:16px;
	}
	.main p{
		line-height:30px;
	}

	.cql_cu_line {
		margin-left: 30px;
		margin-right: 30px;
			margin-top:25px;
			margin-bottom:25px;
		padding: 0;
		width: 1140px;
		height: 1px;
		font-size: 0;
		background: #d9d9d9;
	}

	.bigc {
		font-size: 24px;
		margin-top: 35px;
		margin-bottom: 25px;
		color:#252525;
	}
	.bige {
		font-size: 14px;
		margin-left: 10px;
		margin-right: 1px;
		color:#252525;
	}
	.smalle {
		font-size: 10px;
		letter-spacing: 1px;
		color:#252525;
	}
	.ctitle {
		margin-left: 30px;
		color:#252525;
	}
	.c1 {
		margin-right: 30px;
		margin-left: 30px;
		margin-bottom: 26px;
		color: #666666;
	}
	</style>
	
	<div class="main">
		<div class="ctitle">
			<p><span class="bigc">联系我们 </span><span class="bige">C</span><span class="smalle">ONTACT US</span></p>
		</div>
		<div class="cql_cu_line"></div>
		<div class="c1">
			<p>地址：北京市朝阳区望京西路48号金隅国际A座26层<br>邮编：100102<br>官方网址：www.caiqilin.com<br>官方订阅号：caiqilin-com<br>官方微博：@彩麒麟官方微博</p>
		</div>
		<div id="container" class="c1" style="width:1140px;height:336px;">
			<?php echo '<script'; ?>
 type="text/javascript" src="http://webapi.amap.com/maps?v=1.4.4&key=218d0683d2f243233415e0a359434122"><?php echo '</script'; ?>
>
			
			<?php echo '<script'; ?>
 type="text/javascript">
				var map = new AMap.Map('container', {
					resizeEnable: true,
					zoom: 18,
					center: [116.457516,39.985788]
				});

				//aMap.moveCamera(CameraUpdateFactory.changeLatLng(marker1)); 
				//map.centerCoordinate=[121.5177570000, 31.3000950000];
				map.setMapStyle('amap://styles/4deee80a44fc1d6e3b503797a28f2eb5');
				var info = [];
				info.push("<div style='font-size: 16px;' style='magin:0 auto;'><img class='imgEx' src='http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_coinfo/logo_caiqilin_cs.png'/> ");
				info.push("<div style=\"padding:0px 0px 0px 4px;\"><b style='font-size: 16px;'>金隅国际A座</b>");
				info.push("电话 :4008-95-2015");
				info.push("地址 :北京市朝阳区望京西路48号金隅国际A座26层2603室</div></div>");
				infoWindow = new AMap.InfoWindow({
					content: info.join("<br/>"), //使用默认信息窗体框样式，显示信息内容
					//offset: new AMap.Pixel(16, -45)
				});
				infoWindow.open(map, map.getCenter());
				setTimeout(function(){
					map.setCenter([116.457516,39.985788])
				})
			<?php echo '</script'; ?>
>
			
		</div>
		<div class="ctitle">
			<p><span class="bigc">客户服务 </span><span class="bige">C</span><span class="smalle">USTOMER SERVICE</span></p>
		</div>
		<div class="cql_cu_line"></div>
		<div class="c1">
			<p>客服电话：4008-95-2015（工作时间： 9:00-17:00）<br>投诉电话：4008-95-2015转2<br>客服咨询、投诉及举报邮箱：service@caiqilin.com<br>如果您在使用过程中有任何疑问请您通过客服电话或网站在线客服与我们联系。</p>
		</div>
		<div class="ctitle">
			<p><span class="bigc">商务合作 </span><span class="bige">B</span><span class="smalle">USINESS COOPERATION</span></p>
		</div>
		<div class="cql_cu_line"></div>
		<div class="c1">
			<p>媒体采访：<br>如果有媒体采访需求，请将您的媒体名称、采访提纲、联系方式发至：marketing@caiqilin.com，我们会尽快与您联系。<br>商务合作：<br>如果贵公司希望与我们建立商务合作关系，请将合作意向进行简要描述并发送邮件至：marketing@caiqilin.com，我们会尽快与您联系。 
			</p>
			<br>
			<p>微信公众平台：caiqilin-com（扫描下方二维码关注小麒麟订阅号）</p>
			<img src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/etc/dyh.jpg">
		</div>
	</div>
<!--联系我们-->
<?php $_smarty_tpl->_subTemplateRender("file:about/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
