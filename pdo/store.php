<?php
    try {
        require_once("pdo.php");
        extract($_POST);
        
        if(!isset($_POST["skill"])){
            $skill = '';
            // echo "請勾選專長";
            // header("refresh:1;url=create.php");
            // return;
        }else{
            $skill = implode(",",$skill);
        }
        
        if(!isset($_POST["gender"])){
            $gender = '';
        }
        
        // $sql = "INSERT INTO students(name,phone,mail,gender,edu,skill,content,created_at)
        //     VALUES(?,?,?,?,?,?,?,?)";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$name,$phone,$mail,$gender,$edu,$skill,$content,$now]);

        $sql = "INSERT INTO students(name,phone,mail,gender,edu,skill,content,created_at)
                VALUES(:name,:phone,:mail,:gender,:edu,:skill,:content,:created_at)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":phone",$phone);
        $stmt->bindParam(":mail",$mail);
        $stmt->bindParam(":gender",$gender);
        $stmt->bindParam(":edu",$edu);
        $stmt->bindParam(":skill",$skill);
        $stmt->bindParam(":content",$content);
        $stmt->bindParam(":created_at",$now);
        $stmt->execute();


        echo "資料已新增";
        header("refresh:2;url=index.php");
    }catch(PDOException $e){
        echo $e->getMessage();
    }