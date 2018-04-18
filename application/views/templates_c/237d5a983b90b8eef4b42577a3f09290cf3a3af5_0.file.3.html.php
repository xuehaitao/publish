<?php
/* Smarty version 3.1.30-dev/79, created on 2018-03-16 13:41:34
  from "D:\Project\websites\pilu\application\views\templates\about\3.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/79',
  'unifunc' => 'content_5aab590e6fe873_55870244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '237d5a983b90b8eef4b42577a3f09290cf3a3af5' => 
    array (
      0 => 'D:\\Project\\websites\\pilu\\application\\views\\templates\\about\\3.html',
      1 => 1521178756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:about/header.html' => 1,
    'file:about/footer.html' => 1,
  ),
),false)) {
function content_5aab590e6fe873_55870244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:about/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--运营报告-->
<div class="wrap" style="min-height:500px;">

<style>
.wrap div
 {
	 padding:0;
	 }
.map {
	width:100%;
	margin-top:20px;
        margin-bottom:60px;
}
li {
	list-style-type: none;
}
.main {
	width: 100%;
	margin-top:30px;
}
.cql_rp_line {
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
	margin-top: 30px;
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
.ctitle{
	color:#252525;
}
.main p {
	margin-left: 30px;
}
<!--
Tab swich begain
-->
.container {
 width: 95%;
 text-align: center;
}
ul.tabs {
	margin: 0;
	padding: 0;
	float: center;
	list-style: none;
	height: 82px;
	border-left: 1px solid #d9d9d9;
	width: 95%;
	margin-left: 30px;
}
ul.tabs li {
	float: left;
	margin: 0;
	padding: 0;
	height: 80px;
	line-height: 18px;
	width: 190px;
	border: 1px solid #d9d9d9;
	border-left: none;
	margin-bottom: -1px;
	overflow: hidden;
	position: relative;
	text-align: center;
}
ul.tabs li a {
	text-decoration: none;
	color: #666666;
	font-size: 14px;
}
.smallpx{
	font-size:22px;
	}

html ul.tabs li.active, html ul.tabs li.active {
	background: #fff;
}
.tabs li.active {
	border: 1px solid #96b1d6;
}
.tabs .active a {
	color: #96b1d6;
}
.tab_container {
	clear: both;
	float: center;
	width: 100%;
	background: #fff;
	-moz-border-radius-bottomright: 5px;
	-khtml-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	-moz-border-radius-bottomleft: 5px;
	-khtml-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
	}
.tab_content {
	font-size: 0.8em;
	margin-left: 30px;
	margin-right:30px;
}
.imgtab1 {
	margin-left: 63px;
}
.imgtab2 {
	margin-left: 220px;
}
.imgtab3 {
	margin-left: 370px;
}
.imgtab4 {
	margin-left: 530px;
}
.imgtab5 {
	margin-left: 680px;
}
.imgtab6 {
	margin-left: 830px;
}
.imgtab7 {
	margin-left: 990px;
}
.tab_table {
 margin-left:30px;
}
table {
	width: 1080px;
	border-collapse: collapse;
}
td {
	border: 1px solid #d9d9d9;
	width: 145px;
	height: 80px;
	text-align: center;
	line-height: 18px;
	font-size:14px;
}
td a {
	text-decoration: none;
	color: #666666;
}

.active a {
	text-decoration: none;
	color: #96b1d6;
}
tr {
	border: 1px solid #000;
}
td.active {
	border: 1px solid #96b1d6;
}
td.cql_right {
	border-right: 1px solid #96b1d6;
}
td.bottom {
	border-bottom: 1px solid #96b1d6;
}
</style>
<?php echo '<script'; ?>
 type="text/javascript">

$(document).ready(function() {

	//Default Action
	$(".tab_content").hide(); //Hide all content
	//$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$("table.tab_table td:first").addClass("active").show();
	$(".tab_content:first").show(); //Show first tab content
	
	//On Click Event
	$("table.tab_table td").click(function() {
		$("table.tab_table td").removeClass("active"); //Remove any "active" class
		$("table.tab_table td").removeClass("cql_right");
		$("table.tab_table td").removeClass("bottom");
		$(this).addClass("active"); //Add "active" class to selected tab
		//alert($("table.tab_table td").index(this));
		var index = $("table.tab_table td").index(this);
		if(index>0&&index<6){
			var cql_right=$("table.tab_table td").eq((index-1));
			$(cql_right).addClass("cql_right");
		}else if(!(index%6)&&index!=0){
			var bottom=$("table.tab_table td").eq((index-6));
			$(bottom).addClass("bottom");
		}else if(index!=0){
			var bottom=$("table.tab_table td").eq((index-6));
			$(bottom).addClass("bottom");
			var cql_right=$("table.tab_table td").eq((index-1));
			$(cql_right).addClass("cql_right");
		}
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});

});
<?php echo '</script'; ?>
>

<div class="main">
  <div class="ctitle">
    <p><span class="bigc">运营报告 </span><span class="bige">O</span><span class="smalle">PERATION REPORT</span></p>
  </div>
  <div class="cql_rp_line"> </div>
  <div class="c1">
    <div class="container">
      <table class="tab_table">
      <tr>
        <td class="active">
         <a href="#tab1">2017年年度<br>
          运营报告</a></td>
          <td>
          <a href="#tab2">2017年第三季度<br>
          运营报告</a></td>
          <td>
          <a href="#tab3">2017年半年度<br>
          运营报告</a></td>
          <td>
          <a href="#tab4">2017年第一季度<br>
          运营报告</a></td>
        <td>
          <a href="#tab5">2016年年度<br>
          运营报告</a></td>
        <td>
          <a href="#tab6">2016年第三季度<br>
          运营报告</a></td>
        <td>
          <a href="#tab7">2016年第二季度<br>
          运营报告</a></td>   
      </tr>
    </table>
    </div>
    <div class="tab_container">
      <div id="tab1" class="tab_content" style="display: block; "> <img class="imgtab1" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/etc/5.png"><br>
        <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/report/2017.png"> </div>
      <div id="tab2" class="tab_content" style="display: block; "> <img class="imgtab2" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/etc/5.png"><br>
        <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/report/17%E4%B8%89%E5%AD%A3%E5%BA%A6%E8%BF%90%E8%90%A5%E6%8A%A5%E5%91%8A.jpg"> </div>
       <div id="tab3" class="tab_content" style="display: block; "> <img class="imgtab3" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/etc/5.png"><br>
        <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/report/17%E5%8D%8A%E5%B9%B4%E5%BA%A6%E8%BF%90%E8%90%A5%E6%8A%A5%E5%91%8A.jpg"> </div>
      <div id="tab4" class="tab_content" style="display: block; "> <img class="imgtab4" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/etc/5.png"><br>
        <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/report/17%E4%B8%80%E5%AD%A3%E5%BA%A6%E8%BF%90%E8%90%A5%E6%8A%A5%E5%91%8A.jpg"> </div>
      <div id="tab5" class="tab_content" style="display: none; "> <img class="imgtab5" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/etc/5.png"> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/report/16%E5%B9%B4%E5%B9%B4%E5%BA%A6.jpg"> </div>
      <div id="tab6" class="tab_content" style="display: none; "> <img class="imgtab6" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/etc/5.png"> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/report/16%E5%B9%B4%E4%B8%89%E5%AD%A3%E5%BA%A6.jpg"> </div>
      <div id="tab7" class="tab_content" style="display: none; "> <img class="imgtab7" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/etc/5.png"> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/report/16%E5%B9%B4%E4%B8%8A%E5%8D%8A%E5%B9%B4.jpg"> </div>
    </div>
  </div>
</div></div>
<!--运营报告-->
<?php $_smarty_tpl->_subTemplateRender("file:about/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
