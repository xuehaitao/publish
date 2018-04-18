/*
    九商金融PC JS公共方法
*/
window.JJ = window.JJ || {};

//手机号 验证
;
(function() {
    var verifyPhoneNum = function(value) {
        var regularPhone = /^((\+86)?|\(\+86\))0?1[3578]\d{9}$/;
        if (value == '' || value == null) {
            messagebox.fnToast({
                toast: "请输入您的手机号！"
            });
            return false;
        } else if (!regularPhone.test(value)) {
            messagebox.fnToast({
                toast: "手机号格式不正确！"
            });
            return false;
        }
        return true;
    };
    JJ.verifyPhoneNum = verifyPhoneNum || {};
})();

//身份证校验
;
(function() {
    function checkEnergyCard(self) {
        var allowancePersonValue = $(self).val();
        //是否为空
        if (allowancePersonValue == "") {
            messagebox.fnToast({
                toast: "身份证不能为空"
            });
            return false;
        } else if (isCardNo(allowancePersonValue) === false) {
            //校验长度，类型
            messagebox.fnToast({
                toast: "您输入的身份证号码不正确，请重新输入"
            });
            return false;
        } else if (checkProvince(allowancePersonValue) === false) {
            //检查省份
            messagebox.fnToast({
                toast: "您输入的身份证号码不正确，请重新输入"
            });
            return false;
        } else if (checkBirthday(allowancePersonValue) === false) {
            //校验生日
            messagebox.fnToast({
                toast: "您输入的身份证号码不正确，请重新输入"
            });
            return false;
        } else if (checkParity(allowancePersonValue) === false) {
            //检验位的检测
            messagebox.fnToast({
                toast: "您输入的身份证号码不正确，请重新输入"
            });
            return false;
        } else {
            return true;
        }
    }

    //身份证省的编码
    var vcity = {
        11: "北京",
        12: "天津",
        13: "河北",
        14: "山西",
        15: "内蒙古",
        21: "辽宁",
        22: "吉林",
        23: "黑龙江",
        31: "上海",
        32: "江苏",
        33: "浙江",
        34: "安徽",
        35: "福建",
        36: "江西",
        37: "山东",
        41: "河南",
        42: "湖北",
        43: "湖南",
        44: "广东",
        45: "广西",
        46: "海南",
        50: "重庆",
        51: "四川",
        52: "贵州",
        53: "云南",
        54: "西藏",
        61: "陕西",
        62: "甘肃",
        63: "青海",
        64: "宁夏",
        65: "新疆",
        71: "台湾",
        81: "香港",
        82: "澳门",
        91: "国外"
    };

    //检查号码是否符合规范，包括长度，类型
    function isCardNo(card) {
        //身份证号码为15位或者18位，15位时全为数字，18位前17位为数字，最后一位是校验位，可能为数字或字符X
        var reg = /(^\d{15}$)|(^\d{17}(\d|X)$)/;
        if (reg.test(card) === false) {
            return false;
        }
        return true;
    }

    //取身份证前两位,校验省份
    function checkProvince(card) {
        var province = card.substr(0, 2);
        if (vcity[province] == undefined) {
            return false;
        }
        return true;
    }

    //检查生日是否正确
    function checkBirthday(card) {
        var len = card.length;
        //身份证15位时，次序为省（3位）市（3位）年（2位）月（2位）日（2位）校验位（3位），皆为数字
        if (len == '15') {
            var re_fifteen = /^(\d{6})(\d{2})(\d{2})(\d{2})(\d{3})$/;
            var arr_data = card.match(re_fifteen);
            var year = arr_data[2];
            var month = arr_data[3];
            var day = arr_data[4];
            var birthday = new Date('19' + year + '/' + month + '/' + day);
            return verifyBirthday('19' + year, month, day, birthday);
        }
        //身份证18位时，次序为省（3位）市（3位）年（4位）月（2位）日（2位）校验位（4位），校验位末尾可能为X
        if (len == '18') {
            var re_eighteen = /^(\d{6})(\d{4})(\d{2})(\d{2})(\d{3})([0-9]|X)$/;
            var arr_data = card.match(re_eighteen);
            var year = arr_data[2];
            var month = arr_data[3];
            var day = arr_data[4];
            var birthday = new Date(year + '/' + month + '/' + day);
            return verifyBirthday(year, month, day, birthday);
        }
        return false;
    }

    //校验日期
    function verifyBirthday(year, month, day, birthday) {
        var now = new Date();
        var now_year = now.getFullYear();
        //年月日是否合理
        if (birthday.getFullYear() == year && (birthday.getMonth() + 1) == month && birthday.getDate() == day) {
            //判断年份的范围（3岁到100岁之间)
            var time = now_year - year;
            if (time >= 3 && time <= 100) {
                return true;
            }
            return false;
        }
        return false;
    }

    //校验位的检测
    function checkParity(card) {
        //15位转18位
        card = changeFivteenToEighteen(card);
        var len = card.length;
        if (len == '18') {
            var arrInt = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
            var arrCh = new Array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
            var cardTemp = 0,
                i, valnum;
            for (i = 0; i < 17; i++) {
                cardTemp += card.substr(i, 1) * arrInt[i];
            }
            valnum = arrCh[cardTemp % 11];
            if (valnum == card.substr(17, 1)) {
                return true;
            }
            return false;
        }
        return false;
    }

    //15位转18位身份证号
    function changeFivteenToEighteen(card) {
        if (card.length == '15') {
            var arrInt = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
            var arrCh = new Array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
            var cardTemp = 0,
                i;
            card = card.substr(0, 6) + '19' + card.substr(6, card.length - 6);
            for (i = 0; i < 17; i++) {
                cardTemp += card.substr(i, 1) * arrInt[i];
            }
            card += arrCh[cardTemp % 11];
            return card;
        }
        return card;
    }
    JJ.checkEnergyCard = checkEnergyCard || {};

    // 在新窗口中打开页面
    function newWin(url, id) {
        var a = document.createElement('a');
        a.setAttribute('href', url);
        a.setAttribute('target', '_blank');
        a.setAttribute('id', id);
        // 防止反复添加
        if (!document.getElementById(id)) {
            document.body.appendChild(a);
        }
        a.click();
    }
    JJ.newWin = newWin;


})();

