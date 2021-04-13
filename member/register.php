<?php
    if(isset($_POST["submit"])){
        
        require_once("pdo.php");
        extract($_POST);

        //判斷會員名稱是否存在
        $sql_check = "SELECT * FROM members WHERE user = ?";
        $stmt_check = $pdo->prepare($sql_check);
        $stmt_check->execute([$user]);

        // echo $stmt_check->rowCount();
        if($stmt_check->rowCount() > 0){
            echo "<script>alert('此帳號已被使用，請重新註冊');</script>";
            header("refresh:0;url=index.php");
            return;
        }

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