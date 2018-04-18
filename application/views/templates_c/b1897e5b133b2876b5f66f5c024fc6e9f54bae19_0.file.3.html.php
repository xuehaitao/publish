<?php
/* Smarty version 3.1.30-dev/79, created on 2018-04-12 17:49:15
  from "/home/www/test/application/views/templates/h5/3.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/79',
  'unifunc' => 'content_5acf2b9b55f806_07215921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1897e5b133b2876b5f66f5c024fc6e9f54bae19' => 
    array (
      0 => '/home/www/test/application/views/templates/h5/3.html',
      1 => 1523526542,
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
function content_5acf2b9b55f806_07215921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:h5/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        
        <?php echo '<script'; ?>
 type="text/javascript">
			$(document).ready(function() {
				$(".tab_content").hide();
				$(".tag:first").addClass("active");
				$(".circle:first").addClass("active");
				$(".tab_content:first").show();
				$(".tag").click(function() {
					$(".tag").removeClass("active");
					$(".circle").removeClass("active");
					var index = $(".tag").index(this);
					var activeCircle = $(".circle").eq(index);
					var activeArrow = $(".arrow").eq(index);
					$(this).addClass("active");
					$(activeCircle).addClass("active");
					$(".arrow").hide();
					$(activeArrow).show();
					$(".tab_content").hide();
					var activeTab = $(this).find("a").attr("href");
					$(activeTab).fadeIn();
					return false;
				});
				$(".tab_content_c").hide();
				$(".tag_c:first").addClass("active");
				$(".tab_content_c:first").show();
				$(".circle_c:first").addClass("active");
				//On Click Event
				$(".tag_c").click(function() {
					$(".tag_c").removeClass("active");
					$(".circle_c").removeClass("active");
					var index = $(".tag_c").index(this);
					var activeCircle = $(".circle_c").eq(index);
					var activeArrow = $(".arrow_c").eq(index);
					$(this).addClass("active");
					$(activeCircle).addClass("active");
					$(".arrow_c").hide();
					$(activeArrow).show();
					$(".tab_content_c").hide();
					var activeTab = $(this).find("a").attr("href");
					$(activeTab).fadeIn();
					return false;
				});
			});
		<?php echo '</script'; ?>
>
        
        <link rel="stylesheet" href="assets/css/h5/report.css?v=<?php echo $_smarty_tpl->tpl_vars['data']->value['vtime'];?>
">
        <div id="wrap" class="wrap">
            <?php $_smarty_tpl->_subTemplateRender("file:h5/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="title1"></div>
            <div class="container">
                <div class="nav_container">
                    <div class="tag">2017年<a href="#tab1"></a></div>
                    <div class="tag" style="margin-left:0.55rem;">2016年<a href="#tab2"></a></div>
                    <div class="nav_bottom">
                        <div class="line1"></div>
                        <div class="circle one"></div>
                        <div class="line2"></div>
                        <div class="circle two"></div>
                        <div class="line3"></div>
                    </div>
                </div>
                <div class="tab_container">
					<div id="tab1" class="tab_content" style="display: block; ">
						<ul>
							<li>
								<a href="https://d.eqxiu.com/s/qzEugomz"><b><img src="/assets/img/h5/3_2.png" /></b>
									<div class="report_foot">
										<div class="report_name">彩麒麟2017年度运营报告</div>
										<div class="report_btn">立即查看 >></div>
									</div>
								</a>
							</li>
							<li>
								<a href="https://c.eqxiu.com/s/ZiRPQe0i"><b><img src="/assets/img/h5/3_3.png" /></b>
									<div class="report_foot">
										<div class="report_name">&nbsp;&nbsp;&nbsp;彩麒麟2017第三季度运营报告</div>
										<div class="report_btn">立即查看 >></div>
									</div>
								</a>
							</li>
							<li>
								<a href="https://x.eqxiu.com/s/BsIMz0xd"><b><img src="/assets/img/h5/3_4.png" /></b>
									<div class="report_foot">
										<div class="report_name">彩麒麟2017半年度运营报告</div>
										<div class="report_btn">立即查看 >></div>
									</div>
								</a>
							</li>
							<li>
								<a href="https://h.eqxiu.com/s/Aoq5H4Ef"><b><img src="/assets/img/h5/3_5.png" /></b>
									<div class="report_foot">
										<div class="report_name">&nbsp;&nbsp;&nbsp;彩麒麟2017第一季度运营报告</div>
										<div class="report_btn">立即查看 >></div>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div id="tab2" class="tab_content" style="display: block; ">
						<ul>
							<li>
								<a href="http://www.epub360.cn/v2/manage/book/3hrawo/"><b><img src="/assets/img/h5/3_6.png" /></b>
									<div class="report_foot">
										<div class="report_name">彩麒麟2016年度运营报告</div>
										<div class="report_btn">立即查看 >></div>
									</div>
								</a>
							</li>
							<li>
								<a href="http://ftlgyj.epub360.cn/v2/manage/book/hbm1nn/" ><b><img src="/assets/img/h5/3_7.png" /></b>
								<div class="report_foot">
										<div class="report_name">&nbsp;&nbsp;&nbsp;彩麒麟2016第三季度运营报告</div>
										<div class="report_btn">立即查看 >></div>
									</div>
								</a>
							</li>
							<li>
								<a href="http://ftlgyj.epub360.com/v2/manage/book/o3mmzv/?from=singlemessage&isappinstalled=0"><b><img src="/assets/img/h5/3_8.png" /></b>
									<div class="report_foot">
										<div class="report_name">彩麒麟2016半年度运营报告</div>
										<div class="report_btn">立即查看 >></div>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
            </div>
            <div class="title2"></div>
            <div class="container_c">
                <div class="nav_container_c">
                    <div class="tag_c">2017年<a href="#tab1_c"></a></div>
                    <div class="tag_c" style="margin-left:0.55rem;">2016年<a href="#tab2_c"></a></div>
                    <div class="nav_bottom_c">
                        <div class="line1"></div>
                        <div class="circle_c one"></div>
                        <div class="line2"></div>
                        <div class="circle_c two"></div>
                        <div class="line3"></div>
                    </div>
                </div>
                <div class="tab_container_c">
					<div id="tab1_c" class="tab_content_c" style="display: block; ">
						<ul>
							<li>
								<a href="http://v7.rabbitpre.com/m/jAb2M3y"><b><img src="/assets/img/h5/3_9.png" /></b>
									<div class="report_foot">
										<div class="report_name">彩麒麟2017年度财务报告</div>
										<div class="report_btn">立即查看 >></div>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div id="tab2_c" class="tab_content_c" style="display: block; ">
						<ul>
							<li>
								<a href="https://h.eqxiu.com/s/i9PBbXI0"><b><img src="/assets/img/h5/3_9.png" /></b>
									<div class="report_foot">
										<div class="report_name">彩麒麟2016年度财务报告</div>
										<div class="report_btn">立即查看 >></div>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
            </div>
        </div>
<?php $_smarty_tpl->_subTemplateRender("file:h5/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
