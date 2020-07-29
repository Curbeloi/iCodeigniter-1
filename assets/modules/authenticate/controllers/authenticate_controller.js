/**
 * Created by Ing. Hector Curbelo Barrios.
 */
/* include */
$.use('modules/authenticate/views/authenticate_view');
$.use('modules/authenticate/models/authenticate_model');

jQuery.extend({
    authenticateController: function(model, view) 
    {
        /* Listen View function  */
        var vlist = $.ViewListener({
            submitLogin: function() {
                var data = view.returnLogindata();
                if (data !== "") {
                    model.authenticate(data);
                    if (!model.cacheStatus()) {
                        view.errorLogin(model.messageReturn());
                    } else {
                        view.loginTrue(model.returnCache());
                        model.clearCache();
                        model.cacheDefoult();
                    }
                }
            }
        });
        view.addListener(vlist);
    }
});

/* intance views and models */
$(function() {
    var model = new $.authenticateModel();
    var view = new $.authenticateView();
    var controller = new $.authenticateController(model, view);
});