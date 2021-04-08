<?php
    require_once("pdo.php");
    extract($_POST);
    echo $img;
    
    // 只有資料夾，沒有經過資料庫
    // unlink($img);

    // 資料庫
    unlink("images/".$img);

    $sql = "DELETE FROM imgs WHERE id = ?";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([$id]);


    header("location:list.php");