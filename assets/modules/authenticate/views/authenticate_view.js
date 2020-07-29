/**
 * Created by Ing. Hector Curbelo Barrios.
 */

jQuery.extend({
    authenticateView: function() {
        /* declarate */
        var that = this;
        var listeners = new Array();

        /* intance dom element */
        var $form = $('#form');

        /* submit function */
        $form.submit(function(e) {
            e.preventDefault();
            that.submitLogin();
        });

        /* return Login data */
        this.returnLogindata = function() {
            return $form.serialize();
        };

        /* Notification true Login */
        this.loginTrue = function(result) {
			console.log(result);
            localStorage.clear();
            window.location = baseurl + "View/load/" + result.view;
            $("#submit-btn").attr("disabled", true);
        };

        /* Notification error Login */
        this.errorLogin = function(message) 
        {
            
        };

        this.submitLogin = function() {
            $.each(listeners, function(i) {
                listeners[i].submitLogin();
            });
        };

        this.addListener = function(list) {
            listeners.push(list);
        };
    },
    ViewListener: function(list) {
        if (!list) list = {};
        return $.extend({
            submitLogin: function() {}
        }, list);
    }
});