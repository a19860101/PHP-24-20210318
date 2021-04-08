<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>圖片列表</h1>
    <a href="index.php">圖片上傳</a>
    <hr>
    <?php
        $imgs = glob("images/*");
        foreach($imgs as $img){
    ?>
    <img src="<?php echo $img; ?>" width="100">
    <form action="delete.php" method="post">
        <input type="hidden" name="img" value="<?php echo $img; ?>">
        <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
    </form>
    <?php
        }
    ?>
</body>
</html>