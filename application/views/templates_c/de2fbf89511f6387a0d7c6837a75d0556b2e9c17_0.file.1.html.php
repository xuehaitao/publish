<?php
/* Smarty version 3.1.30-dev/79, created on 2018-03-16 15:09:44
  from "D:\Project\websites\pilu\application\views\templates\about\1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/79',
  'unifunc' => 'content_5aab6db8850851_50644971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de2fbf89511f6387a0d7c6837a75d0556b2e9c17' => 
    array (
      0 => 'D:\\Project\\websites\\pilu\\application\\views\\templates\\about\\1.html',
      1 => 1521184181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:about/header.html' => 1,
    'file:about/footer.html' => 1,
  ),
),false)) {
function content_5aab6db8850851_50644971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:about/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--信息披露-->
<div class="wrap" style="min-height:500px;">

<style>
.wrap div
 {
	 padding:0;
	 }
.map {
margin-top:5px;
	width: 100%;
}
li {
	list-style-type: none;
}
.main {
	width: 100%;
        margin-top:35px;
}
.cql_ir_line {
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
.c1 {
	margin-right: 30px;
	margin-left: 30px;
	color: #666666;
	font-size:16px;
}
.bigc {
	font-size: 24px;
	margin-top: 40px;
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
.main p {
	font-size: 16px;
	line-height:30px;
}
.partner {
	display: flex;
}
.partner img {
	border: 1px solid #d9d9d9;
	float: left;
}
.gszz {
	display: flex;
	text-align: center;
}
.gszz li {
	width: 695px;
	margin-right: 50px;
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
	height: 122px;
	border-left: 1px solid #d9d9d9;
	width: 95%;
}
ul.tabs li {
	float: left;
	margin: 0;
	padding: 0;
	height: 120px;
	line-height: 20px;
	width: 250px;
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
	font-size: 18px;
}
.tabs li.active {
	border: 1px solid #96b1d6;
}
.tabs .active a {
	color: #96b1d6;
}
ul.tabs li:hover {
	background: #d9d9d9;
}
.active li {
	color: #83aacf;
}
html ul.tabs li.active, html ul.tabs li.active a:hover {
	background: #fff;
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
	line-height: 23px;
	font-size: 0.75em;
	margin-left: 30px;
	margin-right: 30px;
	color: #666666;
}
.imgtab1 {
	margin-left: 110px;
}
.imgtab2 {
	margin-left: 365px;
}
.imgtab3 {
	margin-left: 615px;
}
.gudong {
	color: #83aacf;
}
.ctitle {
	margin-left: 30px;
        margin-top:25px;
	color:#252525;
}
.table-a table {
	width: 1140px;
	border-collapse: collapse;
}
.tablep {
	margin-left:20px;
}
.table-a p{
	font-size:16px;}
.info{
	border: 1px solid #d9d9d9;
	height: 50px;
	text-align: left;
	line-height: 25px;
	font-size: 16px;
	width:180px;
}
.info2{
	border: 1px solid #d9d9d9;
	width:960px;
	height: 50px;
	text-align: left;
	line-height: 25px;
	font-size: 16px;
}
.tab_table {
	width: 760px;
	border-collapse: collapse;
}
.tab_table td {
	border: 1px solid #d9d9d9;
	width: 250px;
	height: 120px;
	text-align: center;
	line-height: 20px;
	font-size:16px;
}
td a {
	text-decoration: none;
	color: #666666;
	font-size:16px;
}

.active a {
	text-decoration: none;
	color: #96b1d6;
}
.tab_table tr {
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
<!-- zhezhao start -->
.zhezhao,zhezhao2
{width:100%; 
 height:100%; 
 background-color:#000; 
 filter:alpha(opacity=70); 
 -moz-opacity:0.7; 
 opacity:0.7; 
 position:fixed; 
 left:0px; 
 top:0px; 
 display:none; 

} 
.fudong
{ 
 width:200%; 
 height:100%;
 position:fixed;
 background-color:rgba(0, 0, 0, 0.7); 
 background-image:url("http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/zhizhao.jpg"); 
 background-repeat: no-repeat;
 background-position:center center;
 background-attachment: fixed;
 display:none; 
margin-top:-170px;
margin-left:-300px;
} 	
.fudong2
{ 
 width:200%; 
 height:100%;
 position:fixed; 
 background-color:rgba(0, 0, 0, 0.7); 
 background-image:url("http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/xuke.jpg"); 
 background-repeat: no-repeat;
 background-position:center center;
 background-attachment: fixed;
 display:none; 
margin-top:-170px;
margin-left:-300px;
} 
.content 
{ 
 margin-top:50px; 
 color:red; 
 line-height:200px; 
 height:200px; 
 text-align:center; 
} 
.gszz button{
	padding:0;
	margin:0;
	border:none;
	background-color:#fff;}
.buttonclose,.buttonclose2{
	 border:none;
	 position: fixed; 
	 right:1%;
         top:1%;
background-color: rgba(255, 255, 255, 0);
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
<?php echo '<script'; ?>
 type="text/javascript"> 
window.onload=function() 
{ 
 var zhezhao=document.getElementById("zhezhao"); 
 var fudong=document.getElementById("fudong"); 
 var bt=document.getElementById("bt"); 
 var btclose=document.getElementById("btclose"); 
 var zhezhao2=document.getElementById("zhezhao2"); 
 var fudong2=document.getElementById("fudong2"); 
 var bt2=document.getElementById("bt2"); 
 var btclose2=document.getElementById("btclose2"); 
  
 bt.onclick=function () 
 { 
  zhezhao.style.display="block"; 
  fudong.style.display="block"; 
 } 
 btclose.onclick=function() 
 { 
  zhezhao.style.display="none"; 
  fudong.style.display="none";  
 } 
 bt2.onclick=function () 
 { 
  zhezhao2.style.display="block"; 
  fudong2.style.display="block"; 
 } 
 btclose2.onclick=function() 
 { 
  zhezhao2.style.display="none"; 
  fudong2.style.display="none";  
 } 
} 
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	$(document).ready(function() {
		var xx = getUrlParam('reurl');
		xx<6&&xx>0&&!isNaN(xx)?xx=xx:xx=0;
		var xy;
		switch(parseInt(xx)){
			case 0:
				xy = 0;
				break;
			case 1:
				xy = 2;
				break;
			case 2:
				xy = 6;
				break;
			case 3:
				xy = 10;
				break;
			case 4:
				xy = 11;
				break;
			case 5:
				xy = 12;
				break;
			default:
				xy = 0;
		}
		//Default Action
		$("#accordion li:eq("+xy+")").toggleClass('open'); //Activate first tab
		$("#accordion .help-list-item:eq("+xy+")").show();
		if(xx!=0){$('html,body').animate({scrollTop:$("#qt"+xx).offset().top}, 800);}
	});
	function getUrlParam(name) {
		var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
		var r = window.location.search.substr(1).match(reg);  //匹配目标参数
		if (r != null) return unescape(r[2]); return null; //返回参数值
	}
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}
	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.help-list-item').not($next).slideUp().parent().removeClass('open');
		};
	}
	var accordion = new Accordion($('#accordion'), false);
<?php echo '</script'; ?>
>

<div class="zhezhao" id="zhezhao"><div class="bgimg"></div></div> 
  <div class="zhezhao2" id="zhezhao2"></div> 
  <div class="fudong" id="fudong"><button class="buttonclose" id="btclose"><img src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/btclose.png"></button></div> 
  <div class="fudong2" id="fudong2"><button class="buttonclose2" id="btclose2"><img src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/btclose.png"></button></div> 
<div class="main">
  <div id="qt0" class="ctitle">
    <p><span class="bigc">公司介绍 </span><span class="bige">C</span><span class="smalle">OMPANY INTRODUCTION</span></p>
  </div>
  <div class="cql_ir_line"> </div>
  <div class="c1"> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/1.png"> </div>
  <div class="c1">
<br>
    <p>“彩麒麟”，上线于2015年4月，系京赢科技集团旗下线上网络借贷信息中介服务平台，由北京市朝阳区国有资本经营管理中心发起并成立，北京彩麒麟互联网服务有限公司运营。<br>彩麒麟平台致力于为用户提供专业的线上信贷及投资撮合服务，专注于运用互联网技术手段和专业风控实力打通金融服务中存在的痛点，在提高金融服务质量和效率的同时，降低服务成本，为个人、企业提供简单、高效的金融解决方案，践行普惠金融。<br>核心理念：安全稳健、放心投资<br>平台风格：稳健、开放、公平<br>运营原则：规范、专业、透明、真实<br>企业愿景：致力于打造以财富管理、投资管理、互联网金融三位一体的投融资链条和综合性金融服务体系，成为金融市场的引领者。</p>
  </div>
  <div  id="qt1" class="ctitle">
    <p><span class="bigc">公司证照 </span><span class="bige">C</span><span class="smalle">OMPANY LICENSES</span></p>
  </div>
  <div class="cql_ir_line"> </div>
  <div class="c1">
    <ul class="gszz">
      <li><button id="bt"><img width="230" height="320" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/2.png"></button><br>
        <p>营业执照，组织机构代码证，税务登记证，社会<br>
          保险登记证，统计登记证（五证合一）</p>
      </li>
      <li><button id="bt2"><img width="440" height="320" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/3.png"></button><br>
        <p>开户许可证</p>
      </li>
    </ul>
  </div>
  <div  id="qt2" class="ctitle">
    <p><span class="bigc">企业信息 </span><span class="bige">E</span><span class="smalle">NTERPRISE INFORMATION</span></p>
  </div>
  <div class="cql_ir_line"> </div>
  <div class="c1">
    <div class="table-a" >
      <table>
        <tr>
          <td class="info"><p class="tablep">公司全称</p></td>
          <td class="info2" ><p class="tablep">北京彩麒麟互联网服务有限公司</p></td>
        </tr>
		<tr>
          <td class="info"><p class="tablep">公司简称</p></td>
          <td class="info2" ><p class="tablep">彩麒麟</p></td>
        </tr>
		<tr>
          <td class="info"><p class="tablep">统一社会信用代码证</p></td>
          <td class="info2" ><p class="tablep">91110105MA008PNU0U</p></td>
        </tr>
        <tr>
          <td class="info"><p class="tablep">注册资本</p></td>
          <td class="info2"><p class="tablep">5,000万元</p></td>
        </tr>
		<tr>
          <td class="info"><p class="tablep">实缴注册资本</p></td>
          <td class="info2"><p class="tablep">5,000万元</p></td>
        </tr>
        <tr>
          <td class="info"><p class="tablep">注册地址</p></td>
          <td class="info2"><p class="tablep">北京市朝阳区望京西路48号院7号楼26层2603</p></td>
        </tr>
		<tr>
          <td class="info"><p class="tablep">经营地址</p></td>
          <td class="info2"><p class="tablep">北京市朝阳区望京西路48号院7号楼26层2603</p></td>
        </tr>
        <tr>
          <td class="info"><p class="tablep">成立时间</p></td>
          <td class="info2"><p class="tablep">2016年10月11日</p></td>
        </tr>
        <tr>
          <td class="info"><p class="tablep">经营期限</p></td>
          <td class="info2"><p class="tablep">2046年10月10日</p></td>
        </tr>
        <tr>
          <td class="info"><p class="tablep">经营状态</p></td>
          <td class="info2"><p class="tablep">开业</p></td>
        </tr>
        <tr>
          <td class="info"><p class="tablep">法定代表人</p></td>
          <td class="info2"><p class="tablep">陈立</p></td>
        </tr>
		
        <tr>
          <td class="info2" colspan="2"><p class="tablep">董事：陈立&nbsp;&nbsp;&nbsp;&nbsp;监事：张亮&nbsp;&nbsp;&nbsp;&nbsp;财务负责人：蔡艳雯&nbsp;&nbsp;&nbsp;&nbsp;风控负责人：李彬蔚&nbsp;&nbsp;&nbsp;&nbsp;技术负责人：薛海涛</p></td>
        </tr>
        <tr height="165">
          <td class="info"><p class="tablep">经营范围</p></td>
          <td class="info2"><p class="tablep">互联网信息服务；技术推广服务；数据处理（数据处理中的银行卡中心、PUE值在1.5以上的云计算数据处理中心除外）；计算机系统服务；销售计算机、软件及辅助设备；软件开发；基础软件服务；应用软件服务（不含医用软件）；经济贸易咨询；企业管理咨询。（企业依法自主选择经营项目，开展经营活动；互联网信息服务以及依法须经批准的项目，经相关部门批准后依批准的内容开展经营活动；不得从事本市产业政策禁止和限制类项目的经营活动。）</p></td>
        </tr>
      </table>
    </div>
  </div>
  <div  id="qt3" class="ctitle">
    <p><span class="bigc">股权结构 </span><span class="bige">E</span><span class="smalle">QUITY STRUCTURE</span></p>
  </div>
  <div class="cql_ir_line"> </div>
  <div class="c1"> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/4.png"> </div>
  <div  id="qt4" class="ctitle">
    <p><span class="bigc">股东信息 </span><span class="bige">S</span><span class="smalle">HAREHOLDERS' INFORMATION</span></p>
  </div>
  <div class="cql_ir_line"> </div>
  <div class="c1">
    <table class="tab_table">
      <tr>
        <td class="active">
          <a href="#tab1">
        北京市朝阳区国有资本<br>
        经营管理中心</a></td>
        <td class="gd">
          <a href="#tab2">
        中环国投环保集团<br>
        有限公司</a></td>
        <td class="gd">
          <a href="#tab3">
        北京冠天下商贸<br>
        有限责任公司</a></td>
      </tr>
    </table>
  </div>
  <div class="tab_container">
    <div id="tab1" class="tab_content" > <img class="imgtab1" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/5.png">
      <p><span class="gudong">北京市朝阳区国有资本经营管理中心:</span>成立于2009年，注册资本金100亿元，是朝阳区国资委直属的全民所有制企业，定位为区属国有资本投融资平台。<br>国资中心致力于打造服务区域发展和社会公共项目建设的融资平台、推动关键产业发展的产业投资平台、支持新项目新企业的创业投资平台和加快国有经济优化调整的国有资产管理平台，通过专业化和市场化的运作，充分发挥国有资本的作用和影响力，不断提升企业规模和效益，促进区域经济发展。</p>
    </div>
    <div id="tab2" class="tab_content" style="display: none; "> <img class="imgtab2" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/5.png">
      <p><span class="gudong">中环国投环保集团有限公司:</span>中环国投控股有限公司的子公司，注册资本金5100万元，专注于环保行业信息化的咨询、设计、开发和实施服务的高科技软件企业。<br>公司总部位于北京中环国投大厦，在北京上地科技园和烟台两地建有研发基地，在广州、济南、南宁和南昌等地建有本地化实施服务团队。公司的宗旨是以科技为本，铸诚信之根，促环境发展，创绿色家园。</p>
    </div>
    <div id="tab3" class="tab_content" style="display: none; "> <img class="imgtab3" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/5.png">
      <p><span class="gudong">北京冠天下商贸有限责任公司:</span>成立于1981年，注册资本金4000万元，职工人数1000人以上。<br>公司尊崇“踏实、拼搏、责任”的企业精神，并以诚信、共赢、开创经营理念，创造良好的企业环境，以全新的管理模式，完善的技术，周到的服务，卓越的品质为生存根本，始终坚持用户至上、用心服务于客户，坚持用自己的服务去打动客户。</p>
    </div>
  </div>
<div  id="qt4" class="ctitle">
    <p><span class="bigc">组织架构及从业人员概况</span><span class="bige">S</span><span class="smalle">HAREHOLDERS' INFORMATION</span></p>
  </div>
	<div class="cql_ir_line"> </div>
	<div class="c1">组织架构</div><div class="c1">从业人员概况</div>
  <div  id="qt4" class="ctitle">
    <p><span class="bigc">官方网站及手机应用</span><span class="bige">S</span><span class="smalle">HAREHOLDERS' INFORMATION</span></p>
  </div>
  <div class="cql_ir_line"> </div>
	<div class="c1">官方网站：www.caiqilin.com</div><div class="c1">手机应用：彩麒麟</div>
  <div  id="qt4" class="ctitle">
    <p><span class="bigc">审核信息</span><span class="bige">S</span><span class="smalle">HAREHOLDERS' INFORMATION</span></p>
  </div>
  <div class="cql_ir_line"> </div>
	<div class="c1">财务审计报告-<br>重点环节审计结果-<br>合规性审查报告-</div>
  <div  id="qt4" class="ctitle">
    <p><span class="bigc">交易信息</span><span class="bige">S</span><span class="smalle">HAREHOLDERS' INFORMATION</span></p>
  </div>
  <div class="cql_ir_line"> </div>
	<div class="c1">累计借贷金额及笔数：1,404,056,496.17 元 2914笔<br>借贷余额及笔数：530,415,881.87万元 958笔<br>累计出借人数量、累计借款人数量：85人<br>当期出借人数量、当期借款人数量：出借人数量：2224人借款人数量：6 （2月份的数据）<br>前十大借款人待还金额占比：85.03% (451000000/ 530415881.9)<br>最大单一借款人待还金额占比：23.57% (125000000/ 530415881.9)<br>关联关系借款余额及笔数：0<br>逾期金额及笔数：0<br>逾期90天（不含）以上金额及笔数：0<br>累计代偿金额及笔数：0</div>
<div  id="qt4" class="ctitle">
    <p><span class="bigc">收费说明</span><span class="bige">S</span><span class="smalle">HAREHOLDERS' INFORMATION</span></p>
  </div>
  <div class="cql_ir_line"> </div>
	<div class="c1">借款人：平台服务费<br>投资人：每月4次免费提现，从第5次提现开始每笔2元的手续费</div>
<div  id="qt4" class="ctitle">
    <p><span class="bigc">备案信息</span><span class="bige">S</span><span class="smalle">HAREHOLDERS' INFORMATION</span></p>
  </div>
  <div class="cql_ir_line"> </div>
	<div class="c1">网贷机构备案信息: -<br>金融监管部门：-<br>备案公示时间：-<br>备案登记编号：-</div>
<div  id="qt4" class="ctitle">
    <p><span class="bigc">电信业务经营许可</span><span class="bige">S</span><span class="smalle">HAREHOLDERS' INFORMATION</span></p>
  </div>
  <div class="cql_ir_line"> </div>
	<div class="c1">电信业务经营许可证办理信息：-</div>
<div  id="qt4" class="ctitle">
    <p><span class="bigc">资金存管信息</span><span class="bige">S</span><span class="smalle">HAREHOLDERS' INFORMATION</span></p>
  </div>
  <div class="cql_ir_line"> </div>
	<div class="c1">存管银行名称：海口联合农商银行<br>三方存管协议：海口联合农商行存管协议-扫描件:<br>http://bzp2p-caiqilin.b0.upaiyun.com/file/cunguanxieyi.zip<br>海口联合农商行存管协议-补充协议-扫描件<br>http://bzp2p-caiqilin.b0.upaiyun.com/file/cunguanbuchongxieyi.zip<br>资金存管上线时间：2017-11-23<br>公安机关核发的网站备案图标及编号：-</div>
<div  id="qt4" class="ctitle">
    <p><span class="bigc">网站备案信息</span><span class="bige">S</span><span class="smalle">HAREHOLDERS' INFORMATION</span></p>
  </div>
  <div class="cql_ir_line"> </div>
	<div class="c1">单位名称：北京彩麒麟互联网服务有限公司<br>备案许可证号：京ICP备17038878号-1<br>网站名称（域名）：彩麒麟—www.caiqilin.com<br>信息安全评测认证信息：-</div>
  <div  id="qt5" class="ctitle">
    <p><span class="bigc">合作伙伴 </span><span class="bige">P</span><span class="smalle">ARTNERS</span></p>
  </div>
  <div class="cql_ir_line"> </div>
  <div class="c1">
    <ul class="partner">
      <li><a href="http://www.cfca.com.cn/" target="_blank"><img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/cfca.png"></a></li>
      <li><a href="https://www.anxinsign.com/Web/login/login.jsp" target="_blank"><img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/安心签.png"></a></li>
      <li><a href="http://www.ucfpay.com/" target="_blank"><img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/先锋支付.png"></a></li>
      <li><a href="http://www.unitedbank.cn/" target="_blank"><img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/海口银行.png"></a></li>
      <li><a href="http://www.kangdalawyers.com/" target="_blank"><img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/康达律师.png"></a></li>
      <li><a href="http://www.wdzj.com/" target="_blank"><img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/网贷之家.png"></a></li>
      <li><a href="http://www.p2peye.com/" target="_blank"><img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/information-disclosure/网贷天眼.png"></a></li>
    </ul>
<br><br>
  </div>
</div></div>
<!--信息披露-->
<?php $_smarty_tpl->_subTemplateRender("file:about/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
