<?php

session_start();

if(isset($_POST["ip1"])){

    echo "Successful";
    echo "<meta http-equiv='refresh' content='1 ;url=index.php'>" ;

    // เอา $_POST["ip1"] เก็บใส่ฐานข้อมูล

}else{

    echo "empty data";
    echo "<meta http-equiv='refresh' content='1 ;url=index.php'>" ;

}