//全局ajax方法
$.extend({
    /*
        obj => { url : 'xxx', type : 'post', option: { token : 'ooo', password : 'xxx' } }
    */
    ajaxMob: function(obj, successfn, errorfn) {
        var defaults = {};
        var setting = $.extend(defaults, obj.option);
        $.ajax({
            type: obj.type,
            url: obj.url,
            data: setting,
            async: obj.async,
            dataType: 'json',
            success: function(data) {
                if ($.isFunction(successfn)) successfn(data);
            },
            error: function(data) {
                if ($.isFunction(errorfn)) errorfn(data);
            }
        });
    }
});