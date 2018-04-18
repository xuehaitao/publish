<?php
/* Smarty version 3.1.30-dev/79, created on 2018-04-09 11:39:01
  from "/home/www/test/application/views/templates/h5/1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/79',
  'unifunc' => 'content_5acae055947765_24744681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '288f0827330f6e36e92f98688bd773639f19bc84' => 
    array (
      0 => '/home/www/test/application/views/templates/h5/1.html',
      1 => 1523245138,
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
function content_5acae055947765_24744681 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:h5/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <link rel="stylesheet" href="assets/css/h5/info.css?v=<?php echo $_smarty_tpl->tpl_vars['data']->value['vtime'];?>
">
        <div id="wrap" class="wrap">
            <?php $_smarty_tpl->_subTemplateRender("file:h5/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div id="info_tab1" class="info_tab1">
                <div class="top_logo"></div>
                <div class="info_tab_one">
                    <div class="title_1"></div>
                    <div class="content_1">
                        <p>
                            “彩麒麟”，上线于2015年4月，系京赢科技集团旗下线上网络借贷信息中介服务平台，由北京市朝阳区国有资本经营管理中心发起并成立，北京彩麒麟互联网服务有限公司运营。<br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;彩麒麟平台致力于为用户提供专业的线上信贷及投资撮合服务，专注于运用互联网技术手段和专业风控实力打通金融服务中存在的痛点，在提高金融服务质量和效率的同时，降低服务成本，为个人、企业提供简单、高效的金融解决方案，践行普惠金融。<br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;核心理念：安全稳健、放心投资<br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;平台风格：稳健、开放、公平<br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;运营原则：规范、专业、透明、真实<br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;企业愿景：致力于打造以财富管理、投资管理、互联网金融三位一体的投融资链条和综合性金融服务体系，成为金融市场的引领者。
                        </p>
                    </div>
                </div>
            </div>
            <div id="info_tab2" class="info_tab2">
                <div class="info_tab_two">
                    <div class="title_2"></div>
                    <div class="content_2">
                        <div class="c_left">
                            <div class="zhizhao" onClick="new Function(zhizhao.innerHTML)();"></div>
                            <div class="zhizhao_txt">营业执照，组织机构代码证，税务登<br>记证，社会保险登记证，统计<br>登记证（五证合一）</div>
                        </div>
                        <div class="c_right">
                            <div class="cert" onClick="new Function(cert.innerHTML)();"></div>
                            <div class="cert_txt">开户许可证</div>
                        </div>
                        <span id="zhizhao" style="display:none;">
                            layer.open({content:'<div class="zzmask"></div><div class="close" onclick="layer.closeAll();"></div><div class="zzmask_t">营业执照，组织机构代码证，税务登记证，社会保险登记证，<br>统计登记证（五证合一）</div>', style:'background-color:transparent;color:#fff;border:none;', time: 0, shadeClose:false});
                        </span>
                        <span id="cert" style="display:none;">
                            layer.open({content:'<div class="cermask"></div><div class="close" onclick="layer.closeAll();"></div><div class="cermask_t">开户许可证</div>', style:'background-color:transparent;color:#fff;border:none;', time: 0, shadeClose:false});
                        </span>
                    </div>
                </div>
            </div>
            <div id="info_tab3" class="info_tab3">
                <div class="info_tab_three">
                    <div class="title_3"></div>
                    <div class="content_3">
                        <ul class="content_3_table">
                            <li class="content_3_table_cell cl 1">公司全称</li><li class="content_3_table_cell cr"><p>北京彩麒麟互联网服务有限公司</p></li>
                            <li class="content_3_table_cell cl 2">公司简称</li><li class="content_3_table_cell cr"><p>彩麒麟</p></li>
                            <li class="content_3_table_cell cl 3">统一信用代码</li><li class="content_3_table_cell cr"><p>91110105MA008PNU0U</p></li>
                            <li class="content_3_table_cell cl 4">注册资本</li><li class="content_3_table_cell cr"><p>5,000万元</p></li>
                            <li class="content_3_table_cell cl 5">实缴注册资本</li><li class="content_3_table_cell cr"><p>5,000万元</p></li>
                            <li class="content_3_table_cell cl 6">注册地址</li><li class="content_3_table_cell cr"><p>北京市朝阳区望京西路48号院<br>7号楼26层2603</p></li>
                            <li class="content_3_table_cell cl 7">经营地址</li><li class="content_3_table_cell cr"><p>北京市朝阳区望京西路48号院<br>7号楼26层2603</p></li>
                            <li class="content_3_table_cell cl 8">成立时间</li><li class="content_3_table_cell cr"><p>2016年10月11日</p></li>
                            <li class="content_3_table_cell cl 9">经营期限</li><li class="content_3_table_cell cr"><p>2046年10月10日</p></li>
                            <li class="content_3_table_cell cl 10">经营状态</li><li class="content_3_table_cell cr"><p>开业</p></li>
                            <li class="content_3_table_cell cl 11">法定代表人</li><li class="content_3_table_cell cr"><p>陈立</p></li>
                            <li class="content_3_table_cell cl 12">管理团队</li><li class="content_3_table_cell cr"><p>董事：陈立 ; 监事：蔡艳雯 ;<br>财务负责人：张荣家 ;<br>风控负责人：林文斐 ;<br>技术负责人：薛海涛 ;</p></li>
                            <li class="content_3_table_cell cl 13">经营范围</li><li class="content_3_table_cell cr"><p>互联网信息服务；技术推广服务；数据处理（数<br>据处理中的银行卡中心、PUE值在1.5以上的云计<br>算数据处理中心除外）；计算机系统服务；销售<br>计算机、软件及辅助设备；软件开发；基础软件<br>服务；应用软件服务（不含医用软件）；经济贸<br>易咨询；企业管理咨询。（企业依法自主选择经<br>营项目，开展经营活动；互联网信息服务以及依<br>法须经批准的项目，经相关部门批准后依批准的<br>内容开展经营活动；不得从事本市产业政策禁止<br>和限制类项目的经营活动。）</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="info_tab4" class="info_tab4">
                <div class="info_tab_four">
                    <div class="title_4"></div>
                    <div class="content_4"></div>
                </div>
            </div>
            <div id="info_tab5" class="info_tab5">
                <div class="info_tab_five">
                    <div class="title_5"></div>
                    <div class="content_5">
                        <div class="content_5_tab">
                            <div class="tab_5_tab active"><div class="trangle active"></div><a href="#tab5_1">
                            <p>北京市朝阳区国有资本<br>经营管理中心</p></a></div><div class="tab_5_tab"><div class="trangle"></div><a href="#tab5_2">
                            <p>中环国投环保集团<br>有限公司</p></a></div><div class="tab_5_tab"><div class="trangle"></div><a href="#tab5_3">
                            <p>北京冠天下商贸<br>有限责任公司</p></a></div>
                            <div id="tab5_1" class="tab_5_tab_content">
                                <p>
                                    <span>北京市朝阳区国有资本经营管理中心：</span>成立于2009年，注册资本金100亿元，是朝阳区国资委直属的全民所有制企业，定位为区属国有资本投融资平台。<br>国资中心致力于打造服务区域发展和社会公共项目建设的融资平台、推动关键产业发展的产业投资平台、支持新项目新企业的创业投资平台和加快国有经济优化调整的国有资产管理平台，通过专业化和市场化的运作，充分发挥国有资本的作用和影响力，不断提升企业规模和效益，促进区域经济发展。
                                </p>
                            </div>
                            <div id="tab5_2" class="tab_5_tab_content" style="display:none;">
                                <p>
                                    <span>中环国投环保集团有限公司：</span>中环国投控股有限公司的子公司，注册资本金5100万元，专注于环保行业信息化的咨询、设计、开发和实施服务的高科技软件企业。<br>公司总部位于北京中环国投大厦，在北京上地科技园和烟台两地建有研发基地，在广州、济南、南宁和南昌等地建有本地化实施服务团队。公司的宗旨是以科技为本，铸诚信之根，促环境发展，创绿色家园。
                                </p>
                            </div>
                            <div id="tab5_3" class="tab_5_tab_content" style="display:none;">
                                <p>
                                    <span>北京冠天下商贸有限责任公司：</span>成立于1981年，注册资本金4000万元，职工人数1000人以上。<br>公司尊崇“踏实、拼搏、责任”的企业精神，并以诚信、共赢、开创经营理念，创造良好的企业环境，以全新的管理模式，完善的技术，周到的服务，卓越的品质为生存根本，始终坚持用户至上、用心服务于客户，坚持用自己的服务去打动客户。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="info_tab6" class="info_tab6">
                <div class="info_tab_six">
                    <div class="title_6"></div>
                    <div class="content_6"></div>
                </div>
            </div>
            <div id="info_tab7" class="info_tab7">
                <div class="info_tab_seven">
                    <div class="title_7"></div>
                    <div class="content_7">
                        <ul class="content_7_table">
                            <li class="content_7_table_cell cl 1">彩麒麟从业人员信息</li>
                            <li class="content_7_table_cell cl 2">员工人数</li><li class="content_7_table_cell cr"><p>26人</p></li>
                            <li class="content_7_table_cell cl 3">男女比例</li><li class="content_7_table_cell cr"><p>1:1</p></li>
                            <li class="content_7_table_cell cl 4">正式员工人数</li><li class="content_7_table_cell cr"><p>26人</p></li>
                            <li class="content_7_table_cell cl 5"><p>本科及以上<br>学历人数</p></li><li class="content_7_table_cell cr"><p>17人</p></li>
                            <li class="content_7_table_cell cl 6">学历分布</li><li class="content_7_table_cell cr"><p>大专以下：1人<br>大专：8人<br>本科：14人<br>研究生：3人</p></li>
                            <li class="content_7_table_cell cl 7">年龄分布</li><li class="content_7_table_cell cr"><p>25岁及以下：4人<br>26-30岁：7人<br>31-35岁：3人<br>35岁以上：12人</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="info_tab8" class="info_tab8">
                <div class="info_tab_eight">
                    <div class="title_8"></div>
                    <div class="content_8">
                        <p>官方网站：www.caiqilin.com</p>
                        <p>手机应用：彩麒麟</p>
                    </div>
                </div>
            </div>
            <div id="info_tab9" class="info_tab9">
                <div class="info_tab_nine">
                    <div class="title_9"></div>
                    <div class="content_9">
                        <p>重点环节审计结果:  -</p>
                        <p>合规性审查报告:  -</p>
                        <p>重大风险信息:  -</p>
                        <p>公司减资、合并、分立、解散或申请破产:  无；</p>
                        <p>公司依法进入破产程序:  无；</p>
                        <p>公司被责令停业、整顿、关闭:  无；</p>
                        <p>公司涉及重大诉讼、仲裁，或涉嫌违法违规被有权机关调查，或受到刑事处罚、重大行政处罚:  无；</p>
                        <p>公司法定代表人、实际控制人、主要负责人、董事、监事、高级管理人员涉及重大诉讼、仲裁，或涉嫌违法违纪被有权机关调查，或受到刑事处罚、重大行政处罚，或被采取强制措施:  无；</p>
                        <p>公司主要或者全部业务陷入停顿:  无；</p>
                        <p>存在欺诈、损害出借人利益等其他影响网贷机构经营活动的重大事项:  无；</p>
                    </div>
                </div>
            </div>
            <div id="info_tab10" class="info_tab10">
                <div class="info_tab_ten">
                    <div class="title_10"></div>
                    <div class="content_10">
                        <p>累计借贷金额:<span><?php echo $_smarty_tpl->tpl_vars['data']->value['operate_data']['loan_total'];?>
 元</span></p>
                        <p>累计借贷笔数:<span><?php echo $_smarty_tpl->tpl_vars['data']->value['operate_data']['loan_nums'];?>
 笔</span></p>
                        <p>借贷余额:<span><?php echo $_smarty_tpl->tpl_vars['data']->value['operate_data']['loan_surplus'];?>
 元</span></p>
                        <p>借贷余额笔数:<span><?php echo $_smarty_tpl->tpl_vars['data']->value['operate_data']['loan_surplus_nums'];?>
 笔</span></p>
                        <p>累计出借人数量:<span><?php echo $_smarty_tpl->tpl_vars['data']->value['operate_data']['investor_nums'];?>
 人</span></p>
                        <p>累计借款人数量:<span><?php echo $_smarty_tpl->tpl_vars['data']->value['operate_data']['borrower_nums'];?>
 人</span></p>
                        <p>当期出借人数量:<span><?php echo $_smarty_tpl->tpl_vars['data']->value['operate_data']['current_investor_nums'];?>
 人</span></p>
                        <p>当期借款人数量:<span><?php echo $_smarty_tpl->tpl_vars['data']->value['operate_data']['current_borrower_nums'];?>
 人</span></p>
                        <p>前十大借款人待还金额占比:<span><?php echo $_smarty_tpl->tpl_vars['data']->value['operate_data']['top10_borrower_returned_rate'];?>
 %</span></p>
                        <p>最大单一借款人待还金额占比:<span><?php echo $_smarty_tpl->tpl_vars['data']->value['operate_data']['top1_borrower_returned_rate'];?>
 %</span></p>
                        <p>关联关系借款余额:<span><?php echo $_smarty_tpl->tpl_vars['data']->value['operate_data']['relationship_loan_surplus'];?>
</span></p>
                        <p>关联关系借款余额笔数:<span><?php echo $_smarty_tpl->tpl_vars['data']->value['operate_data']['relationship_loan_surplus_nums'];?>
</span></p>
                        <p>逾期金额及笔数:<span><?php echo $_smarty_tpl->tpl_vars['data']->value['operate_data']['overdue_amount_nums'];?>
</span></p>
                        <p>逾期90天（不含）以上金额:<span><?php echo $_smarty_tpl->tpl_vars['data']->value['operate_data']['overdue_90days_amount'];?>
</span></p>
                        <p>逾期90天（不含）以上笔数:<span><?php echo $_smarty_tpl->tpl_vars['data']->value['operate_data']['overdue_90days_nums'];?>
</span></p>
                        <p>累计代偿金额及笔数:<span><?php echo $_smarty_tpl->tpl_vars['data']->value['operate_data']['compensatory_amount_nums'];?>
</span></p>
                    </div>
                    <div class="content_10_bottom">
                        <ul id="content_10_line">
                            <li class="left"></li>
                            <li class="right"><span>&nbsp;&nbsp;数据截至<?php echo $_smarty_tpl->tpl_vars['data']->value['operate_data']['closing_date'];?>
&nbsp;&nbsp;</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="info_tab11" class="info_tab11">
                <div class="info_tab_eleven">
                    <div class="title_11"></div>
                    <div class="content_11">
                        <p>借款人：按借款人平台服务协议收取平台服务费</p>
                        <p>投资人：每月4次免费提现，从第5次提现开始每笔2元的手续费</p>
                    </div>
                </div>
            </div>
            <div id="info_tab12" class="info_tab12">
                <div class="info_tab_twelve">
                    <div class="title_12"></div>
                    <div class="content_12">
                        <p>网贷机构备案信息:</p>
                        <p>金融监管部门：-</p>
                        <p>备案公示时间：-</p>
                        <p>备案登记编号：-</p>
                    </div>
                </div>
            </div>
            <div id="info_tab13" class="info_tab13">
                <div class="info_tab_thirteen">
                    <div class="title_13"></div>
                    <div class="content_13">
                        <p>电信业务经营许可证办理信息：-</p>
                    </div>
                </div>
            </div>
            <div id="info_tab14" class="info_tab14">
                <div class="info_tab_fourteen">
                    <div class="title_14"></div>
                    <div class="content_14">
                        <p>存管银行名称：海口联合农商银行</p>
                        <p>三方存管协议：海口联合农商行存管协议-扫描件：点击查阅</p>
                        <p>海口联合农商行存管协议-补充协议-扫描件：点击查阅</p>
                        <p>资金存管上线时间：2017-11-23</p>
                        <p>公安机关核发的网站备案图标及编号：-</p>
                    </div>
                </div>
            </div>
            <div id="info_tab15" class="info_tab15">
                <div class="info_tab_fifteen">
                    <div class="title_15"></div>
                    <div class="content_15">
                        <p>单位名称：北京彩麒麟互联网服务有限公司</p>
                        <p>备案许可证号：京ICP备17038878号-1</p>
                        <p>网站名称（域名）：彩麒麟—www.caiqilin.com</p>
                        <p>信息安全评测认证信息：-</p>
                    </div>
                </div>
            </div>
            <div id="info_tab16" class="info_tab16">
                <div class="info_tab_sixteen">
                    <div class="title_16"></div>
                    <div class="content_16">
                        <ul class="content_16_table">
                            <li class="content_16_table_cell"></li>
                            <li class="content_16_table_cell"></li>
                            <li class="content_16_table_cell"></li>
                            <li class="content_16_table_cell"></li>
                            <li class="content_16_table_cell"></li>
                            <li class="content_16_table_cell"></li>
                            <li class="content_16_table_cell"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <?php echo '<script'; ?>
>
            $(".tab_5_tab a").click(function() {
                $(".tab_5_tab").removeClass("active"); //Remove any "active" class
                $(".tab_5_tab_content").hide(); //Hide all tab content
                $(".trangle").removeClass("active");
                $(this).parent().addClass("active"); //Add "active" class to selected tab
                var activeTab = $(this).attr("href"); //Find the rel attribute value to identify the active tab + content
                $(activeTab).fadeIn(); //Fade in the active content
                $(this).prev().addClass("active");
                if($(this).parent().index()===0){$(this).parent().next().next().css("border-left","1px solid #d9d9d9");$(this).parent().next().css("border-right","none");$(this).parent().css("border-right","1px solid #e84141");}
                if($(this).parent().index()===1){$(this).parent().next().css("border-left","none");$(this).parent().prev().css("border-right","none");$(this).parent().css("border-right","1px solid #e84141");}
                if($(this).parent().index()===2){$(this).parent().prev().prev().css("border-right","1px solid #d9d9d9");$(this).parent().prev().css("border-right","none");$(this).parent().css("border-left","1px solid #e84141");}
                return false;
            });        
        <?php echo '</script'; ?>
>
        
<?php $_smarty_tpl->_subTemplateRender("file:h5/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
