<?php
    require_once("conn.php");

    // print_r($_POST);
    extract($_POST);
    $skill = implode(",",$skill);
    $sql = "UPDATE students SET 
            name    = '$name' ,
            mail    = '$mail' ,
            phone   = '$phone' ,
            edu     = '$edu' ,
            gender  = '$gender' ,
            content = '$content' ,
            skill   = '$skill'
            WHERE id = {$id}
    ";
    mysqli_query($conn,$sql);
    echo "資料已更新";
    header("refresh:2;url=index.php");