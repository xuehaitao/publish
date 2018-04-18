<?php
/* Smarty version 3.1.30-dev/79, created on 2018-03-26 17:59:24
  from "/home/www/test/application/views/templates/about/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/79',
  'unifunc' => 'content_5ab8c47c78b640_42724124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '867f1b47474dc2a2c96e31f751ff3ae48c4ca275' => 
    array (
      0 => '/home/www/test/application/views/templates/about/header.html',
      1 => 1522057669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ab8c47c78b640_42724124 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<!--顶部-->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> <title>了解更多</title>
    <meta name="Keywords" content="彩麒麟，彩麒麟理财，彩麒麟软件，彩麒麟APP，彩麒麟平台，彩麒麟下载，彩麒麟国资，彩麒麟互联网，彩麒麟安全，彩麒麟风控，p2p，网贷，网络平台，网贷安全，网络借贷，国资平台，国资系平台，朝阳国资，朝阳国资平台，投资理财，理财，企业贷款，房贷，车贷，融资，企业借款，互联网金融，银行存管，供应链金融， 京赢科技，共赢系列，京赢系列" />
    <meta name="Description" content="彩麒麟 — 致力于提供专业的线上信贷及投资撮合服务，平台秉持规范、专业、透明、真实的原则，打造以财富管理、投资管理、互联网金融三位一体的投融资链条和综合性金融服务体系，践行普惠金融。" />
    <meta name="viewport" content="width=device-width,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" /> <link rel="stylesheet" type="text/css" href="/assets/css/base.css?v=201802121503" />
 <link rel="stylesheet" type="text/css" href="/assets/css/common.css?v=201802121503" />
 <?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/lib/jquery-3.2.1.min.js?v=201802121503"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/lib/rsa.min.js?v=201802121503"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/common/common.js?v=201802121503"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/common/ajax-mod.js?v=201802121503"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/common/messagebox.js?v=201802121503"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/common/jquery.tmpl.min.js?v=201802121503"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/lib/aes.min.js?v=201802121503"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/lib/encryptcommon.js?v=201802121503"><?php echo '</script'; ?>
>
</head>

<body>
    <div class="head-nav fixed-cs">
        <div class="nav">
            <div class="logo left">
                <a href="/"><img width="144" height="38" src="../assets/img/common/logo_caiqilin_cs.png"></a>
            </div>
            <ul class="nav-list right">
                 
                    <li class="left"><a href="http://v1-www.caiqilin.com/user/login">切换回旧版</a></li>
                                
                    <li class="left"><a href="/index">首页</a></li>
                    <li class="left"><a href="/about/us">关于我们</a></li>
                
                                    <li class="left"><a class="active" href="/about/more">了解更多</a></li>
                 
                
                                    <li class="left login-nav"><a  href="/user/login">登录</a></li>
                    <li class="left register-nav"><a  href="/user/register">注册</a></li>
                            </ul>
        </div>
    </div>
	
    <?php echo '<script'; ?>
>
        window.AESKey = '';
        // 判断浏览器是否支持placeholder属性
        function isSupportPlaceholder() {
            var input = document.createElement('input');
            return 'placeholder' in input;
        };
        (function() {
            //判断是否是IE浏览器，包括Edge浏览器
            function IEVersion() {
                //取得浏览器的userAgent字符串
                var userAgent = navigator.userAgent;
                //判断是否IE浏览器
                var isIE = userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1;
                if (isIE) {
                    var reIE = new RegExp("MSIE (\\d+\\.\\d+);");
                    reIE.test(userAgent);
                    var fIEVersion = parseFloat(RegExp["$1"]);
                    if (fIEVersion < 10 || !isSupportPlaceholder()) {
                        return true;
                    }
                } else {
                    return false;
                }
            }
            var tpl = [
                '<div class="browser-tips" style="margin:0 auto;text-align: center;">',
                '<img style="display: inline-block;margin:100px 0 20px 0;" src="../assets/img/common/error.png">',
                '<p style="font-size: 20px;color:#000;line-height: 32px;">为了给您提供更优质的网页浏览体验，建议使用IE10及以上版本的浏览器</p>',
                '<p style="font-size: 20px;color:#000;line-height: 32px;">对“彩麒麟”进行访问，请升级或更换其他浏览器</p>',
                '</div>'
            ].join('');

            window.onload = function() {
                if (IEVersion()) {
                    document.write(tpl);
                }
            };
            window.siteName = "彩麒麟";
        })();
    <?php echo '</script'; ?>
>
 <link rel="stylesheet" type="text/css" href="/assets/css/help/noticeDes.css?v=201802121503" />
<style>
    .fixed-cs {
        box-shadow: none;
    }
    
    .nav-bar {
        width: 100%;
        height: 46px;
        line-height: 46px;
        border-top: 1px solid #ededed;
        background-color: #fff;
        box-shadow: 0 3px 6px #ccc;
    }
    
    .bar-wrap {
        width: 1200px;
        margin: 0 auto;
    }
    
    .bar-wrap a {
        color: #424242;
        display: inline-block;
        margin-right: 60px;
        font-size: 14px;
    }
    
    .bar-wrap a.active {
        color: #96b2d5;
    }
</style>

<div class="nav-bar">
    <div class="bar-wrap">
                    <a href="/about?id=1"  <?php if ($_smarty_tpl->tpl_vars['data']->value['id'] == 1) {?>class="active"<?php }?>>基本信息</a>
                    <a href="/about?id=2"  <?php if ($_smarty_tpl->tpl_vars['data']->value['id'] == 2) {?>class="active"<?php }?>>安全保障</a>
                    <a href="/about?id=3"  <?php if ($_smarty_tpl->tpl_vars['data']->value['id'] == 3) {?>class="active"<?php }?>>运营报告</a>
					<a href="/about?id=8"  <?php if ($_smarty_tpl->tpl_vars['data']->value['id'] == 8) {?>class="active"<?php }?>>风险管理</a>
					<a href="/about?id=9"  <?php if ($_smarty_tpl->tpl_vars['data']->value['id'] == 9) {?>class="active"<?php }?>>监管制度</a>
                    <a href="/about?id=4"  <?php if ($_smarty_tpl->tpl_vars['data']->value['id'] == 4) {?>class="active"<?php }?>>帮助中心</a>
                    <a href="/about?id=5"  <?php if ($_smarty_tpl->tpl_vars['data']->value['id'] == 5) {?>class="active"<?php }?>>活动信息</a>
                    <a href="/about?id=6"  <?php if ($_smarty_tpl->tpl_vars['data']->value['id'] == 6) {?>class="active"<?php }?>>联系我们</a>
                    <a href="/about?id=7"  <?php if ($_smarty_tpl->tpl_vars['data']->value['id'] == 7) {?>class="active"<?php }?>>招贤纳士</a>
					<a href="/about?id=10"  <?php if ($_smarty_tpl->tpl_vars['data']->value['id'] == 10) {?>class="active"<?php }?>>信披声明</a>
            </div>
</div>
<div class="wrap" style="min-height:500px;">
<!--顶部--><?php }
}
