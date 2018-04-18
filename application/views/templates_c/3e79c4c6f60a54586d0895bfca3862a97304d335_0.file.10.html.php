<?php
/* Smarty version 3.1.30-dev/79, created on 2018-03-27 18:41:23
  from "/home/www/test/application/views/templates/about/10.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/79',
  'unifunc' => 'content_5aba1fd3aefd50_51194566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e79c4c6f60a54586d0895bfca3862a97304d335' => 
    array (
      0 => '/home/www/test/application/views/templates/about/10.html',
      1 => 1522058111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:about/header.html' => 1,
    'file:about/footer.html' => 1,
  ),
),false)) {
function content_5aba1fd3aefd50_51194566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:about/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<!--信息披露-->
	
	<style>
		.wrap div{padding:0;}
		.main {width: 100%;margin-top:30px;}
		.cql_rp_line {margin-left: 30px;margin-right: 30px;margin-top:25px;margin-bottom:25px;padding: 0;width: 1140px;height: 1px;font-size: 0;background: #d9d9d9;}
		.bigc {font-size: 24px;margin-top: 30px;margin-bottom: 25px;color:#252525;}
		.ctitle{color:#252525;}
		.main p {margin-left: 30px;}
		.pilu{margin-left:210px;}
		img{border:0;margin:0 auto;}
	</style>
	
	<div class="main">
		<div class="ctitle">
			<p><span class="bigc">信息披露 </span></p>
		</div>
		<div class="cql_rp_line"></div>
		<div class="pilu"><img width="785px" src="http://bzp2p-caiqilin.b0.upaiyun.com/cql_custom_coinfo/pilu.png"></div>
	</div>
	<div style="width:100%;height:80px;">&nbsp;</div>
<!--信息披露--> 
<?php $_smarty_tpl->_subTemplateRender("file:about/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
