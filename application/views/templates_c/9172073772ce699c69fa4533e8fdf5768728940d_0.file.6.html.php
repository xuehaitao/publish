<?php
/* Smarty version 3.1.30-dev/79, created on 2018-04-02 16:15:30
  from "/home/www/test/application/views/templates/h5/6.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/79',
  'unifunc' => 'content_5ac1e6a23851a9_01823436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9172073772ce699c69fa4533e8fdf5768728940d' => 
    array (
      0 => '/home/www/test/application/views/templates/h5/6.html',
      1 => 1522656928,
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
function content_5ac1e6a23851a9_01823436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:h5/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <link rel="stylesheet" href="assets/css/h5/disclosure.css?v=<?php echo $_smarty_tpl->tpl_vars['data']->value['vtime'];?>
">
        <div id="wrap" class="wrap">
            <?php $_smarty_tpl->_subTemplateRender("file:h5/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="title"></div>
            <div class="content">
                <img src="/assets/img/h5/6_2.png" />
            </div>
        </div>
<?php $_smarty_tpl->_subTemplateRender("file:h5/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
