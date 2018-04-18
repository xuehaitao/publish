<?php
/* Smarty version 3.1.30-dev/79, created on 2018-04-12 11:02:37
  from "/home/www/test/application/views/templates/h5/nav.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/79',
  'unifunc' => 'content_5acecc4d969504_94725192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc5705533d903d66a36390e5f813a0455abc3b4e' => 
    array (
      0 => '/home/www/test/application/views/templates/h5/nav.html',
      1 => 1523502139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acecc4d969504_94725192 (Smarty_Internal_Template $_smarty_tpl) {
?>
            
            <?php echo '<script'; ?>
>
                /*nav stay top*//*
                window.onscroll = function(){
                    var ht=document.documentElement.scrollTop || document.body.scrollTop;
                    if(ht>0){
                        $(".top-nav").css({"position":"fixed","top":"0px","margin":"auto"});
                    }else{
                        $(".top-nav").css({"position":"relative"});
                    }
                }*/
                $(".nav-list").click(function(){$(".nav-list").removeClass;$(this).addClass("active");});
                
                $(document).ready(function(){
                    if($(".nav-list.active").index()==4){$(".nav-head").scrollLeft(380);};
                    if($(".nav-list.active").index()==5){$(".nav-head").scrollLeft(560);};
                    if($(".nav-list.active").index()==6){$(".nav-head").scrollLeft(740);};
                });
            <?php echo '</script'; ?>
>
            
            <div class="top-nav">
                <ul class="nav-layout nav-head" id="nav-head">
                    <li class="nav-list<?php echo $_smarty_tpl->tpl_vars['data']->value['navstatus1'];?>
"><a href="?id=1">基本信息</a><div class="line"></div></li>
                    <li class="nav-list<?php echo $_smarty_tpl->tpl_vars['data']->value['navstatus2'];?>
"><a href="?id=2">安全保障</a><div class="line"></div></li>
                    <li class="nav-list<?php echo $_smarty_tpl->tpl_vars['data']->value['navstatus3'];?>
"><a href="?id=3">运营报告</a><div class="line"></div></li>
                    <li class="nav-list<?php echo $_smarty_tpl->tpl_vars['data']->value['navstatus4'];?>
"><a href="?id=4">风险管理</a><div class="line"></div></li>
                    <li class="nav-list<?php echo $_smarty_tpl->tpl_vars['data']->value['navstatus5'];?>
"><a href="?id=5">监管制度</a><div class="line"></div></li>
                    <li class="nav-list<?php echo $_smarty_tpl->tpl_vars['data']->value['navstatus6'];?>
"><a href="?id=6">信披声明</a><div class="line"></div></li>
                    <li class="nav-list<?php echo $_smarty_tpl->tpl_vars['data']->value['navstatus7'];?>
"><a href="?id=7">联系我们</a><div class="line"></div></li>
                </ul>
            </div>
            <div class="top_blank"></div><?php }
}
