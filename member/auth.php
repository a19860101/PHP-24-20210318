<?php
    session_start();
    require_once("pdo.php");
    extract($_POST);

    $sql = "SELECT * FROM members WHERE user = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if(!$row){
        // echo "<script>alert('帳號不存在');</script>";
        echo "<script>alert('帳號或密碼錯誤');</script>";
        header("refresh:0;url=index.php");
        return;
    }
    if(md5($pw) == $row["pw"]){
        $_SESSION["AUTH"] = $row;
        echo "<script>alert('登入成功');</script>";
        header("refresh:0;url=index.php");
    }else{
        echo "<script>alert('帳號或密碼錯誤');</script>";
        header("refresh:0;url=index.php");
    }