//获取URL参数
;
(function() {
    function getQueryStringArgs() {
        var qs = (location.search.length > 0 ? location.search.substring(1) : "");
        var args = {};
        var items = qs.length ? qs.split("&") : [];
        var item = null,
            name = null,
            value = null,
            i = 0,
            len = items.length;
        for (i = 0; i < len; i++) {
            item = items[i].split("=");
            name = decodeURIComponent(item[0]);
            value = decodeURIComponent(item[1]);
            if (name.length) {
                args[name] = value;
            }
        }
        return args;
    }
    JJ.getQueryStringArgs = getQueryStringArgs;
})();


//cookie方法
;
(function() {
    JJ.cookie = {
        get: function(name) {
            var c = document.cookie;
            if (!c.length) {
                return '';
            }
            var tp = c.split('; ');
            for (var i = tp.length - 1; i >= 0; i--) {
                var tm = tp[i].split('=');
                if (tm.length > 1 && tm[0] == name && tm[1]) {
                    return unescape($.trim(tm[1]));
                }
            }
            return '';
        },
        set: function(name, value, day, domain, usehost) {
            day = day || 365, domain = domain || 'jjyjsjr.com', usehost = usehost || 0;
            var expires = new Date();
            expires.setTime((new Date()).getTime() + 3600 * 24 * 1000 * day);
            document.cookie = name + "=" + escape(value) + "; path=/; " + (usehost ? 'host' : 'domain') + "=" + domain + (day == -1 ? '' : ";expires=" + expires.toGMTString());
        },
        del: function(name) {
            this.set(name, '', -365, null, 0);
            this.set(name, '', -365, document.location.host, 1);
        }
    };
})();

//本地存储
;
(function() {
    var localStorage = {
        get: function(key) {
            try {
                var value = window.localStorage.getItem(key);
                return value ? $.parseJSON(value) : value;
            } catch (e) {
                return null;
            }
        },
        set: function(key, value) {
            try {
                this.del(key);
                window.localStorage.setItem(key, value);
            } catch (e) {}
        },
        del: function(key) {
            try {
                window.localStorage.removeItem(key);
            } catch (e) {}
        }
    }

    JJ.STORAGE = JJ.localStorage || {
        set: localStorage.set,
        get: localStorage.get,
        del: localStorage.del
    };
})();

//RSA加密
function encrytRsa(str){
    var pub_key = '-----BEGIN PUBLIC KEY-----MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDmD0CIx47s6/ouaL/yCYlBAKPRX//hZm82Fgxs7WxxW62d5zc2gjP6EGrYKABhwitnL2NW1zNz9TeWxk7waOXjKdHRV6sfSfMTf5willpRSwQ3BJgX2DOFiUNxgWgVFuiYe/WI3bJwihhKcaviOpN3UM/Ee3HVmy/DpGo5q4ZK5QIDAQAB-----END PUBLIC KEY-----';
    //客户端公钥：
    //var pub_key = '-----BEGIN PUBLIC KEY-----MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCisCS7FAZe4J8JxSHSl9vFdsv0k3/qR0u4fsl15iUklDYWjCJU1X93mkBzdHy5fxFmoTD8xX284kDXzu3Tc8woH5ZG/YLgq3wwI4Wmd5iyy7PSiA8oZ70oBoHQqSPTAGToXBthPQIb36JjOBeKPJ5LpSJlNlnMZhmyD/BVgUGZQwIDAQAB-----END PUBLIC KEY-----';
    rsa = forge.pki.publicKeyFromPem(pub_key);
    rsa_str = rsa.encrypt(str);
    encrypt_str = forge.util.encode64(rsa_str);

    return encrypt_str;
}