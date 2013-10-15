var chat={};

chat.fetchMessage = function () {
    $.ajax({
        url:  'ajax/chat.php',
        type:   'post',
		scriptCharset: 'UTF-8',
        data:   { method: 'fetch'},
        success: function(data) {
            $('.chat .messages').html(data);
        }

    });
}

chat.throwMessage = function (message) {
    if ($.trim(message).length !=0){
        $.ajax({
            url:    'ajax/chat.php',
            type:   'post',
			scriptCharset: 'UTF-8',
            data:   { method: 'throw', message: message},
            success: function(data) {
                chat.fetchMessage();
                chat.entry.val('');
            }

        });
    }
}

chat.entry = $('.chat .entry');
chat.entry.bind('keydown', function(e) {
    if(e.keyCode === 13 && e.shiftKey === false){
        chat.throwMessage($(this).val());
        e.preventDefault();
    }
});

chat.interval = setInterval(chat.fetchMessage, 2000);
chat.fetchMessage();