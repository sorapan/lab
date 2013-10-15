(function($){

    getData();

    function getData(){

        $(' #submit_ip').click(function(){
            if($.isNumeric( $(' #ip1').val() )){
                SendData( $(' #ip1').val() );
            }else{
                $(' #result').html(' Error ');
            }
        });

    }

    function SendData(dat){
        $.ajax({
            type : 'POST',
            url : 'ShowData.php',
            data : {data:dat},
            success :function(data){
                $(' #result').html(data);
            },
            error :function(){
                $(' #result').html('ERROR on Transfer Data Section');
            }
        });
    }

})(jQuery);