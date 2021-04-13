<?php
    if(isset($_POST["submit"])){
        
        require_once("pdo.php");
        extract($_POST);

        $sql = "INSERT INTO members(user,pw,created_at)VALUES(?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user,md5($pw),$now]);
    
        echo "<script>alert('會員已註冊，請重新登入');</script>";
        header("refresh:0;url=index.php");
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
    <h1>會員註冊</h1>
    <form action="" method="post">
        <div>
            <label for="">帳號</label>
            <input type="text" name="user">
        </div>
        <div>
            <label for="">密碼</label>
            <input type="password" name="pw">
        </div>
        <input type="submit" value="註冊會員" name="submit">
    </form>
</body>
</html>