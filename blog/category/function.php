<?php
    function showAllCategories(){
        require_once("../pdo.php");
        $sql = "SELECT * FROM categories";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $categories = array();
        while($row = $stmt->fetch()){
            $categories[] = $row;
        }
        return $categories;
    }
    function storeCategory($request){
        require_once("../pdo.php");
        // session_start();
        extract($request);
        $sql = "INSERT INTO categories(title, slug, created_at)VALUES(?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $slug,  $now]);
    }