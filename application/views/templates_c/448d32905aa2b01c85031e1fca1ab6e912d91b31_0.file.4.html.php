<?php
/* Smarty version 3.1.30-dev/79, created on 2018-03-27 18:30:14
  from "/home/www/test/application/views/templates/about/4.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/79',
  'unifunc' => 'content_5aba1d360db530_68489764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '448d32905aa2b01c85031e1fca1ab6e912d91b31' => 
    array (
      0 => '/home/www/test/application/views/templates/about/4.html',
      1 => 1522057918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:about/header.html' => 1,
    'file:about/footer.html' => 1,
  ),
),false)) {
function content_5aba1d360db530_68489764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:about/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--帮助中心-->
<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<style>
    .wrap div{padding:0;}
    .pg-help-main{width:1140px;font-size:14px;padding:0;margin:30px 0 60px 30px;}
	.pg-help-main .color-dark-text{color:#2b2b2b!important}
	.pg-help-main .border-bt{border-bottom:1px solid #f4f4f4}
	.pg-help-main .ui-box-white-bg{min-height:500px}
	.ui-box-white-bg{border:0;}
	.pg-help-index-info{padding:22px 0px 22px;}
	.pg-help-index-info dt{width:7%}
	.pg-help-index-info dd{line-height:20px}
	.pg-help-index-info a{color:#000;display:inline-block;}
	.pg-help-index-info dd>a:not(:first-child){margin-left:55px;}
	.pg-help-index-info .active{height:25px;border-bottom:2px solid #95b1d6;color:#95b1d6;line-height:20px;display:inline-block;};
	.fn-clear:after{visibility:hidden;display:block;font-size:0;content:" ";clear:both;height:0}
	.fn-clear{zoom:1}
	.pg-help-main .color-dark-text{color:#2b2b2b!important}
	body .fn-hide{display:none}
       .tabs{float:left;letter-spacing:1px;}
	.fn-left,.fn-right{display:inline}
	.fn-left{float:left;margin-left:25px;letter-spacing:1px;}
	.fn-right{float:right}
	.fn-text-overflow{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
	.fn-linear{background:-webkit-gradient(linear,left top,left bottom,from(#fcfcfc),to(#f1f1f1));background:-moz-linear-gradient(top,#fcfcfc,#f1f1f1);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fcfcfc', endColorstr='#f1f1f1');background:-o-linear-gradient(top,#fcfcfc,#f1f1f1);background:linear-gradient(top,#fcfcfc,#f1f1f1)}
	.fn-linear-light{background:-webkit-gradient(linear,left top,left bottom,from(#fcfcfc),to(#f9f9f9));background:-moz-linear-gradient(top,#fcfcfc,#f9f9f9);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fcfcfc', endColorstr='#f9f9f9');background:-o-linear-gradient(top,#fcfcfc,#f9f9f9);background:linear-gradient(top,#fcfcfc,#f9f9f9)}
	.fn-rmb{font-family:arial;font-style:normal;padding-right:4px}
	.fn-webkit-adjust{-webkit-text-size-adjust:none}
	.pg-help-list-box {min-height:338px;line-height:30px;padding:0 25px 25px;}
	.pg-help-list-box h4 {padding:0 0 4px}
	.pg-help-list-box h4 a {color:#222}
	.pg-help-list-box ul li h5 {line-height:53px;cursor:pointer;height:57px;font-size:14px;margin-top:25px;letter-spacing:2px;}
	.pg-help-list-box ul li h5 p {letter-spacing:2px;}
	.pg-help-list-box ul li h5 .title {width:90%}
	.pg-help-list-box ul li h5 {background-color:#f0f0f0;}
	.pg-help-list-box .help-list-item {display:none;margin:0 0 10px;padding:12px 25px}
	.pg-help-list-box dl dt {color:#2b2b2b}
	.pg-help-list-box dl dd:last-child {padding-bottom:0}
	.pg-help-list-box dd img {max-width:100%}
	.help-list-box {width:396px;min-height:170px;padding:10px 24px}
	.help-list-box h4 {width:400px}
	.help-list-box ul {width:440px}
	.help-list-box ul li {float:left;width:128px;margin-right:10px;padding:5px 0}
	.help-list-item{margin:0 0 10px;padding:12px 25px;border-bottom:2px solid #f0f0f0;border-right:2px solid #f0f0f0;border-left:2px solid #f0f0f0;}
	.pg-help-list-box li i {-webkit-transition: all 0.4s ease;-o-transition: all 0.4s ease;transition: all 0.4s ease;}
	.pg-help-list-box li i.fa-chevron-down {right: 12px;left: auto;font-size: 16px;margin-right:10px;}
	.pg-help-list-box li.open i {color: #000;}
	.pg-help-list-box li.open i.fa-chevron-down {-webkit-transform: rotate(180deg);-ms-transform: rotate(180deg);-o-transform: rotate(180deg);transform: rotate(180deg);}
	ul,li{list-style:none}
	a{text-decoration:none;}
	li {display: list-item;text-align: -webkit-match-parent;}
</style>

<div class="grid_10 pg-help-main mt10">
	<div class="ui-box-white-bg color-white-bg">
		<div class="pg-help-index-info border-bottom-dashed">
			<dl class="fn-clear">
				<dd id="tabs" class="tabs">
					<a href="#tab1" class="active" style="">使用流程</a>
					<a href="#tab2">账户管理</a>
					<a href="#tab3">充值/投资</a>
					<a href="#tab4">回款/提现</a>
					<a href="#tab5">红包/邀请</a>
					<a href="#tab6">银行存管</a>
					<a href="#tab7">版本升级</a>
				</dd>
			</dl>
		</div><br>
		<div class="tab_container">
			<div id="tab1" class="tab_content" style="display: none; ">
				<div style="margin:30px 0;font-size:14px;line-height:25px;letter-spacing:2px;">
					<p>仅需以下几步，即可使用彩麒麟。</p>
					<p style="color:#95b1d6;">注册——开通银行存管账户——充值——投资——回款</p>
				</div>
				<div id="accordion1" class="pg-help-list-box help-list-invest">
					<ul class="question">
						<li id="qt0">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">1)    注册</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;">登录彩麒麟首页，点击顶部注册；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;">进入注册页面，按要求填写手机号码→登录密码→获取验证码，点击“注册”。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt1">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">2)    开通银行存管账户</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">i.   设置交易密码</span>
									</p>
									<p style="white-space: normal;padding-left:30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">设置交易密码（6位交易密码），并确认；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">ii.  身份信息验证</span>
									</p>
									<p style="white-space: normal;padding-left:30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">填写姓名，输入有效身份证件（支持二代身份证号）；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">iii. 银行卡信息验证</span>
									</p>
									<p style="white-space: normal;padding-left:30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">选择银行、输入银行卡号、预留手机号、获取验证码；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">iv. 同意协议并开通。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt2">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">3)    充值</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">登录进入账户后进行充值，输入充值金额后选择个人网银进行充值；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">不同银行的限额不同，请您关注拟绑定银行卡的充值限额。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt3">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">4)    投资</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">选择投资项目，查看项目详情，输入投资金额查看相关合同确认无误后进行投资；您所投资的项目，自标的放款之日起计算收益。放款起息时，您将收到短信提醒；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">新版PC端暂不支持投资功能，请下载彩麒麟APP进行投资。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt4">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">5)    回款</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">项目到期后，本金及收益返回到彩麒麟账户，可选择继续投资或提现。</span>
									</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="tab_container">  
			<div id="tab2" class="tab_content" style="display: none; ">
				<div id="accordion2" class="pg-help-list-box help-list-invest">
					<ul class="question">
						<div style="margin:30px 5px 0;font-size:14px;line-height:25px;letter-spacing:2px;font-weight:bold">
							<p style="color:#95b1d6">1.    登录注册</p>
						</div>
						<li id="qt0" style="margin:-10px 0 0;">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">1)    收不到短信验证码？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">i.   请确认您输入的手机号码是否正确，是否暂无信号、欠费或者停机；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">ii.  请确认您的手机能否正常接收短信，是否被第三方应用拦截或手机短信息存储已满；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">iii. 如用网页版注册，可更换不同的浏览器重新提交发送请求；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">iv. 短信运营商通道可能会出现阻塞情况，造成短信延时或者失败，请您稍后尝试；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">ⅴ. 若仍收不到短信验证码，请联系平台客服（4008-95-2015）。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt1">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">2)    忘记登录密码怎么办？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">在PC端或APP端点击登录后，在登录按钮下方，点击忘记密码，进入重置密码流程；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">根据操作指示，依次输入手机号、验证码、新密码，即可完成密码重置。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt2">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">3)    为什么会登录失败？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">请确认您输入的手机号、密码是否正确，如果忘记密码，您可以重新设置；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">网络问题也会造成登录失败，建议您稍后尝试。</span>
									</p>
								</div>
							</div>
						</li>
						<div style="margin:30px 5px 0;font-size:14px;line-height:25px;letter-spacing:2px;font-weight:bold">
							<p style="color:#95b1d6">2.    实名认证</p>
						</div>
						<li id="qt3" style="margin:-10px 0 0;">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">1)    身份信息正确，为什么无法通过身份验证？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">i.   实名认证的有效身份证明包含中华人民共和国居民身份证、港澳居民来往內地通行证、台湾居民来往大陆通行证。目前仅支持居民身份证认证，其他证件认证请联系平台客服（4008-95-2015）咨询。</span>
									</p>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">ii.  18周岁以上至70周岁以下的中国公民可通过实名认证，特殊身份人员可能无法完成身份认证。</span>
									</p>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">iii. 此外，验证不成功的原因可能是更改过姓名或户籍曾发生过变动，建议您到派出所进行“网络身份信息”查询、更改和确认后，再完成实名认证。</span>
									</p>
								</div>
							</div>
						</li>
						<div style="margin:30px 5px 0;font-size:14px;line-height:25px;letter-spacing:2px;font-weight:bold">
							<p style="color:#95b1d6">3.    开通银行存管</p>
						</div>
						<li id="qt4" style="margin:-10px 0 0;">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">1)    可以绑定几张银行卡？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">每个用户只能绑定一张有效的银行卡（仅限借记卡），该银行卡将成为您在彩麒麟平台操作资金投资与提现的唯一关联银行账户；</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt5">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">2)    为什么开通银行存管账户不成功？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">请您检查填写的姓名、手机号码、身份证号码和银行卡号是否与在银行预留的一致，同时确保您的银行卡已经开通了网上银行功能。</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">提示“银行预留信息不一致” 可能是您在办理银行卡时开通的不同业务留了不同的手机号，请致电银行客服确认。</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">建议：目前可尝试两种方式，</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;text-indent:inherit;letter-spacing:2px;">（1）建议您携带本卡到银行将所有业务都开通留取统一手机号，例如手机银行、快捷、网银、银联在线支付；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;text-indent:inherit;letter-spacing:2px;">（2）建议您更换成其他银行卡进行绑定。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt6">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">3)    绑卡成功后是否可以修改？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">如您的账户中待收本金/冻结资金/余额均为0，可自行在网站或APP存管页面进行修改银行卡，如待收本金/余额/冻结资金不为0，请联系平台客服<span style="color:#95b1d6;font-weight:bold">(4008-95-2015)</span>进行操作。</span>
									</p>
								</div>
							</div>
						</li>
						<div style="margin:30px 5px 0;font-size:14px;line-height:25px;letter-spacing:2px;font-weight:bold">
							<p style="color:#95b1d6">4.    信息泄露措施</p>
						</div>
						<li id="qt7" style="margin:-10px 0 0;">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">1)    账户密码和交易密码泄露后怎么办？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">若账户信息泄露，请您尽快更换账户密码；更改密码后，其他登录账户将强制弹出；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">交易密码泄露可能会造成其他人代为操作，例如投资、充值、提现等；但您的资产仅能在您本人的彩麒麟账户和银行卡之间流转，不会造成资产的实质损失。</span>
									</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="tab_container">  
			<div id="tab3" class="tab_content" style="display: none; ">
				<div id="accordion3" class="pg-help-list-box help-list-invest">
					<ul class="question">
						<div style="margin:30px 5px 0;font-size:14px;line-height:25px;letter-spacing:2px;font-weight:bold">
							<p style="color:#95b1d6">1.    充值</p>
						</div>
						<li id="qt0" style="margin:-10px 0 0;">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">1)    如何充值？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">PC端和APP端都可以进行充值。不同银行卡、不同充值方式的充值限额有所不同。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt1">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">2)    充值支持哪些银行？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">充值页面会提示您支持充值的银行。点击选择不同银行可查看对应银行的充值限额。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt2">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">3)    充值不成功的原因？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">i.   您的银行卡余额不足；
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">ii.  您的银行卡或已过期、作废、挂失；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">iii. 银行数据传输异常请稍后再试；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">iv. 超过银行充值限额。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt3">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">4)    充值金额没有及时到账？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">如遇网络问题，到账可能会延迟，如银行扣款成功后超过半小时还未到账，请与平台客服（4008-95-2015）联系；</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt4">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">5)    充值会不会扣手续费？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">目前用户充值不需要支付充值费用，银行和第三方支付的通道费用由彩麒麟承担。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt5">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">6)    忘记交易密码怎么办？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">登录进入存管账户页面，点击重置，根据页面提示输入相关信息（姓名、证件号、银行卡号、短信验证码），点击“下一步”，输入新的交易密码并确认密码，即完成交易密码的重置。 </span>
									</p>
								</div>
							</div>
						</li>
						<div style="margin:30px 5px 0;font-size:14px;line-height:25px;letter-spacing:2px;font-weight:bold">
							<p style="color:#95b1d6">2.    投资</p>
						</div>
						<li id="qt6" style="margin:-10px 0 0;">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">1)    投资的界面在哪里？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">升级后的网站暂时没有投资功能，请您扫描二维码或前往应用市场下载彩麒麟手机客户端进行投资，手机操作更加便捷灵活。</span>
									</p>
                                                                       <p style="white-space: normal;">
                                                                           <img src="http://www.caiqilin.com/assets/img/index/erweima-caiqilin.png" />
                                                                       </p>
								</div>
							</div>
						</li>
						<li id="qt7">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">2)    在彩麒麟投资有什么要求？有金额限制吗？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">彩麒麟投资门槛低，1000元起投。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt8">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">3)    投资前我应该注意些什么？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">无论是投资新手还是资深用户，在每次投资前，请务必做到：</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">i.   对本平台的基本运营原则有所了解；</span>
									</p>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">ii.  仔细阅读项目说明，包括项目的融资金额、利率、投资期限、安全保障方式等信息，以确定该产品符合您的风险承受能力、投资回报率和流动性等方面的实际情况；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">iii. 请核实投资金额，确认无误后再进行操作。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt9">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">4)    投资为什么会冻结？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">在您成功发起投资后且借款项目还未满标放款起息时，您的资金将会被暂时冻结；当项目放款起息后，您的资金将被解冻并划拨至借款人账户。被冻结的资金仍然在您的存管账户中。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt10">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">5)    投资收益何时开始计算？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">您所投资的项目，自标的放款之日起计算收益。放款起息时，您将收到短信提醒。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt11">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">6)    我是否可以取消某笔投资？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">为了保证所有投资人和融资人的利益，在项目的募集期内，已投资金将会被冻结，无法中途取消。</span>
									</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="tab_container">  
			<div id="tab4" class="tab_content" style="display: none; ">
				<div id="accordion4" class="pg-help-list-box help-list-invest">
					<ul class="question">
						<div style="margin:30px 5px 0;font-size:14px;line-height:25px;letter-spacing:2px;font-weight:bold">
							<p style="color:#95b1d6">1.    回款</p>
						</div>
						<li id="qt0" style="margin:-10px 0 0;">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">1)    到期标的回款什么时候到账？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">首先请您在回款计划里查看回款时间，资金将于约定回款日期当天24时前返回平台账户余额，收到回款后，您将收到短信提醒，请您耐心等待。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt1">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">2)    项目到期后，资金会回到哪里？收到回款后能马上再投资吗？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">项目到期后，本金和收益将回到您的彩麒麟账户，可以选择提现或者再投资。建议您在收到还款后进行再次投资，确保您收益的最大化。</span>
									</p>
								</div>
							</div>
						</li>
						<div style="margin:30px 5px 0;font-size:14px;line-height:25px;letter-spacing:2px;font-weight:bold">
							<p style="color:#95b1d6">2.    提现</p>
						</div>
						<li id="qt2" style="margin:-10px 0 0;">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">1)    提现有费用吗？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">每个用户每月享有4次免费提现机会，超过4次，每笔收取手续费2元，手续费将在申请提现的金额中扣除。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt3">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">2)    提现金额有没有限制？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">提现无金额上限限制，手续费将在申请提现的金额中扣除。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt4">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">3)    提现多久到账？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">提现申请将在工作日处理，提现资金预计1-2个工作日内会返回到该账户所绑定的银行卡。如遇周末或者节假日会顺延至下个工作日处理，具体以银行到账时间为准。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt5">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">4)    为什么提现申请会失败？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">一般除了您的银行卡注销或者卡信息无效的情况下，是不会出现这种情况的；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">如遇到此类问题您可以联系平台客服（4008-95-2015）确认相关信息，待收到银行退汇后，重新提现即可。</span>
									</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="tab_container">  
			<div id="tab5" class="tab_content" style="display: none; ">
				<div id="accordion5" class="pg-help-list-box help-list-invest">
					<ul class="question">
						<div style="margin:30px 5px 0;font-size:14px;line-height:25px;letter-spacing:2px;font-weight:bold">
							<p style="color:#95b1d6">1.    红包</p>
						</div>
						<li id="qt0" style="margin:-10px 0 0;">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">1)    如何得到红包？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">i.   您每天的第一笔投资会得到一组红包；</span>
									</p>
                                                                        <p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">ii.    一天多次投资时，系统将根据投资金额和期限判定是否生成红包及红包大小，并自动发放；</span>
									</p>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">iii.  新用户可以通过已注册用户的APP客户端分享的邀请链接，领取新手红包；</span>
									</p>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">iv. 您还可以参与彩麒麟不定期发布的活动，获得红包。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt1">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">2)    红包如何进行分享？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">i.   红包仅可在APP端进行分享；</span>
									</p>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">ii.  APP端成功投资并产生红包后，会弹出红包分享页面，可点击“分享红包”，进行分享；</span>
									</p>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">iii. 进入“我的”-“红包”，在“给好友发红包”列表里点击“发红包”，分享至微信好友或朋友圈；</span>
									</p>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">iv. 未领用完的红包组，在有效期内可以多次发出。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt2">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">3)    红包怎么使用？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">红包在投资时直接抵现，投资时优先使用红包金额。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt3">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">4)    领取红包后，为什么在账户的“可用红包”中没有显示？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">i.   核实领取红包的手机号码是否与绑定的手机号码一致，如果号码一致，请退出账户后重新登录查看；</span>
									</p>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">ii.  在“我的”-“红包”中，查看红包是否已过期；</span>
									</p>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">iii. 若均没有显示，请将领取红包的页面截图保留，与平台客服（4008-95-2015）联系。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt4">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">5)    红包的使用期限与有效期？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">登录彩麒麟APP，依次点击“我的”-“红包”，进入红包页面，点击“可用红包”，即可查看红包相应使用期限。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt5">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">6)    为什么投资完没有红包？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">i.   您每天的第一笔投资会得到一组红包；</span>
									</p>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">ii.  一天多次投资时，系统将根据投资金额和期限判定是否生成红包及红包大小，并自动发放。</span>
									</p>
								</div>
							</div>
						</li>
						<div style="margin:30px 5px 0;font-size:14px;line-height:25px;letter-spacing:2px;font-weight:bold">
							<p style="color:#95b1d6">2.    邀请码和返利</p>
						</div>
						<li id="qt6" style="margin:-10px 0 0;">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">1)    如何邀请好友？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">i.   打开彩麒麟APP，依次进入“我的”-“邀请返利”界面，点击“邀请好友”，可分享邀请链接至微信好友或微信朋友圈；</span>
									</p>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">ii.  被邀请人通过邀请链接领取新手红包，下载APP完成注册并投资。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt7">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">2)    邀请好友返利规则？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">i.   通过APP的专属链接邀请好友注册和投资，好友可以领取30元的新手红包，投资时直接抵现使用；</span>
									</p>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">ii.  若好友是在您的邀请下注册投资，您和好友都可以以获得返利奖励。</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">温馨提示：若好友未通过邀请链接注册，则无法获得30元新手红包</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt8">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">3)    邀请码怎么使用？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">i.   每一位在彩麒麟成功注册的用户都拥有专属邀请码；</span>
									</p>
									<p style="white-space: normal;padding-left:30px;text-indent:-30px;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">ii.  新用户在注册过程中可以输入邀请人的邀请码，投资后，双方都可以获得相应返利。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt9">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">4)    返利什么时候到账？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">返利在邀请的好友成功投资后15个工作日内返到双方的彩麒麟账户。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt10">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">5)    返利怎么计算？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">邀请返利=被邀请人投资金额×返利系数×投资项目期限÷360天</span>
									</p>
                                                                        <p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">投资返利=投资金额×返利系数×投资项目期限÷360天 </span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt11">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">6)    如何查看我邀请了多少好友及其邀请返利情况？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">登录彩麒麟APP，依次点击“我的”“邀请返利”进入相应界面，即可查看您的邀请人数、待收返利、累计返利。</span>
									</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="tab_container">  
			<div id="tab6" class="tab_content" style="display: none; ">
				<div id="accordion6" class="pg-help-list-box help-list-invest">
					<ul class="question">
						<li id="qt0" style="margin:50px 0 0;">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">1)    为什么要开通银行存管账户？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">根据《网络借贷信息中介机构业务活动管理暂行办法》第二十八条“网络借贷信息中介机构应当实行自身资金与出借人和借款人资金的隔离管理，并选择符合条件的银行业金融机构作为出借人与借款人的资金存管机构。”和第三十五条“资金存管机构对出借人与借款人开立和使用资金账户进行管理和监督，并根据合同约定，对出借人与借款人的资金进行存管、划付、核算和监督。”</span>
									</p>
<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">为保障用户资金安全，实现安全与合规化建设，2017年11月，彩麒麟上线银行资金存管系统，用户交易资金由海口联合农商银行全面存管。平台不碰触用户账户资金，不设资金池，符合监管。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt1">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">2)    如何开通银行存管账户？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">您可登录APP，通过充值、提现、设置等进入存管账户开通页面：</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">i.   点击“开通存管账户”；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">ii.  输入并确认交易密码，点击“同意以下协议并开通”；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">iii. 选择银行、输入卡号、手机号、验证码，点击“下一步”；</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">iv. 银行存管账户开通成功。</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">您亦可至新版PC端按照提示开通银行存管账户。</span>
									</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="tab_container">  
			<div id="tab7" class="tab_content" style="display: none; ">
				<div id="accordion7" class="pg-help-list-box help-list-invest">
					<ul class="question">
						<li id="qt0" style="margin:50px 0 0;">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">1)    新版PC端不支持投资？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">系统升级后，新版PC端暂不支持投资功能，请您下载APP，操作更便捷。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt1">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">2)    如何访问旧版PC端？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">您可直接访问<a href="http://v1-www.caiqilin.com">http://v1-www.caiqilin.com</a>，或者登录新版PC端，点击首页上方“切换回旧版”进入旧版PC端。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt2">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">3)    如何查看升级前的相关记录？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">如需查看升级前的投资列表、回款计划、资金记录、已使用红包、合同及返利记录，请访问旧版PC端。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt3">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">4)    升级后首次充值、提现或投资，为什么要重新绑定银行卡？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">系统升级后，需要您开通银行存管账户，重新验证并绑定银行卡。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt4">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">5)    在新版PC端更改了登录密码，为什么在旧版PC端用新密码登录不上？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p>
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">升级后，新旧PC端密码单独管理，用户在新版PC端修改登录密码不同步到旧版PC端。反之亦然。</span>
									</p>
									
								</div>
							</div>
						</li>
						<li id="qt5">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">6)    总资产为什么和更新前的数额不一致了？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">系统升级后，总资产金额中不再包括待收利息及可用红包金额。</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">升级后总资产=待收本金+冻结资金+账户余额</span>
									</p>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">升级前总资产=已投资产+冻结资产+账户余额+可用红包</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt6">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">7)     什么是免密授权？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">用户开通此功能，投资、提现时无需输入交易密码即可完成操作，简化了操作流程，您可自主开通或关闭。</span>
									</p>
								</div>
							</div>
						</li>
						<li id="qt7">
							<h5 class="color-dark-text fn-clear link">
								<p class="fn-left title color-dark-text fn-text-overflow">8)    如何开通免密授权？</p>
								<p class="fn-right mr10"><i class="fa fa-chevron-down"></i></p>
							</h5>
							<div class="color-lightgray-bg help-list-item" style="display: none">
								<div>
									<p style="white-space: normal;">
										<span style="color: rgb(102, 102, 102);font-size:14px;letter-spacing:2px;">开通银行存管账户后，登录账户，进入个人信息页面，按照提示去开通免密授权。或登录APP，进入设置页-点击“免密授权”，按照提示开通免密授权。</span>
									</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	$(document).ready(function() {
		var xx = getUrlParam('reurl');
		var xy = getUrlParam('tab');
		xx<12&&xx>0&&!isNaN(xx)?xx=xx:xx=0;

		if(xy<7&&xy>0&&!isNaN(xy)){
			var xyx = parseInt(xy) + 1;
			$("dd.tabs a").removeClass("active"); //Remove any "active" class
			$("dd.tabs a:eq("+xy+")").addClass("active"); //Add "active" class to selected tab
			$(".tab_content").hide(); //Hide all tab content
			var activeTab = $("dd.tabs a:eq("+xy+")").attr("href"); //Find the rel attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active content
			//Default Action
			$("#accordion"+xyx+" li:eq("+xx+")").toggleClass('open'); //Activate first tab
			$("#accordion"+xyx+" .help-list-item:eq("+xx+")").show();
			if(xx!=0){$('html,body').animate({scrollTop:$("#accordion"+xyx+" #qt"+xx).offset().top}, 800);}
		}else{
			if(xx!=0){
				$("dd.tabs a").removeClass("active"); //Remove any "active" class
				$("dd.tabs a:eq(0)").addClass("active"); //Add "active" class to selected tab
				$(".tab_content").hide(); //Hide all tab content
				var activeTab = $("dd.tabs a:eq(0)").attr("href"); //Find the rel attribute value to identify the active tab + content
				$(activeTab).fadeIn(); //Fade in the active content
				
				$("#accordion1 li:eq("+xx+")").toggleClass('open'); //Activate first tab
				$("#accordion1 .help-list-item:eq("+xx+")").show();
				$('html,body').animate({scrollTop:$("#accordion1 #qt"+xx).offset().top}, 800);
			}else{
			//tab Action
				$(".tab_content").hide(); //Hide all content
				var activeTab = $("dd.tabs a:eq(0)").attr("href"); //Find the rel attribute value to identify the active tab + content
				$(activeTab).fadeIn(); //Fade in the active content
				$("#accordion1 li:first").toggleClass('open'); //Activate first tab
				$("#accordion1 .help-list-item:first").show(); //Show first tab content
			}
		}

		//On Click Event
		$("dd.tabs a").click(function() {
			$("dd.tabs a").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(".tab_content").hide(); //Hide all tab content
			var activeTab = $(this).attr("href"); //Find the rel attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active content
			return false;
		});
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

	var accordion1 = new Accordion($('#accordion1'), false);
	var accordion2 = new Accordion($('#accordion2'), false);
	var accordion3 = new Accordion($('#accordion3'), false);
	var accordion4 = new Accordion($('#accordion4'), false);
	var accordion5 = new Accordion($('#accordion5'), false);
	var accordion6 = new Accordion($('#accordion6'), false);
	var accordion7 = new Accordion($('#accordion7'), false);
<?php echo '</script'; ?>
>

<!--帮助中心-->
<?php $_smarty_tpl->_subTemplateRender("file:about/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
