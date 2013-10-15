(function($){

    $.rb_load_pop = function(){

        $(" body ").append("<div id='popup_sty01'>PLEASE WAITING...<button>Okay</button></div>");

        $(" #popup_sty01").find(" button").click(function(){
            $(" #popup_sty01").hide();
        });

    };


    $.rb_ip_custom_pop = function(div_name, inpt_name, buttn_name, a){


        $(" body ").append("<div id='popup_sty01'><div id='header'></div><input type='text'><button>Okay</button></div>")
        $(" div#popup_sty01").addClass(div_name);
        $(" div#popup_sty01 input").addClass(inpt_name);
        $(" div#popup_sty01 button").addClass(buttn_name);

        var aa = $.extend({
            header : "aaaa"
        },a);

       return $(" div#popup_sty01 #header").html(aa.header);

    };



    $.rb_pop_1 = function(msg){

        return msg;

    };





    $.pluginBar = function(a) {

        var settings = $.extend( {

            someEvent: function() {}

        }, a);

        return settings.someEvent();
    };




    $.aa = function(a){
       return $.each(function(){

       },a);
    }



})(jQuery);
