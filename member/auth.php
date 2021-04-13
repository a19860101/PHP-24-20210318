<?php
    session_start();
    require_once("pdo.php");
    extract($_POST);

    $sql = "SELECT * FROM members WHERE user = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if(md5($pw) == $row["pw"]){
        $_SESSION["AUTH"] = $row;
        echo "登入成功";
        print_r($_SESSION["AUTH"]);
    }else{
        echo "帳號或密碼錯誤";
    }