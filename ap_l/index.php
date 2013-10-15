<!DOCTYPE html>
<html>
<head>
<title></title>

    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=10" />

    <link rel="stylesheet" type="text/css" href="css/style_1.css">
    <link rel="stylesheet" type="text/css" href="rb_pop_plgin.css">

    <script src="jquery/jquery.js"></script>
    <script src="rb_popup_plgin.js"></script>
    <script src="control_1.js"></script>

</head>
<body>
<div id="header_box">
    <h1>virServ</h1>
    <p>™</p>
    <?php

        $god = md5("god");

        if($god == md5("god")){
            echo "true";
        }else{
            echo $god;
        }

    ?>
</div>


<div id="menu">
    <button class="HOME" target="_parent" onclick="location.href='/lab/ap_l/' ">HOME</button>
    <button class="REGISTER">REGISTER</button>
</div>


<iframe id="content_frame" src=""></iframe>
</body>
</html>