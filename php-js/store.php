<?php
    require_once("pdo.php");

    extract($_POST);
    $sql = "INSERT INTO students(name,phone, mail,gender,edu,skill,content,created_at)VALUES(?,?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $skill = implode(",",$skill);
    $stmt->execute([$name,$phone,$mail,$gender,$edu,$skill,$content,$now]);

    // header("location:index.php");