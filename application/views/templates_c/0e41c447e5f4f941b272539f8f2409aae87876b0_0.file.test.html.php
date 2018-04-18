<?php
/* Smarty version 3.1.30-dev/79, created on 2018-03-28 18:35:12
  from "/home/www/test/application/views/templates/h5/test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/79',
  'unifunc' => 'content_5abb6fe012ab37_30010099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e41c447e5f4f941b272539f8f2409aae87876b0' => 
    array (
      0 => '/home/www/test/application/views/templates/h5/test.html',
      1 => 1522233310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abb6fe012ab37_30010099 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
     <title>萌宝出游换新物</title>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
     <meta name="format-detection" content="telephone=no" />
     <meta name="x5-cache" content="enable" />
     <link rel="shortcut icon" href="//m.360buyimg.com/babel/jfs/t8461/240/2334879892/1289/e6898611/59cc9a63N15b7a7b0.gif" type="image/gif" />
     <!-- 重构地址 -->
     <link rel="stylesheet" href="//storage.360buyimg.com/babel/00125082/266350/production/dev/parser.1522130618643.css?t=20180327140350"/>
     <!-- /重构地址 -->
     <link rel="stylesheet" type="text/css" href="//st.360buyimg.com/common/commonH_B/css/header.css" charset="utf-8"/>
    
     <?php echo '<script'; ?>
>
        (function(){
            window._scaleBodyContent=function (c) {
                    var $basementModule = document.getElementById(c);
                    var initW = 375;
                    var winW = document.documentElement.clientWidth || window.innerWidth;
                    var scale = parseFloat(winW / initW);
                    if (scale != 1) {
                            var $bodyNodeArr = $basementModule.getElementsByClassName('basement_body');
                            var $item = $bodyNodeArr[0];

                            $item.style.transformOrigin='left top';
                            $item.style.webkitTransformOrigin='left top';
                            $item.style.transform = 'scale(' + scale + ')';
                            $item.style.webkitTransform = 'scale(' + scale + ')';

                            var obj = $item.getBoundingClientRect();
                            var $parentNode = $item.parentNode;
                            var headH = $parentNode.getAttribute('headh');
                            headH = parseInt(headH) || 0;
                            var mainH = Math.round(obj.height) + headH;
                            $parentNode.setAttribute('style', 'height: ' + mainH + 'px;');
                    }

            };
            //缩放自适应
            window._scaleElement = function(id) {
                var target = document.getElementById(id);
                var base = 375;
                var winW = document.documentElement.clientWidth || window.innerWidth;
                var scale = parseFloat(winW / base);
                if(scale == 1) return;
                target.style.transformOrigin='left top';
                target.style.webkitTransformOrigin='left top';
                target.style.transform = 'scale(' + scale + ')';
                target.style.webkitTransform = 'scale(' + scale + ')';
                var bcr = target.getBoundingClientRect();
                target.parentNode.setAttribute('style', 'height: ' + Math.round(bcr.height) + 'px');
            }
        }());
    <?php echo '</script'; ?>
>
    <style>
    .bab_opt_mod_later {
        display: none !important;
    }
    </style>
    
</head>

<body style="background-color:#fff;">
    <div id="J_babelOpt" class="bab_opt_con   " data-datahubname="dataHub1522211712646">
        <!-- S import m_header -->
        <div id="m_common_tip_no_float">
        </div>
        <div id="m_common_header" class="bab_opt_header" style="display: none;min-height:44px;">
            <div id="m_common_header_goback" class="jd-header-icon-back"><span></span></div>
            <div report-eventid="MCommonHead_NavigateButton" report-eventparam="" page_name="" id="m_common_header_jdkey" class="jd-header-icon-new-shortcut J_ping"><span></span></div>
        </div>
        <!-- E import m_header -->
        <div class="bab_opt_content">
            <div class="bab_opt_loading jdui_load hide">
                <span class="jdui_load_in"></span>
            </div>
            <div id="J_babelOptPage" class="bab_opt_page show">
            
                <div data-template="anchor_nav" data-pdId="" class="bab_opt_mod bab_opt_mod_1_0 anchor_nav" data-floorNum="1_0" style="height:50px;" data-moduleid="5330774">
                
                <?php echo '<script'; ?>
 id="nav_tpl" type="x-tpl-ejs">
                    <div class="anchor_navigation_module <?php echo '<%'; ?>
= obj.styleCls <?php echo '%>'; ?>
 <?php echo '<%'; ?>
= obj.tabBetterStyle.tabNewCls <?php echo '%>'; ?>
">
                    <div class="anchor_navigation_wrap">
                    <div class="anchor_tab">
                    <div class="anchor_tab_scroller" data-pos="0">
                    <ul style="opacity:0;">
                        <?php echo '<%'; ?>
 if(obj.tabBetterStyle.tabPicStyle){ <?php echo '%>'; ?>

                            <?php echo '<%'; ?>
obj.anchorList.forEach(function(anchor){<?php echo '%>'; ?>

                                 <li data-srv="<?php echo '<%'; ?>
= anchor.jump.srv <?php echo '%>'; ?>
" data-floor="<?php echo '<%'; ?>
= anchor.jump.moduleId<?php echo '%>'; ?>
">
                                    <p class="item" >
                                        <img data-tabpicid="<?php echo '<%'; ?>
= anchor.jump.srv <?php echo '%>'; ?>
" data-tabw="<?php echo '<%'; ?>
= anchor.width <?php echo '%>'; ?>
" data-tabh="<?php echo '<%'; ?>
= anchor.height <?php echo '%>'; ?>
" data-tabsrc="<?php echo '<%'; ?>
= anchor.tabPic <?php echo '%>'; ?>
" src="//m.360buyimg.com/cms/jfs/t2218/111/2490744834/43/9acceab1/56d55ce6N5a567661.gif" />
                                        <span class="txt"><?php echo '<%'; ?>
= anchor.name <?php echo '%>'; ?>
</span>
                                    </p>
                                    <p class="cur">
                                        <img data-tabpicid="<?php echo '<%'; ?>
= anchor.jump.srv <?php echo '%>'; ?>
" data-tabw="<?php echo '<%'; ?>
= anchor.width <?php echo '%>'; ?>
" data-tabh="<?php echo '<%'; ?>
= anchor.height <?php echo '%>'; ?>
" data-tabsrc="<?php echo '<%'; ?>
= anchor.tabClickPic <?php echo '%>'; ?>
" src="//m.360buyimg.com/cms/jfs/t2218/111/2490744834/43/9acceab1/56d55ce6N5a567661.gif" />
                                        <span class="txt"><?php echo '<%'; ?>
= anchor.name <?php echo '%>'; ?>
</span>
                                    </p>
                                </li>
                            <?php echo '<%'; ?>
})<?php echo '%>'; ?>

                        <?php echo '<%'; ?>
}else{ <?php echo '%>'; ?>

                            <?php echo '<%'; ?>
obj.anchorList.forEach(function(anchor){<?php echo '%>'; ?>

                                <li data-srv="<?php echo '<%'; ?>
= anchor.jump.srv <?php echo '%>'; ?>
" data-floor="<?php echo '<%'; ?>
= anchor.jump.moduleId<?php echo '%>'; ?>
"><?php echo '<%'; ?>
= anchor.name <?php echo '%>'; ?>
</li>
                            <?php echo '<%'; ?>
})<?php echo '%>'; ?>

                        <?php echo '<%'; ?>
}<?php echo '%>'; ?>

                    </ul>
                    </div>
                    <span class="anchor_change">切换分类</span>
                    </div>
                    <div class="anchor_btn">
                       <span></span>
                    </div>
                    </div>
                    </div>
                <?php echo '</script'; ?>
>
                
                </div>
                
                <?php echo '<script'; ?>
>window._scaleBodyContent&&window._scaleBodyContent('m_1_14');<?php echo '</script'; ?>
>

         </div>
         
         <div class="bab_opt_footer hide"></div>
         </div>
         </div>
         <?php echo '<script'; ?>
 id="dataHub1522211712646">
            (function(){
                window.dataHub1522211712646={"head":{"searchButton":"1","opimgUrl":"","isRelateShop":"0","showShop":"0","shareImgType":"0","benefit":"萌宝出游季","backgroundColor":"#d5f6ff","calendarButton":"1","useDiscovery":"0","showCount":"0","nameType":"0","imgUrl":"","homeButton":"1","shareButton":"1","cartButton":"1","favShopButton":"0","showFlag":"0","msgCenterButton":"1","shopName":"","shopId":"","imgFileName":"","name":"萌宝出游换新物","shareInfo":{"sharingTitle":"萌宝出游换新物","sharingImgFile":"//m.360buyimg.com/babel/jfs/t15292/288/289478135/9223/f52d6b13/5a28eaa7Nab072e59.png","sharingIntro":"【萌宝出游换新物】满159减50 满299减100，更多满减商品都在折里！","sharingUrl":"https://3.cn/YaNkAF"},"showTitle":"1"},"1_0":{"template":"anchor_nav","ofn":"2","moduleId":5330774,"backgroundColor":"#d5f6ff","sameColor":"1","floorNum":"1_0","config":{"textColor":"#000000","srv":"00125516_5330774_0-0-2","jsonSrv":{"mid":"5330774","aid":"00125516","fno":"0-0-2"}},"anchorList":[{"height":"150","tabPic":"","width":"","name":"秒杀专区","tabClickPic":"","jump":{"des":"babelfloor","moduleId":"5282176","srv":"00125516_5330774_1_1_0-0-2_s0","params":{"floor":"6"},"jsonSrv":{"anno":"1","typ":"s0","mid":"5330774","aid":"00125516","fno":"0-0-2","anord":"1"}}},{"height":"150","tabPic":"","width":"","name":"必备清单","tabClickPic":"","jump":{"des":"babelfloor","moduleId":"5282369","srv":"00125516_5330774_2_2_0-0-2_s0","params":{"floor":"9"},"jsonSrv":{"anno":"2","typ":"s0","mid":"5330774","aid":"00125516","fno":"0-0-2","anord":"2"}}},{"height":"150","tabPic":"","width":"","name":"抽奖专区","tabClickPic":"","jump":{"des":"babelfloor","moduleId":"5287969","srv":"00125516_5330774_3_3_0-0-2_s0","params":{"floor":"21"},"jsonSrv":{"anno":"3","typ":"s0","mid":"5330774","aid":"00125516","fno":"0-0-2","anord":"3"}}},{"height":"150","tabPic":"","width":"","name":"大牌专区","tabClickPic":"","jump":{"des":"babelfloor","moduleId":"5283845","srv":"00125516_5330774_4_4_0-0-2_s0","params":{"floor":"22"},"jsonSrv":{"anno":"4","typ":"s0","mid":"5330774","aid":"00125516","fno":"0-0-2","anord":"4"}}},{"height":"150","tabPic":"","width":"","name":"出游必带","tabClickPic":"","jump":{"des":"babelfloor","moduleId":"5283849","srv":"00125516_5330774_5_5_0-0-2_s0","params":{"floor":"27"},"jsonSrv":{"anno":"5","typ":"s0","mid":"5330774","aid":"00125516","fno":"0-0-2","anord":"5"}}},{"height":"150","tabPic":"","width":"","name":"用品满减","tabClickPic":"","jump":{"des":"babelfloor","moduleId":"5283851","srv":"00125516_5330774_6_6_0-0-2_s0","params":{"floor":"29"},"jsonSrv":{"anno":"6","typ":"s0","mid":"5330774","aid":"00125516","fno":"0-0-2","anord":"6"}}},{"height":"150","tabPic":"","width":"","name":"车床满减","tabClickPic":"","jump":{"des":"babelfloor","moduleId":"5283853","srv":"00125516_5330774_7_7_0-0-2_s0","params":{"floor":"32"},"jsonSrv":{"anno":"7","typ":"s0","mid":"5330774","aid":"00125516","fno":"0-0-2","anord":"7"}}},{"height":"150","tabPic":"","width":"","name":"京选品牌","tabClickPic":"","jump":{"des":"babelfloor","moduleId":"5283855","srv":"00125516_5330774_8_8_0-0-2_s0","params":{"floor":"35"},"jsonSrv":{"anno":"8","typ":"s0","mid":"5330774","aid":"00125516","fno":"0-0-2","anord":"8"}}},{"height":"150","tabPic":"","width":"","name":"豪华礼盒","tabClickPic":"","jump":{"des":"babelfloor","moduleId":"5283857","srv":"00125516_5330774_9_9_0-0-2_s0","params":{"floor":"37"},"jsonSrv":{"anno":"9","typ":"s0","mid":"5330774","aid":"00125516","fno":"0-0-2","anord":"9"}}}],"tabStyle":"0","pageId":"287262","pageUrl":"http://pro.m.jd.com/mall/active/2D27PUL2XRBFWtb5WXhdHj4BoNDX/index.html?utm_source=pdappwakeupup_20170001","title":"萌宝出游换新物","activityId":"00125516","encodeActivityId":"2D27PUL2XRBFWtb5WXhdHj4BoNDX","useDiscovery":"0","inkTarget":"_self","cartLayer":true,"hasFoot":false,"transParam":"{\"bsessionId\":\"c4de6f6d-fd42-4dd5-9ee3-75e3d481f0b5\",\"babelChannel\":\"\",\"actId\":\"00125516\",\"enActId\":\"2D27PUL2XRBFWtb5WXhdHj4BoNDX\",\"pageId\":\"287262\"}","hasPerData":"0","biimpr":"00125516_287262_1#2e6e2346d8ecf98d67555c8589f8da806310063d-0-621037-3_1#d00909b453c4ec2b45bda18119f312177c0be458-0-621037-3","item":"0","cpChannelKey":"H5node","tabBetterStyle":{"tabNewCls":"","tabPicStyle":false},"originTabStyle":"0"}, "activityData": { "pageId": "287262", "pageUrl": "http://pro.m.jd.com/mall/active/2D27PUL2XRBFWtb5WXhdHj4BoNDX/index.html?utm_source=pdappwakeupup_20170001", "title": "萌宝出游换新物", "activityId": "00125516", "encodeActivityId": "2D27PUL2XRBFWtb5WXhdHj4BoNDX", "useDiscovery": "0", "inkTarget": "_self", "cartLayer": true, "hasFoot": false, "transParam": "{\"bsessionId\":\"c4de6f6d-fd42-4dd5-9ee3-75e3d481f0b5\",\"babelChannel\":\"\",\"actId\":\"00125516\",\"enActId\":\"2D27PUL2XRBFWtb5WXhdHj4BoNDX\",\"pageId\":\"287262\"}", "hasPerData": "0", "biimpr": "00125516_287262_1#2e6e2346d8ecf98d67555c8589f8da806310063d-0-621037-3_1#d00909b453c4ec2b45bda18119f312177c0be458-0-621037-3", "item": "0", "cpChannelKey": "H5node" }, "paginationInfo": { "paginationFlrs": "[[5330774,5282176],[5287969,5283845,5283849,5283851,5283853,5283855,5283857]]", "paginationParams": ["1", "2"], "currentPageIndex": 0, "transParam": "{\"bsessionId\":\"c4de6f6d-fd42-4dd5-9ee3-75e3d481f0b5\",\"babelChannel\":\"\",\"actId\":\"00125516\",\"enActId\":\"2D27PUL2XRBFWtb5WXhdHj4BoNDX\",\"pageId\":\"287262\"}" }};
            }());
         <?php echo '</script'; ?>
>
         <?php echo '<script'; ?>
 src="assets/js/main.1522139479323.js"><?php echo '</script'; ?>
>
         </body></html><?php }
}
