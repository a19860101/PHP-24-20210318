<?php
    session_start();
    // echo $_SESSION["USER"],$_SESSION["MAIL"],$_SESSION["PW"];
    // print_r($_SESSION["AUTH"]);
    extract($_SESSION["AUTH"]);
    // echo $_SESSION["AUTH"]["user"],$_SESSION["AUTH"]["mail"];
    echo $user;
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
    <form action="response.php" method="post">
        <div>
            <label for="">帳號</label>
            <input type="text" name="user">
        </div>
        <div>
            <label for="">email</label>
            <input type="text" name="mail">
        </div>
        <div>
            <label for="">密碼</label>
            <input type="text" name="pw">
        </div>
        <input type="submit">
    </form>
</body>
</html>