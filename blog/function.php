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

    function deletePost($request){
        require_once("pdo.php");
        extract($request);
        $sql = "DELETE FROM posts WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
    }