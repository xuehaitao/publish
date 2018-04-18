<?php
/* Smarty version 3.1.30-dev/79, created on 2018-04-02 16:06:04
  from "/home/www/test/application/views/templates/h5/7.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/79',
  'unifunc' => 'content_5ac1e46c99e718_61858738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faf1bc5880206b06dbbf71bf9c6de0fb2a2040a7' => 
    array (
      0 => '/home/www/test/application/views/templates/h5/7.html',
      1 => 1522656308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:h5/header.html' => 1,
    'file:h5/nav.html' => 1,
    'file:h5/footer.html' => 1,
  ),
),false)) {
function content_5ac1e46c99e718_61858738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:h5/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <link rel="stylesheet" href="assets/css/h5/contact.css?v=<?php echo $_smarty_tpl->tpl_vars['data']->value['vtime'];?>
">
        <div id="wrap" class="wrap">
            <?php $_smarty_tpl->_subTemplateRender("file:h5/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="title_1"></div>
            <div class="content">
                <p>地址：北京市朝阳区望京西路48号金隅国际A座26层</p>
                <p>邮编：100102</p>
                <p>官方网址：www.caiqilin.com</p>
                <p>官方订阅号：caiqilin-com</p>
                <p>官方微博：@彩麒麟官方微博</p>
            </div>
            <div class="title_2"></div>
            <div class="content">
                <p>客服电话：4008-95-2015（工作时间： 9:00-17:00）</p>
                <p>投诉电话：4008-95-2015转2</p>
                <p>客服咨询、投诉及举报邮箱：service@caiqilin.com</p>
                <p>如果您在使用过程中有任何疑问请您通过客服电话或网站在线客服与我们联系。</p>
            </div>
            <div class="title_3"></div>
            <div class="content">
                <p>媒体采访：</p>
                <p>如果有媒体采访需求，请将您的媒体名称、采访提纲、联系方式发至：marketing@caiqilin.com，我们会尽快与您联系。</p>
                <p>商务合作：</p>
                <p>如果贵公司希望与我们建立商务合作关系，请将合作意向进行简要描述并发送邮件至：marketing@caiqilin.com，我们会尽快与您联系。</p>
                <p></p>
                <p>微信公众平台：caiqilin-com（扫描下方二维码关注小麒麟订阅号）</p>
                <p><img src="/assets/img/h5/7_4.png" /></p>
            </div>
        </div>
<?php $_smarty_tpl->_subTemplateRender("file:h5/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
