<?
ob_start();
setcookie("strName");
setcookie("strSiteName");
?>
    <html>
    <head>
        <title>ThaiCreate.Com Tutorial</title>
    </head>
    <body>
    Created Check.<br>
    $strName = <?=$_COOKIE["strName"];?><br>
    $strSiteName = <?=$_COOKIE["strSiteName"];?><br>
    <br>
    <a href="PageCookie1.php">Create Cookie</a><br>
    <a href="PageCookie2.php">Check Cookie</a><br>
    </body>
    </html>
<?
ob_end_flush();
?>