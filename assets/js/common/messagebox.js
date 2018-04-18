var messagebox = {
    /**
     * @param {Object} oData
     * 一个按钮
     * var oData = {
     * 		btnTitle:btnTitle,
     *		btnTip1: btnTip1,
     *      btnTip2: btnTip2,
     *		btnText: btnText,
     *		fnCallBack : fnCallBack
     *	};
     */
    fnShowInfo: function(oData) {
        var sHtml = '	<div class="pop">' +
            '				<div class="dialog">' +
            '				<p class="d-title">${btnTitle}</p>' +
            '					<a class="d-close"><i></i></a>' +
            '					<div class="d-inf">' +
            '						<p class="d-tip twoTip">${btnTip}</p>' +
            '					</div>' +
            '					<div class="d-btn">' +
            '						<button type="button" class="center btnpressred">${btnText}</button>' +
            '					</div>' +
            '				</div>' +
            '			</div>';

        var oPop = $.tmpl(sHtml, oData).appendTo(document.body);
        $(".d-tip").html(oData.btnTip);
        var oA = oPop.find('div.d-btn').children();
        oA.eq(0).on("click", function() {
            $(this).css("background-color", "#DDDDDD");
            $(this).css("color", "#f64172");
            setTimeout(function() {
                oPop.remove();
                oData.fnCallBack();
            }, 100);
        });

        oPop.find(".d-close").on("click", this.fnHideDialogClick);
        var aa = function() {
            var h = $(document).height();
            var ht = $(".dialog").height();
            $(".pop").css("height", h);
            $(".dialog").css({
                "margin-top": -(ht / 2 + 20)
            });
        }
        aa();
    },

    /**
     * 两个按钮
     * var oData = {
     * 		btnTitle:btnTitle,
     *		btnTip1: btnTip1,
     *      btnTip2: btnTip2,
     *		btnText1: btnText1,
     *		btnText2: btnText2,
     * 	    fnCallBack1: fnCallBack1,
     * 		fnCallBack2: fnCallBack2
     *	};
     */

    fnShowPrompt: function(oData) {
        var sHtml = '		<div class="pop">' +
            '				<div class="dialog">' +
            '				<p class="d-title">${btnTitle}</p>' +
            '					<a class="d-close"><i></i></a>' +
            '					<div class="d-inf">' +
            '						<p class="d-tip">${btnTip1}</p>' +
            '						<p class="d-tip twoTip">${btnTip2}</p>' +
            '					</div>' +
            '					<div class="d-btn">' +
            '						<button type="button" class="btnpressred">${btnText1}</button>' +
            '						<button type="button" class="btnpressred">${btnText2}</button>' +
            '					</div>' +
            '				</div>' +
            '			</div>';

        var oPop = $.tmpl(sHtml, oData).appendTo(document.body);

        var oA = oPop.find('div.d-btn').children();
        oA.eq(0).on("click", function() {
            oData.fnCallBack1('N');
        });
        oA.eq(1).on("click", function() {
            oData.fnCallBack2('Y');
        });

        oPop.find(".d-close").on("click", this.fnHideDialogClick);
        var aa = function() {
            var h = $(document).height();
            var ht = $(".dialog").height();
            $(".pop").css("height", h);
            $(".dialog").css({
                "margin-top": -(ht / 2 + 20)
            });
        }
        aa();
    },
    fnHideDialogClick: function() {
        $(this).parent().parent().remove();
    },
    fnToast: function(oData) {
        var sHtml = '	<div class="toast">' +
            '				<p>${toast}</p>' +
            '			</div>';

        var oPop = $.tmpl(sHtml, oData).appendTo(document.body);
        setTimeout(function() {
            $(".toast").remove();
        }, 3000);
    }
};