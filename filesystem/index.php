<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="pic">
        <input type="submit" value="上傳">
    </form>

    <?php
        // $text = "hello";
        //加密 md5() sha1()
        // uniqid()
        // time();
        // echo md5(time());
    ?>
</body>
</html>