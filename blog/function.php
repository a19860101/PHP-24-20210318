<?php
    function showAllPosts(){
        require_once("pdo.php");
        $sql = "SELECT * FROM posts ORDER BY id DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $posts = array();
        while($row = $stmt->fetch()){
            $posts[] = $row;
        }
        return $posts;
    }
    function showPost($id){
        require_once("pdo.php");
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $post = $stmt->fetch();
        return $post;
    }
    function storePost($request){
        require_once("pdo.php");
        extract($request);
        $sql = "INSERT INTO posts(title, content, category_id, member_id, created_at, updated_at)VALUES(?,?,?,?,?,?)";
        $member_id = 1;
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $content, $category_id, $member_id, $now, $now]);
    }
    function editPost($id){
        require_once("pdo.php");
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $post = $stmt->fetch();
        return $post;
    }
    function updatePost($request){
        require_once("pdo.php");
        extract($request);
        $sql = "UPDATE posts SET title=?,content=?,category_id=?,updated_at=? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $content, $category_id, $now, $id]);

    }
    function deletePost($request){
        require_once("pdo.php");
        extract($request);
        $sql = "DELETE FROM posts WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
    }

    function auth($request){
        session_start();
        require_once("pdo.php");
        extract($request);

        $sql = "SELECT * FROM members WHERE user = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if(!$row){
            // echo "<script>alert('帳號不存在');</script>";
            echo "<script>alert('帳號或密碼錯誤');</script>";
            header("refresh:0;url=index.php");
            return;
        }
        if(md5($pw) == $row["pw"]){
            $_SESSION["AUTH"] = $row;
            echo "<script>alert('登入成功');</script>";
            header("refresh:0;url=index.php");
        }else{
            echo "<script>alert('帳號或密碼錯誤');</script>";
            header("refresh:0;url=index.php");
        }
    }
