<?php
$dir    = '../';
$files1 = scandir($dir);
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>

    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />

    <link rel="stylesheet" type="text/css" href="css/content_style_1.css">

    <script src="jquery/jquery.js"></script>
    <script src="control_1.js"></script>

</head>
<body>

<div id="show_dir_list">
    <div id="dir_list">
        <ul>
        <?php
        foreach($files1 as $key => $val){
            if($files1[$key] != ".." && $files1[$key] != "."){
                echo "<li><a target='_parent' href='/lab/".$files1[$key]."'>".$files1[$key]."</a></li><br>";
            }
        }
        ?>
        </ul>
    </div>
</div>

<div id="content">

</div>
</body>
</html>