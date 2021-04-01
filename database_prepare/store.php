<?php
    require_once("conn.php");
    extract($_POST);
    $skill = implode(",",$skill);


    $sql = "INSERT INTO students(name,phone,mail,gender,edu,skill,content,created_at)
            VALUES(?,?,?,?,?,?,?,NOW())";
    
    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param("sssssss",$name,$phone,$mail,$gender,$edu,$skill,$content);

    /*
        s: string
        i: integer
    */
    $stmt->execute();

    echo "資料已新增";
    header("refresh:2;url=index.php");