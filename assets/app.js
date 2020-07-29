/**
 * Created by Ing. Hector Curbelo Barrios.
 */
jQuery.load = function(phat, options) {
    var url = baseurl + "assets/" + phat + '.js?v=' + Date.now();
    options = $.extend(options || {}, {
        dataType: "script",
        cache: true,
        url: url,
        async: false
    });
    return jQuery.ajax(options);
};
/* Load all controlers to use in this page */
$.load('modules/authenticate/controllers/authenticate_controller');
/* Intance serve conection */
$.use('plugins/api/api_rest');
var serve = new $.serve();
//--Ajax Extend difine
$.extend({
    xResponsepost: function(url, data) {
        // local var
        var theResponse = null;
        // jQuery ajax
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            dataType: "json",
            async: false,
            headers: {
                'API-KEY': serve.return_key()
            },
            success: function(respText) {
                theResponse = respText;
            }
        });
        // Return the response text
        return theResponse;
    }
});

$.extend({
    xResponseget: function(url, data) {
        // local var
        var theResponse = null;
        // jQuery ajax
        $.ajax({
            url: url,
            type: 'GET',
            data: data,
            dataType: "json",
            async: false,
            headers: {
                'API-KEY': serve.return_key()
            },
            success: function(respText) {
                theResponse = respText;
            }
        });
        // Return the response text
        return theResponse;
    }
});

$.extend({
    xResponse: function(url, data) {
        // local var
        var theResponse = null;
        // jQuery ajax
        $.ajax({url: url,type: 'POST',data: data,dataType: "json",async: false,
            success: function(respText) {
                theResponse = respText;
            }
        });
        // Return the response text
        return theResponse;
    }
});