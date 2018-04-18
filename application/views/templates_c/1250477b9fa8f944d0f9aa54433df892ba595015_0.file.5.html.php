<?php
/* Smarty version 3.1.30-dev/79, created on 2018-03-16 13:41:36
  from "D:\Project\websites\pilu\application\views\templates\about\5.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/79',
  'unifunc' => 'content_5aab5910768191_14281864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1250477b9fa8f944d0f9aa54433df892ba595015' => 
    array (
      0 => 'D:\\Project\\websites\\pilu\\application\\views\\templates\\about\\5.html',
      1 => 1521178771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:about/header.html' => 1,
    'file:about/footer.html' => 1,
  ),
),false)) {
function content_5aab5910768191_14281864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:about/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--活动信息-->
<div class="wrap" style="min-height:500px;">

<style>
.wrap div {
padding:0;
}
.main {
	width: 100%;
	margin-top:30px;
}
.cql_at_line {
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
	margin-bottom: 26px;
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
.ctitle {
	margin-left: 30px;
	color:#252525;
}
.map {
	margin-top: 40px;
	margin-bottom: 30px;
	width: 100%;
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
	height: 243px;
	border-left: 1px solid #d9d9d9;
	width: 95%;
	margin-left: 30px;
}
ul.tabs li {
	float: left;
	margin: 0;
	padding: 0;
	height: 80px;
	line-height: 5px;
	width: 184px;
	border: 1px solid #d9d9d9;
	border-left: none;
	margin-bottom: -1px;
	overflow: hidden;
	position: relative;
	text-align: center;
	color: #666666;
}
ul.tabs li a {
	text-decoration: none;
	color: #666666;
	font-size: 14px;
}
.tabs p {
	color: #666666;
	font-size: 14px;
}
ul.tabs li:hover {
	border: 1px solid #96b1d6;
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
	line-height: 30px;
	font-size: 16px;
	color: #666666;
margin-bottom:30px;
}
<!--
table style start
-->
.c1 .tab_table {
 margin-left:30px;
 margin-right:30px;
}
.c1 table {
	width: 100%;
	border-collapse: collapse;
}
.c1 td {
	border: 1px solid #d9d9d9;
	width: 185px;
	height: 80px;
	text-align: center;
	line-height: 18px;
	font-size:14px;
}
.c1 td a {
	text-decoration: none;
	color: #666666;
}

.c1 .active a {
	text-decoration: none;
	color: #96b1d6;
}
.c1 tr {
	border: 1px solid #000;
}
.c1 td.active {
	border: 1px solid #96b1d6;
}
.c1 td.cql_right {
	border-right: 1px solid #96b1d6;
}
.c1 td.bottom {
	border-bottom: 1px solid #96b1d6;
}
table.ac_table {
margin:0 auto;
width:65%;
}
.ac_table  td{
	text-align:center;
        vertical-align:middle;
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
  <p><span class="bigc">活动信息 </span><span class="bige">A</span><span class="smalle">CTIVITY INFORMATION</span></p>
</div>
<div class="cql_at_line"> </div>
<div class="container">
  <div class="c1">
    <table class="tab_table">
      <tr>
	    <td class="active"><a href="#tab1">翻牌得好礼，新春旺起来！<br>
          (已结束)</a></td>
           <td> <a href="#tab2">新春邀好友 8000壕礼等您拿<br>
          (已结束)</a></td>
          <td><a href="#tab3">新春加息1%，史无前例!<br>
          (已结束) </a></td>
          <td><a href="#tab4">岁末收官 喜迎一八<br>
          (已结束)</a></td>
        <td><a href="#tab5">12.12 全新体验 畅享加息<br>
          (已结束)</a></td>
        <td><a href="#tab6">11.11加息活动<br>(已结束)</a></td>
      </tr>
      <tr>
         <td><a href="#tab7">国庆刮刮乐  好礼天天有<br>(已结束)</a></td>
        <td><a href="#tab8">六日抢加息 周末赚更high<br>(已结束)</a></td>
        <td><a href="#tab9">新人特权 首投送红包啦<br>(已结束)</a></td>
        <td><a href="#tab10">金九银十 好礼集结<br>(已结束)</a></td>
        <td><a href="#tab11">一见钟情 双重奖励<br>(已结束)</a></td>
	    <td><a href="#tab12">七夕约惠 有爱又有赚<br>(已结束)</a></td>
              
      </tr>
      <tr>
              <td><a href="#tab13">彩麒麟两周年庆<br>
          (已结束)</a></td>
        <td><a href="#tab14">翻牌闹新春 手气大比拼<br>(已结束)</a></td> 
        <td><a href="#tab15">开启您的彩麒麟时光机<br>(已结束)</a></td>
        <td><a href="#tab16">邀请有奖活动<br>(已结束)</a></td>
        <td><a href="#tab17">剁手无止境 加息来回血<br>(已结束)</a></td>
	    <td><a href="#tab18">邀请福利大升级<br>(已结束)</a></td>
        
      </tr>
      <tr>
        <td><a href="#tab19">11.11狂欢<br>(已结束)</a></td>
        <td><a href="#tab20">金九银十 快来收货<br>(已结束)</a></td>  
        <td><a href="#tab21">带上好友来赚钱<br>(已结束)</a></td>  
        <td><a href="#tab22">奥运大猜想<br>(已结束)</a></td>
        <td><a href="#tab23">礼约奥运 乐享盛会<br>(已结束)</a></td>
        <td><a href="#tab24">红包活动<br>(进行中)</a></td>
      </tr>
    </table>
  </div>
  <div class="c1">
    <div class="tab_container">
    <div id="tab1" class="tab_content" style="display: none; "> <a href="http://mp.weixin.qq.com/s/QMxN61tgXFFWU6tsrSoTqg"><img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/2018fanpai.png"></a>
        <p class="pcenter"><b>
        翻牌得好礼，新春旺起来！</b><p>一、活动时间</p><br>2018年2月15日（除夕）-2017年3月2日（正月十五）<br><p>二、参与方式</p>1.     微信扫描下方二维码，进入翻牌抽奖活动，点击翻牌，还有机会抽中iPhone X！<br><p style="text-align: center;"><img src="http://bzp2p-caiqilin.b0.upaiyun.com/2/fp20182.png"></p><br>2.     微信搜索官方订阅号：“小麒麟订阅号”或扫描下方二维码关注小麒麟订阅号，进入订阅号后，点击下方菜单栏的‘麒麟活动’，再点击‘新春翻牌’，即可参与活动。<br><p style="text-align: center;"><img src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/etc/dyh.jpg"></p><br>3.     进入彩麒麟app，点击新春翻牌活动展示页，进入刮奖活动；<p>三、活动规则</p>1.     同一账户每天仅可参加一次抽奖（同一微信账户或同一手机号或其他可以合理显示为同一账户的情形，均视为同一账户）；<br>2.     参与者填写提交的手机号即为发放活动奖励的账户；<br>3.     红包仅限投资使用，获奖后系统实时发放到获奖账户中；<br>4.     红包有效期截止至获奖日第二天的24:00，获奖用户可登录账户查收使用；<br>5.     彩麒麟礼品卡和实物奖品在活动结束后15个工作日内联系获奖者进行配送；<br>6.     彩麒麟礼品卡在“彩麒麟礼品商城”中使用，微信搜索公众号关注后注册账户使用；<br>7.     本活动最终解释权归北京彩麒麟互联网服务有限公司所有，如有疑问可拨打客服4008-95-2015咨询。</p></div>
    <div id="tab2" class="tab_content" style="display: none; "> <a href="http://mp.weixin.qq.com/s/H-7eNS1QXpvCqvkHKQufqA"><img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/yaoqing2018.png"></a>
        <p class="pcenter"><b>
        新春邀好友 8000壕礼等您拿</b><br>活动时间：2018年2月8日-2018年3月2日<br><img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/yq20181.png"><br><img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/yq20182.png"><p>活动说明</p><br>a.	新用户指从未在彩麒麟平台进行过投资的用户；<br>b.	彩麒麟礼品卡以电子卡形式发放，微信搜索“彩麒麟礼品商城”关注后注册账户使用，如有疑问可拨打010-64777080咨询；
        <br>c.	活动前已经被邀请注册但未投资的用户，在活动期间完成首次投资，邀请人也可获得奖励；<br>d.	活动结束后15个工作日内平台与获得奖励用户联系发放礼品卡事宜；<br>e.	如发现采用虚假非法信息或冒用他人信息进行注册的情况，将被冻结账户并取消此次活动的奖励；<br>f.	本活动最终解释权归北京彩麒麟互联网服务有限公司所有，如有疑问可拨打客服4008-95-2015咨询。 </p></div>
        <div id="tab3" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/jiaxi2018.png">
        <p class="pcenter"><b>新春加息1%，史无前例!</b><br>尊敬的用户：<br>您好！<p>金鸡报晓辞旧岁，玉犬呈祥迎新春，值此新春佳节来临之际，彩麒麟回馈广大用户，上线新春加息活动，感谢广大用户的支持与信任。</p><p>也祝各位用户在新的一年里，盆满钵满，事事顺意。</p>活动时间：2018年2月8日-2018年3月2日<br>活动规则：<br>活动期间，每天上线200万活动加息标，加息1%，史上最高加息。加息标上线时间：10:00，15:00，敬请关注。<br>起息时间：2月14日-2月21日上线的项目，统一于2月22日起息。2月8日-2月13日、2月22日-3月2日上线的项目，于每周一、周三、周五放款起息。<br>本活动最终解释权归北京彩麒麟互联网服务有限公司所有，如有任何疑问请拨打客服4008-95-2015咨询。</p>
      </div>
    <div id="tab4" class="tab_content" style="display: none; "> <a href="http://mp.weixin.qq.com/s/7YTww9KRG_kvIOz5lWuHKw"><img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/upload/scrollBanner/201712/2018.png"></a>
        <p class="pcenter"><b>
        2017年末回馈，感恩红包放送</b><br>尊敬的彩麒麟用户：<p>年终岁尾，转眼2017年就要画上句号。感谢您一直以来对彩麒麟的支持与信任，让我们的产品与服务更上一层楼！</p><p>在即将圆满的2017年，彩麒麟感恩大回馈，为您奉上18元年终红包，请及时打开APP，点击“我的-红包”查收福利。</p><p>期待2018年与您继续一路同行，彩麒麟会不断努力，为您提供更优质的产品、更贴心的服务。</p><b>活动说明：</b>
        <br>活动红包仅发放给2017年12月29日17:00前注册的用户；<br>红包有效期截止至2017年12月31日24:00；<br>本活动最终解释权归北京彩麒麟互联网服务有限公司所有。 </p></div>
    <div id="tab5" class="tab_content" style="display: none; ">  <a href="http://mp.weixin.qq.com/s/F_5QxXQPP03iowCXdy0UUw"><img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com//cql_custom_pic/ACTIVITIES/20171212.png"></a>
        <p class="pcenter"><b>12.12 全新体验 畅享加息</b><br><b>一、活动时间</b>
        <br>2017年12月12日9:00—2017年12月14日18:00<br><b>二、	活动内容</b><br>活动期间，所有加“12.12加息”标签的项目加息0.2%。<br>本活动最终解释权归北京彩麒麟互联网服务有限公司所有。 </p></div>
	<div id="tab6" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/171111.png">
        <p class="pcenter"><b>11.11加息活动说明：</b><br><b>一、活动时间</b>
        <br>活动时间：2017年11月10日9:00—2017年11月12日20:00<br><b>二、	活动内容</b><br>活动期间，所有加“11.11加息”活动标签的标的年化收益率增加0.2%。<br><b>三、	活动说明：</b><br>1.	活动期间， 16:00之前上线的活动标的，于当天放款起息；16:00之后上线的活动标的，于次日放款起息。<br>2.	本活动最终解释权归北京彩麒麟互联网服务有限公司所有。 </p></div>
      <div id="tab7" class="tab_content" > <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/17-%E5%8D%81%E4%B8%80%E5%88%AE%E5%8D%A1.png">
        <p><b>国庆刮刮乐  好礼天天有</b> <br><b>一、活动内容：</b><br>2017年10月1日-10月8日，每天可进入彩麒麟官方APP 或刮奖H5页面进行刮奖一次<br>奖品包括：IPHONE 8手机，彩麒麟投资红包1.66元、2.66元、6.66元、9.99元、16.66元、66.66元、99.99元。<br><b>二、参与方式：</b> <br>1、微信扫描下方二维码（活动已结束，该二维码失效），进入刮卡抽奖活动，点击刮卡，还有机会抽中iPhone 8！<br>2、微信搜索“小麒麟订阅号”或扫描下方二维码关注小麒麟订阅号，进入订阅号后，点击下方菜单栏的‘麒麟活动’，再点击‘国庆刮刮乐’，即可参与活动。<br>3、进入彩麒麟app，点击刮刮乐活动展示页，进入刮奖活动；<br><b>三、活动规则：</b> <br>1、同一账户每天仅可参加一次刮奖（同一微信账户或同一手机号或其他可以合理显示为同一账户的情形，均视为同一账户）；<br>2、红包发放以提交的手机号为准，请填写正确的手机号；红包仅限投资使用，中奖后实时发放到获奖账户中；<br>3、如遇参与人数较多，红包可能会延迟入账，请您稍作等待；<br>4、红包自发放到账户中后的有效期为48小时；<br>5、实物奖品在活动结束后15个工作日内联系获奖者进行配送；<br>6、本活动最终解释权归北京彩麒麟互联网服务有限公司所有。</p>
      </div>
      <div id="tab8" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/周末加息.png">
        <p><b>六日抢加息 周末赚更high</b> <br><b>1.   活动内容</b> <br>2017年9月18日-10月28日期间，每逢周六、周日，每天各上线100万元加息标，加息0.2%。<br>即以下日期共上线11个加息标：<br>9月23日、9月24日；<br>9月30日、10月1日；<br>10月7日、10月8日；<br>10月14日、10月15日；<br>10月21日、10月22日；<br>10月28日。<br><b>2.    活动规则</b> <br>活动期间加息标于每周六、周日12:00开标；<br>加息标统一在下周一放款起息，其中9月30日、10月1日、10月7日、10月8日国庆假期期间的加息标在10月9日放款起息；<br>本活动最终解释权归北京彩麒麟互联网服务有限公司所有。</p>
      </div>
      <div id="tab9" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/首投送红包.png">
        <p class="pcenter"><b>新人特权  首投送红包啦</b><br>2017年9月18日-10月28日，首次在平台进行投资的用户获得红包奖励。 <br>首次投资金额≥5000元，奖励10元投资红包；<br>首次投资金额≥10000元，奖励30元投资红包； <br>首次投资金额≥50000元，奖励60元投资红包；<br>首次投资金额≥100000元，奖励90元投资红包。<br><br>活动规则：<br>本活动仅限从未在平台上投资过的用户参与；<br>奖励红包有效期为48小时，仅限投资使用；<br>奖励红包在首次投资的项目放款起息后的第二个工作日发放；<br>本活动最终解释权归北京彩麒麟互联网服务有限公司所有。</p>
      </div>
      <div id="tab10" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/17-金九银十.png">
        <p><b>金九银十 好礼集结</b> <br>活动时间：9月18日-10月28日 <br>活动期间内，投资300天（含）以上期限项目的累计投资金额达到相应的标准，获得相应的奖品；<br>奖品内容：<br>
         <table class="ac_table" border="0" cellspacing="0" cellpadding="0" >
          <tr>
            <td width="162" valign="top"><p>累计投资300天（含）以上项目金额 </p></td>
            <td width="369" valign="top"><p>奖品（三选一） </p></td>
          </tr>
          <tr>
            <td width="162" rowspan="3" valign="top"><p align="left"> </p>
              <p>5万元 </p></td>
            <td width="369" valign="top"><p>①    虎牌保温杯 </p></td>
          </tr>
          <tr>
            <td width="369" valign="top"><p>②    小狗除螨仪 </p></td>
          </tr>
          <tr>
            <td width="369" valign="top"><p>③   彩麒麟礼品卡300元 </p></td>
          </tr>
          <tr>
            <td width="162" rowspan="3" valign="top"><p> </p>
              <p>20万元 </p></td>
            <td width="369" valign="top"><p>①    德国博世车载空气净化器 </p></td>
          </tr>
          <tr>
            <td width="369" valign="top"><p>②    DW手表 </p></td>
          </tr>
          <tr>
            <td width="369" valign="top"><p>③    彩麒麟礼品卡1200元 </p></td>
          </tr>
          <tr>
            <td width="162" rowspan="3" valign="top"><p> </p>
              <p>50万元 </p></td>
            <td width="369" valign="top"><p>①    goPro5运动相机 </p></td>
          </tr>
          <tr>
            <td width="369" valign="top"><p>②    戴森吸尘器V6系列 </p></td>
          </tr>
          <tr>
            <td width="369" valign="top"><p>③   彩麒麟礼品卡3000元 </p></td>
          </tr>
          <tr>
            <td width="162" rowspan="3" valign="top"><p> </p>
              <p>100万元 </p></td>
            <td width="369" valign="top"><p>①    大疆无人机 </p></td>
          </tr>
          <tr>
            <td width="369" valign="top"><p>②    iPhone8 256G</p></td>
          </tr>
          <tr>
            <td width="369" valign="top"><p>③    彩麒麟礼品卡7000元 </p></td>
          </tr>
          <tr>
            <td width="162" rowspan="3" valign="top"><p> </p>
              <p>200万元 </p></td>
            <td width="369" valign="top"><p>①   <br>
              iPhone x     256G<br>
              Apple watch S3运动款 </p></td>
          </tr>
          <tr>
            <td width="369" valign="top"><p>②  瑞士IQAir    AURA空气净化器 </p></td>
          </tr>
          <tr>
            <td width="369" valign="top"><p>③   彩麒麟礼品卡13000元 </p></td>
          </tr>
          <tr>
            <td width="162" rowspan="3" valign="top"><p> </p>
              <p> </p>
              <p>500万元 </p></td>
            <td width="369" valign="top"><p>①   <br>
              iPhone x 256G<br>
              ipad pro 10.5英寸 256G<br>
              MacBook pro 13英寸 256G <br>
              Apple Watch S3运动款 </p></td>
          </tr>
          <tr>
            <td width="369" valign="top"><p>②  OSIM/傲胜全自动豪华按摩椅 </p></td>
          </tr>
          <tr>
            <td width="369" valign="top"><p>③   彩麒麟礼品卡35000元 </p></td>
          </tr>
        </table>
         <br>活动规则<br>1)	本次活动累投金额仅包含300天（含）以上期限的项目； <br>2)	实物奖品将在活动结束后15个工作日内配送，请于11月31日前登录www.caiqilin.com在“我的账户-收货地址”或在APP“我的-设置-收货地址”中填写收货地址，逾期未填写视放弃奖励处理；<br>3)	部分奖品为预售产品，奖品派送随产品发布时间而定；<br>4)	按照活动期间统计的投资总额为标准确定最终奖品，奖品只能兑换一次；</p>
      </div>
      <div id="tab11" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/邀请好友得红包.png">
        <p class="pcenter"><b>一见钟情 双重奖励</b><br><b>一、活动时间</b><br>8月24日-8月30日<br><b>二、活动内容</b><br>推荐好友注册，邀请人可获得15元红包。<br>好友成功投资，邀请人可获得30元红包。<br><b>三、红包规则：</b><br>红包有效期为2天；<br>奖励红包在好友成功注册或投资后的一个工作日内发放；<br>通过APP专属链接邀请好友，好友可领取30元新手红包；<br>活动前已注册但未投资的用户，在活动期间完成首次投资，邀请人也可获得30元红包；<br>同一用户最多可获得50个15元红包和50个30元红包奖励，如发现有人采用虚假非法信息或冒用他人信息进行注册，将被列为黑名单冻结账户并取消此次活动的奖励；<br>本活动最终解释权归北京彩麒麟互联网服务有限公司所有。</p>
      </div>
      <div id="tab12" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/17-七夕加息.png">
        <p class="pcenter"><b>七夕约惠 有爱又有赚</b><br><b>一、活动时间：</b><br>8月24日-8月30日<br><b>二、活动内容：</b><br>每天上线200万加息标的，加息0.2%。<br>上午上线100万加息标的，开标时间为10:00。<br>下午上线100万加息标的，开标时间为15:00。</p>
      </div>
      <div id="tab13" class="tab_content" > <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/2周年活动.png">
        <p><b>彩麒麟两周年庆活动说明</b> <br>2015年的4月，彩麒麟平台正式上线，转眼间，我们又迎来了彩麒麟的两周岁生日。在这七百多个日子里，彩麒麟和各位投资人互利互赢，不断成长和发展。截止至2017年4月8日，平台累计交易总额达734,178,115.28，累计为投资人赚取了44,962,501.28，零逾期、零坏账。<br>值此平台上线两周年之际，为答谢广大投资人一直以来的支持与信赖，彩麒麟特别推出两周年庆活动。<br><b>活动一：加息限量疯抢</b> <br>4月12日-4月28日，每天上线200万加息标的，加息0.2%，限量疯抢。<br>上午上线100万加息标，开标时间10:00。 <br>下午上线100万加息标，开标时间15:00。 <br><b>活动二： 红包感恩回馈</b> <br>2017年4月8日及之前注册的彩麒麟用户，会获得两周年庆的红包及红包组。 <br>红包说明：<br>A.      红包和红包组于4月12日发放到账户中，请及时登录账户查收；<br>B.     红包仅限投资使用，有效期为2天；<br>C.     红包组分享有效期截止至4月28日；<br>本活动最终解释权归彩麒麟所有，如有疑问可拨打客服电话4008-95-2015咨询。</p>
      </div>
      <div id="tab14" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/翻牌闹新春.png">
        <p><b>翻牌闹新春   手气大比拼！ </b> <br><b>一、活动时间：2017.1.27-2017.2.12</b> <br><b>二、参与方式：</b> <br>1.     微信扫描二维码（活动已结束，二维码已失效），进入翻牌抽奖活动，点击翻牌，还有机会抽中iPhone 7！ <br>2.     微信搜索“小麒麟订阅号”并关注小麒麟订阅号，进入订阅号后，点击下方菜单栏的‘新春活动’，再点击‘翻牌闹新春’，即可参与活动。 <br><b>三、活动规则：</b> <br>A.    同一账户每天仅可参加一次抽奖（同一微信账户或同一手机号或其他可以合理显示为同一账户的情形，均视为同一账户）； <br>B.    默认参与者填写提交的手机号为发放红包奖励的账户；<br>C.    红包仅限投资使用，中奖后实时发放到获奖账户中； <br>D.    如遇参与人数较多，红包可能会延迟入账，请您稍作等待；<br>E.    红包自发放到账户中后的有效期为24小时；<br>F.    实物奖品在活动结束后15个工作日内联系获奖者进行配送；<br>G.  本活动最终解释权归北京京赢科技发展有限公司所有。</p>
      </div>
      <div id="tab15" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/时光机.png">
        <p class="pcenter"><b>开启您的彩麒麟时光机</b><br>是否还记得是哪一天和彩麒麟初相遇，开启了人生理财的新篇章。 <br>又是什么时候进行了第一笔投资？投资一小步，收益一大步呦~<br>抢了多少红包？用了多少？ 超越了多少小伙伴呢？ <br>还邀请了若干知己好友，让友谊的巨轮扬帆起航。<br>不知不觉，彩麒麟成为了生活中不可或缺的一部分。<br>这段日子，还在彩麒麟发生了哪些美好的改变？<br>扫描活动二维码（活动已结束，二维码已失效），即刻开启您的彩麒麟时光机，还有大大礼包等您拆！ </p>
      </div>
      <div id="tab16" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/邀请好友.png">
        <p><b>邀请有奖活动说明:</b> <br>活动时间：2017年1月11日-2017年2月28日<br>活动期间，每邀请1位好友投资，邀请人获得<b>58</b>元红包奖励。<br><b>如何邀请好友？</b> <br>1.    通过APP“我的邀请”分享邀请链接或二维码邀请好友注册；<br>2.    通过彩麒麟APP端分享的邀请链接注册的新用户，可获得30元新手红包。 <br>3.    新手30元红包有效期为15天； <br><b>活动说明：</b> <br>A.     红包仅限投资使用，无使用门槛限制，可累计使用； <br>B.     58元红包在好友完成首次投资时发放到邀请人账户中； <br>C.     红包有效期为24小时，邀请人需及时登录账户查收使用； <br>D.     活动前已注册但未投资的用户，在活动期间完成首次投资，邀请人也可获得58元红包；<br>E.      默认用户首次使用的邀请码的归属人为其邀请人，邀请人不能为本人； <br>F.      同一用户最多可获得50个58元红包奖励，如发现有人采用虚假非法信息或冒用他人信息进行注册，将被列为黑名单冻结账户并取消此次活动的奖励；<br>G.      本活动最终解释权归北京京赢科技发展有限公司所有。<br><b>1月11日-2月28日，累计邀请有效好友人数排名前三且总邀请有效好友人数≥10人的用户，获得额外奖励：</b> <br>累计邀请有效好友排名前三名分别可以获得2000元，1000元，500元礼品卡<br><b>特别说明：</b> <br>A.    有效好友指在活动期间完成首次投资的好友； <br>B.    彩麒麟礼品卡以电子码形式发放，微信搜索“彩麒麟礼品商城”关注后注册账户充值后即可使用，如有疑问可拨打彩麒麟礼品商城客服电话4008-94-2016咨询； <br>C.    对于活动如有疑问，请拨打彩麒麟客服电话4008-95-2015咨询； <br>D.    本活动最终解释权归北京京赢科技发展有限公司所有。 <br>扫描二维码（活动已结束，二维码已失效）关注小麒麟订阅号，获取更多精彩内容。</p>
      </div>
      <div id="tab17" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/剁手加息.png">
        <p class="pcenter"><b>12.12-12.26 加息大回馈 还有圣诞感恩红包</b><br><b>一、活动时间</b><br>2016年12月12日-2016年12月26日<br><b>二、活动内容</b><br>1.     项目加息<br>12月12日9:00-12月26日16:00，所有上线的项目加息0.2%。<br>2.     投资满额得圣诞感恩红包<br>12月12日-12月26日期间，累计投资金额达到一定金额，奖励相应金额红包。 <br>A.    累计投资≥8万，奖励8元红包<br>B.    累计投资≥18万，奖励28元红包<br>C.    累计投资≥38万，奖励68元红包<br>D.    累计投资≥58万，奖励188元红包</p>
        <p class="psmall"><b>红包规则：</b><br>a.    红包在活动结束后的24小时内发放到获奖账户中，请及时登录账户查收；<br>b.    红包仅限投资使用，红包自发放到账户中后的有效期为24小时；<br>c.    本活动最终解释权归北京京赢科技发展有限公司所有，如有疑问可拨打4008-95-2015咨询。</p>
      </div>
      <div id="tab18" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/邀请升级.png">
        <p class="pcenter"><b>邀请福利大升级活动说明：</b><br><b>一、活动时间：</b><br>2016年11月11日-2016年12月12日<br><b>二、活动内容：</b><br>活动期间，邀请5位及以上好友注册并投资，可获得500元彩麒麟礼品商城礼品卡；<br>活动期间，邀请10位及以上好友注册并投资，可获得1000元彩麒麟礼品商城礼品卡。<br><b>三、如何邀请好友？</b><br>1.    通过“我的邀请”分享邀请链接或二维码邀请好友；<br>2.    您的好友在注册时使用您的邀请码；<br>3.    通过彩麒麟APP端分享的邀请链接注册的新用户，可获得30元新手红包； <br>4.    新手30元红包有效期为15天；<br>更多详情欢迎扫描二维码（活动已结束，二维码已失效）关注小麒麟订阅号获取。</p>
      </div>
      <div id="tab19" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/16-双11活动.png">
        <p class="pcenter"><b>11.11狂欢活动说明：</b><br><b>一、项目加息 收益多多</b><br><b>1.     活动时间</b><br>11月11日9:00-11月21日16:00。<br><b>2.     活动内容</b><br><b>二、活动内容：</b><br>活动期间，带有“11.11狂欢”标签的项目加息0.3%。<br><b>二、转盘抽奖 惊喜连连</b><br><b>1.    活动时间</b><br>2016年11月11日-2016年11月21日<br><b>2.    活动内容：幸运大转盘 红包好礼送不停</b><br>微信扫描二维码（活动已结束，二维码已失效）进入转盘抽奖活动页面，开启幸运之旅。</p>
      </div>
      <div id="tab20" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/16-金九银十.png">
        <p class="pcenter"><b>金九银十快来收货 彩麒麟这厢有“礼”了！</b><br>活动时间：2016年9月6日-2016年10月10日<br>活动期间内，投资金额达到相应的标准获得相应的奖品；</p>
        <br>
        <table class="ac_table" border="1" cellspacing="0" cellpadding="0" >
          <tbody>
            <tr>
              <td width="113" valign="top"><p>投资金额</p></td>
              <td width="378" valign="top"><p>奖品</p></td>
            </tr>
            <tr>
              <td width="113" valign="top"><p><span lang="EN-US">500</span>万及以上</p>
                <p>（二选一）</p></td>
              <td width="378" valign="top"><p><span lang="EN-US">OTO</span>超豪华按摩椅</p>
                <p>彩麒麟礼品卡<span lang="EN-US">30000</span>元</p></td>
            </tr>
            <tr>
              <td width="113" valign="top"><p><span lang="EN-US">300</span>万及以上</p>
                <p>（二选一）</p></td>
              <td width="378" valign="top"><p>苹果三件套：</p>
                <p><span lang="EN-US">iPhone7 32G</span></p>
                <p><span lang="EN-US">iPad air 2 64G</span></p>
                <p><span lang="EN-US">Apple Watch Sport</span><span lang="EN-US"> 38mm</span></p>
                <p>彩麒麟礼品卡<span lang="EN-US">15000</span>元</p></td>
            </tr>
            <tr>
              <td width="113" valign="top"><p><span lang="EN-US">200</span>万及以上</p>
                <p>（二选一）</p></td>
              <td width="378" valign="top"><p><span lang="EN-US">Iphone7 32G</span></p>
                <p>彩麒麟礼礼品卡<span lang="EN-US">7000</span>元</p></td>
            </tr>
            <tr>
              <td width="113" valign="top"><p><span lang="EN-US">100</span>万及以上</p>
                <p>（二选一）</p></td>
              <td width="378" valign="top"><p>日立<span lang="EN-US">N4000</span>美容仪 <span lang="EN-US">+ </span>面膜</p>
                <p>彩麒麟礼品卡<span lang="EN-US">3000</span>元</p></td>
            </tr>
            <tr>
              <td width="113" valign="top"><p><span lang="EN-US">50</span>万及以上</p>
                <p>（二选一）</p></td>
              <td width="378" valign="top"><p>科沃斯扫地机器人</p>
                <p>彩麒麟礼品卡<span lang="EN-US">1500</span>元</p></td>
            </tr>
            <tr>
              <td width="113" valign="top"><p><span lang="EN-US">10</span>万及以上</p>
                <p>（二选一）</p></td>
              <td width="378" valign="top"><p>小米盒子<span lang="EN-US">3</span>增强版</p>
                <p>彩麒麟礼品卡<span lang="EN-US">500</span>元</p></td>
            </tr>
            <tr>
              <td width="113" valign="top"><p><span lang="EN-US">1</span>万及以上</p></td>
              <td width="378" valign="top"><p><span lang="EN-US">50</span>元彩麒麟投资红包</p></td>
            </tr>
          </tbody>
        </table>
        <br>
        <p>活动说明：<br>1.  投资红包在10月12日发放到被奖励账户中，有效期为2天；<br>2.  实物奖品将在活动结束后15个工作日内配送，请于10月31日前登录www.caiqilin.com在“我的账户-收货地址”或在APP“我的-设置-收货地址”中填写收货地址，逾期未填写视放弃奖励处理；<br>3.   iPhone7为预售产品，奖品派送随产品发布时间而定；<br>4.   按照活动期间统计的投资总额为标准确定最终奖品，奖品只能兑换一次；<br>5.   实物奖品将按活动规则进行发放，不可变更、变现，以实际收到为准；<br>6.   彩麒麟礼品卡以实体卡形式发放，微信搜索“彩麒麟礼品商城”关注后注册账户使用，如有疑问可拨打彩麒麟礼品商城客服电话4008-94-2016咨询；<br>7.   对于活动如有疑问，请拨打彩麒麟客服电话4008-95-2015咨询；<br>8.   本活动最终解释权归北京京赢科技发展有限公司所有。 </p>
      </div>
      <div id="tab21" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/带上好友来赚钱.png">
        <p class="pcenter"><b>带上好友来赚钱 友谊无价情更坚 可得4950元</b><br><b>一、活动时间：</b><br>2016年9月1日-2016年10月31日<br><b>二、活动详情：</b><br><b>1.    邀请好友投资得99元红包组合</b><br>活动期间，每邀请1位新用户注册并投资，邀请人可获得1个99元红包组合（66元红包+33元红包组）。新篇章。 <br>邀请人奖励上限50人，即邀请人最多可获得50个99元红包组合。<br>99元红包组合在被邀请的新用户首次投资项目开始放款计息后的次工作日发放到邀请人账户中。 <br><b>2.   首次投资得99元红包组合</b><br>活动期间，未在平台投资过的用户完成首次投资的可得1个99元红包组合（33元红包+66元红包组）。<br>99元红包组合在用户首次投资项目开始放款计息后的次工作日发放到用户账户中。<br><b>三、如何邀请好友？</b><br>1.    通过“我的邀请”分享邀请链接或二维码邀请好友；<br>2.    您的好友在注册时使用您的邀请码。<br>3.    通过彩麒麟APP端分享的邀请链接注册的新用户，可获得30元新手红包。<br>4.    新手30元红包有效期为15天； <br>更多详情欢迎扫描二维码关注小麒麟订阅号获取。 </p>
        <img src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/etc/dyh.jpg">
        <p><b>四、活动说明</b><br>1.   红包使用有效期为1天，仅限投资使用，无使用门槛限制，可累计使用；<br>2.   红包组只能通过彩麒麟APP端分享，登录APP在“我的-可用红包”中查看详情并分享给微信好友或朋友圈；<br>3.    红包组分享有效期为2天；<br>4.    若新用户在注册时未填写邀请码，默认其首次使用的邀请码的归属人为其邀请人； <br>5.    若符合条件未收到相应红包，请拨打 4008-95-2015 与客服联系；<br>6.    如发现有人采用虚假非法信息或冒用他人信息进行注册，将被列为黑名单冻结账户并取消此次活动的奖励；<br>7.    本活动最终解释权归北京京赢科技发展有限公司所有。</p>
      </div>
      <div id="tab22" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/奥运猜想.png">
        <p class="pcenter"><b>奥运大猜想活动说明：</b><br><b>一、活动时间：2016年8月12日-2016年8月18日</b><br><b>二、活动内容：</b><br>奥运盛会 比赛大猜想<br>活动内容：8月12日-8月18日期间，上线竞猜互动环节。<br><b>三、活动规则：</b><br>1、 微信搜索“小麒麟订阅号”或扫描下方二维码关注小麒麟订阅号，进入该订阅号，点击菜单中间‘奥运竞猜’，再点击‘竞猜赢红包’，便可直接参与活动。</p>
        <img src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/etc/dyh.jpg">
        <p>2、 本次活动共10题，根据最终答对题数的不同，分别发送不同金额红包。<br>答对10题者，获彩麒麟红包168元；<br>答对8-9题者，获彩麒麟红包68元；<br>答对6-7题者，获彩麒麟红包48元； <br>答对4-5题者，获彩麒麟红包28元；<br>答对2-3题者，获彩麒麟红包8元。<br>3、 为了红包发送正确，请填写真实有效的用户信息， 已注册彩麒麟的用户填写注册时手机号即可，未注册彩麒麟的用户请填写正确的手机号码以确保顺利领取红包，如手机号填写有误，不进行补发；<br>4、 活动红包为彩麒麟投资红包，红包有效期为1天，仅限投资使用且均不可变更、变现；<br> 具体时间安排如下：<br> 8月18日17:00截止答题；<br> 里约奥运会结束，方可统计相关答案；<br> 红包发放时间，8月23日9:00-12:00；<br> 6、如有任何疑问请致电彩麒麟客服热线：4008952015进行咨询；<br> 7、关注小麒麟订阅号，获取最新活动消息，赢奥运会限量纪念币套装！<br> <br> 本活动最终解释权归北京京赢科技发展有限公司所有。</p>
      </div>
      <div id="tab23" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/奥运活动.png">
        <p class="pcenter"><b>礼约奥运  乐享盛会</b><br><b>一、活动时间：2016年8月5日-2016年8月29日</b><br><b>二、活动内容：</b><br>1.     奥运盛会加息助阵<br>活动内容：8月5日-8月21日期间，所有上线的标的加息0.31%。<br>2.     红包诚意满满致敬中国健儿 <br>8月5日-8月21日奥运会比赛期间，中国代表队每获得一枚金牌，小助手通过微信朋友圈发放一组奥运红包。 <br>活动规则：<br>微信搜索caiqilinxzs或扫描下方二维码添加彩麒麟小助手为好友即可在小助手朋友圈领取奥运红包。</p>
        <img src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/etc/xzs.jpg">
        <p>部分获奖项目比较集中，小助手会根据金牌获得情况酌情安排时间发放。<br>3.     投资得限量奥运纪念币<br>8月5日-8月29日期间，累计投资额超过50万，可获得2016年巴西里约奥运会纪念币一套（全套16枚）。<br>还邀请了若干知己好友，让友谊的巨轮扬帆起航。<br>活动规则：<br>实物奖品将在活动结束后15个工作日内配送，用户需在9月11日前登录www.caiqilin.com（我的账户-收货地址）或彩麒麟APP（我的-设置-收货地址）填写收货地址，逾期未填写视放弃奖励处理；<br>实物奖品将按活动规则进行发放，所有奖品均不可变更、变现；<br>本活动最终解释权归北京京赢科技发展有限公司所有。</p>
      </div>
  
      <div id="tab24" class="tab_content" style="display: none; "> <img class="map" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/红包活动.png">
        <p class="pcenter"><b>红包活动说明：</b></p>
        <img src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/index.jpg"> <img src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/index (1).jpg"> <img src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_pic/ACTIVITIES/index (2).jpg"> </div>
    </div>
	
    </div>
  </div>
</div>
</div>
<!--活动信息-->
<?php $_smarty_tpl->_subTemplateRender("file:about/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
