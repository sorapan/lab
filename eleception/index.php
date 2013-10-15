<!DOCTYPE html>
<html>
<head>
    <title>hi</title>
    <script src="../jquery/jquery.js"></script>
    <link rel="stylesheet" href="style_1.css" type="text/css">

    <script>
        $(function(){


            $(" button#tggle_parent").click(function(){

                $(" div#parent").toggle();

            });

            $(" button#tggle_child").click(function(){

                $(" div#child").toggle();

            });



        })
    </script>

</head>
<body>

<button id="tggle_parent">press</button>
<br><br><br><br><br>
<div id="parent">

    <h2>hiiii</h2>

    <button id="tggle_child">press</button>
    <div id="child">
        <h2>hello</h2>
    </div>

</div>

</body>
</html>