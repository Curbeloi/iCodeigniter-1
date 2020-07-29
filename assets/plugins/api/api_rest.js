/**
 * Created by Ing. Hector Curbelo Barrios.
 */

jQuery.extend({
    serve: function() {
        var that = this;
        var listeners = new Array();

        var $api_key = '8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNHCTBF56TA';
        var $urlserve = 'http://localhost/icodeigniter/index.php/';

        this.return_key = function() {
            return $api_key;
        }

        this.return_url = function() {
            return $urlserve;
        }
    }
});