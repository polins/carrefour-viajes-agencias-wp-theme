(function ($) {

    // Core Javascript Initialization
    var App = function() {
        'use strict';
        
        var Test = function(){
            console.log("test");
        }
        
        return {
            init: function() {
              Test();
            }
        }
    }();

    $(document).ready(function() {
        App.init();
    });


}(jQuery));