<?php
    try {
        require_once("pdo.php");

        extract($_POST);
        $skill = implode(",",$skill);
        // $sql = "UPDATE students SET 
        //         name    = ? ,
        //         mail    = ? ,
        //         phone   = ? ,
        //         edu     = ? ,
        //         gender  = ? ,
        //         content = ? ,
        //         skill   = ?
        //         WHERE id = ?
        // ";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$name,$mail,$phone,$edu,$gender,$content,$skill,$id]);

        $sql = "UPDATE students SET 
                name    = :name ,
                mail    = :mail ,
                phone   = :phone ,
                edu     = :edu ,
                gender  = :gender ,
                content = :content ,
                skill   = :skill
                WHERE id = :id
        ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":mail",$mail);
        $stmt->bindParam(":phone",$phone);
        $stmt->bindParam(":edu",$edu);
        $stmt->bindParam(":gender",$gender);
        $stmt->bindParam(":content",$content);
        $stmt->bindParam(":skill",$skill);
        $stmt->bindParam(":id",$id);
        $stmt->execute();


        echo "資料已更新";
        header("refresh:2;url=index.php");
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    