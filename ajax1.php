<html>
<head>
    <title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<form name="frmMain" action="" method="post">
    <script language="JavaScript">
        function showPreview(ele)
        {
            document.frmMain.imgAvatar.src=ele.value;
        }
    </script>
    <input type="file" name="filUpload" OnChange="showPreview(this)">
    <input type="submit" name="btnSubmit" value="Submit">
    <hr>
    <img id="imgAvatar">
</form>
</body>
</html>
