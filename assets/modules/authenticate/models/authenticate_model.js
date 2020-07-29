/**
 * Created by Ing. Hector Curbelo Barrios.
 */

jQuery.extend
({
    authenticateModel:function ()
    {
        var cache = new Array();
        var cachestatus = false;
        var error = null;
        var message = '';
        //--Cache set data
        function objectData(data)
        {
            $.each(data, function(item)
            {
                cache[item] = data[item];
            });
        };
        //--return the cache data
        this.returnCache=function()
        {
            return cache;
        };
        //--Cache clrear data
        this.clearCache = function()
        {
            cache = new Array();
        };
        //--return if cache was modify
        this.cacheStatus=function ()
        {
            return cachestatus;
        }
        //--set defoult cache  status
        this.cacheDefoult= function ()
        {
            cachestatus=false;
        }
        //--set defoult message
        this.messageDefoult = function ()
        {
            message = '';
        }
        //--return message
        this.messageReturn = function ()
        {
            return message;
        }

        this.authenticate = function (login_data)
        {
    	  $.ajax
          ({
              url       :  baseurl+'Authenticate/Authenticate/validateAuth',
              data      : login_data ,
              type      : 'POST',
              dataType  : 'json',
              async     : false,             
              error: function(xhr)
              {
                  error = xhr.statusText+' '+' E:'+xhr.status;
              },
              success: function(data)
              {
                    message = data.message;     
                    if (data.status)
                    {
                        cachestatus = true;
                        cache = data;
                    }
                    else
                    {
                        cachestatus =  false;
                    }
              }
          });
        }
    }
});
