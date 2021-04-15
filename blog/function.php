<?php
    function storePost($request){
        require_once("pdo.php");
        extract($request);
        $sql = "INSERT INTO posts(title, content, category_id, member_id, created_at, updated_at)VALUES(?,?,?,?,?,?)";
        $member_id = 1;
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $content, $category_id, $member_id, $now, $now]);
    }