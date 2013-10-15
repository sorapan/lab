$(function(){

    function loop(){

        $.ajax({
            url: 'ajax/chat2.php',
            type: 'post',
            scriptCharset: 'UTF-8',
            data:{method: 'fetch'},
            success: function(){

                loop();

            }
        });

    }

});