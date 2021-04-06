<?php

    try {
        require_once("pdo.php");
        extract($_POST);

        // $sql = "DELETE FROM students WHERE id = ?";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$id]);
        
        $sql = "DELETE FROM students WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();


        echo "資料已刪除";
        header("refresh:1;url=index.php");
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    