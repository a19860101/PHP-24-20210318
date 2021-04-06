<?php
    require_once("conn.php");

    extract($_POST);
    $skill = implode(",",$skill);
    $sql = "UPDATE students SET 
            name    = ? ,
            mail    = ? ,
            phone   = ? ,
            edu     = ? ,
            gender  = ? ,
            content = ? ,
            skill   = ?
            WHERE id = ?
    ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssi",$name,$mail,$phone,$edu,$gender,$content,$skill,$id);
	$stmt->execute();


    echo "資料已更新";
    header("refresh:2;url=index.php");