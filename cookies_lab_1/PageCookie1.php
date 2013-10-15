<?
ob_start();
$strName = "Mr.Weerachai Nukitra";
setcookie("strName",$strName,time()+3600); // Expire 1 Hour
$strSiteName = "ThaiCreate.Com";
setcookie("strSiteName",$strSiteName,time()+3600); // Expire 1 Hour
?>
    <html>
    <head>
        <title>ThaiCreate.Com Tutorial</title>
    </head>
    <body>
    Cookie Created.<br><br>
    <a href="PageCookie2.php">Check Cookies</a>
    </body>
    </html>
