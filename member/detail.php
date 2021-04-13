<?php
    session_start();
    if(!isset($_SESSION["AUTH"])){
        header("location:login.php");
        return;
    }
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
    <h1>會員資料</h1>
    <ul>
        <li>會員帳號 <?php echo $_SESSION["AUTH"]["user"]; ?></li>
        <li>申請日期 <?php echo $_SESSION["AUTH"]["created_at"]; ?></li>
    </ul>
    <a href="logout.php">登出</a>
</body>
</html>