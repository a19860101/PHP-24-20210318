<?php
    require_once("pdo.php");
    $sql = "SELECT * FROM imgs";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();


?>
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
    <h2>從資料夾抓取</h2>
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
    <hr>
    <h2>從資料庫抓取</h2>
    <?php while($row = $stmt->fetch()){ ?>
    <img src="images/<?php echo $row["img"];?>" width="100">
    <form action="delete.php" method="post">
        <input type="hidden" name="img" value="<?php echo $row["img"]; ?>">
        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
        <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
    </form>
    <?php } ?>
</body>
</html>