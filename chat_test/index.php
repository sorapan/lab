<?php
session_start();
$_SESSION['user'] = (isset($_GET['user']) === true) ? (int)$_GET['user'] : 0;

?>

<!DOCTYPE html>
    <html>
<head>
    <title>AJAX CHAT</title>
    <meta http-equiv="Content-Language" content="th">
    <meta http-equiv="content-Type" content="text/html; charset=window-874">
    <meta http-equiv="content-Type" content="text/html; charset=tis-620">
    <meta http-equiv="content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="/lab/chat_test/css/styles.css">
</head>
<body>

    <div class="chat">
        <div class="messages">

        </div>
        <textarea  class="entry" placeholder="fuck you!!" ></textarea>
    </div>

    <script src="http://code.jquery.com/jquery-1.8.2.min.js" charset="UTF-8"></script>
    <script src="js/chat.js" charset="UTF-8"></script>
</body>
    </html>
