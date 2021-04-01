<?php
    require_once("conn.php");
    extract($_POST);

    $sql = "DELETE FROM students WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i",$id);
    /*
        s: string
        i: integer
    */
    $stmt->execute();

    echo "資料已刪除";
    header("refresh:2;url=index.php");