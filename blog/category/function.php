<?php
    function showAllCategories(){
        global $pdo;
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
        global $pdo;
        global $now;
        extract($request);
        $sql = "INSERT INTO categories(title, slug, created_at)VALUES(?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $slug,  $now]);
    }
    function deleteCategory($request){
        global $pdo;
        extract($request);
        $sql = "DELETE FROM categories WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
    }