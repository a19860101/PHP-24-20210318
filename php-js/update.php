<?php
    require_once("pdo.php");
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
    $stmt = $pdo->prepare($sql);
	$stmt->execute([$name,$mail,$phone,$edu,$gender,$content,$skill,$id]);

