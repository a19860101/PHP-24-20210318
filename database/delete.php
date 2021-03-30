<?php
    require_once("conn.php");
    extract($_POST);

    $sql = "DELETE FROM students WHERE id = $id";
    mysqli_query($conn,$sql);

    echo "資料已刪除";
    header("refresh:2;url=index.php");