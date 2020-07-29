/**
 * Created by Ing. Hector Curbelo Barrios.
 */
jQuery.extend({
    clockView: function( elementid, time, view ) 
    {
        /* declarate */
        var that = this;
        var assigndata = null;
        /* intance dom element */
        /* functions */
        var totalTime = time;

        function updateClock() {
            document.getElementById(elementid).innerHTML = totalTime;
            if( totalTime == 0 )
            {
                view.reload();
            }else{
                totalTime-=1;
                setTimeout("updateClock()",1000);
            }
        }
        updateClock();
    }
});