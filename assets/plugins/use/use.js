/**
 * Created by Ing. Hector Curbelo Barrios on 02/12/2017.
 */

jQuery.use = function( phat, options )
{
    var url=baseurl+"assets/"+phat+'.js?v='+Date.now();
    options = $.extend( options || {}, {
        dataType: "script",
        cache: true,
        url: url,
        async: false
    });
    return jQuery.ajax( options );
};
