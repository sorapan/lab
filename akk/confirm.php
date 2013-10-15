<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php

if(isset($_POST["ip1"])){
    echo $_POST["ip1"];

?>

<form action="getdata.php"  method="post">
    <input type="text" value=" <?php echo $_POST['ip1']; ?>" name="ip1">
    <input type="submit" value="okay" name="ok">
    <input type="button" value="cancel" name="cancel" onclick="window.location.href='index.php'">
</form>


<?php

}
?>

</body>
</html>