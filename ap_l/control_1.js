$(function() {

    //var pathname = window.location.pathname;
    //alert(window.location.pathname);

    //var addressValue = $(this).attr("href");
    //alert(addressValue );


    $(' .god').click(function(){

        $(" #header_box").html($(" .dod").val());
        setTimeout(function(){
            $(" .dog").hide();
        },500)

    });


    $('#content_frame').attr('src', '/lab/ap_l/content.php');



});