<?php
    function showAllPosts(){
        global $pdo;
        $sql = "SELECT posts.*,members.user,categories.title AS c_title FROM posts 
                LEFT JOIN members ON posts.member_id = members.id
                LEFT JOIN categories ON posts.category_id = categories.id 
                ORDER BY posts.id DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $posts = array();
        while($row = $stmt->fetch()){
            $posts[] = $row;
        }
        return $posts;
    }
    function showPost($id){
        global $pdo;
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $post = $stmt->fetch();
        return $post;
    }
    function storePost($request){
        global $pdo;
        global $now;
        session_start();
        extract($request);
        $sql = "INSERT INTO posts(title, content, category_id, member_id, cover,created_at, updated_at)VALUES(?,?,?,?,?,?,?)";
        $member_id = $_SESSION["AUTH"]["id"];
        $cover = substr($cover, 7);
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $content, $category_id, $member_id, $cover ,$now, $now]);
    }
    function editPost($id){
        global $pdo;
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $post = $stmt->fetch();
        return $post;
    }
    function updatePost($request){
        global $pdo;
        global $now;
        extract($request);
        $sql = "UPDATE posts SET title=?,content=?,category_id=?,updated_at=? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $content, $category_id, $now, $id]);

    }
    function deletePost($request){
        global $pdo;
        extract($request);
        $sql = "DELETE FROM posts WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
    }

    function auth($request){
        session_start();
        global $pdo;
        extract($request);

        $sql = "SELECT * FROM members WHERE user = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if(!$row){
            // echo "<script>alert('???????????????');</script>";
            echo "<script>alert('?????????????????????');</script>";
            header("refresh:0;url=index.php");
            return;
        }
        if(md5($pw) == $row["pw"]){
            $_SESSION["AUTH"] = $row;
            echo "<script>alert('????????????');</script>";
            header("refresh:0;url=index.php");
        }else{
            echo "<script>alert('?????????????????????');</script>";
            header("refresh:0;url=index.php");
        }
    }
    function register($request){
        global $pdo;
        global $now;
        extract($request);

        //??????????????????????????????
        $sql_check = "SELECT * FROM members WHERE user = ?";
        $stmt_check = $pdo->prepare($sql_check);
        $stmt_check->execute([$user]);

        // echo $stmt_check->rowCount();
        if($stmt_check->rowCount() > 0){
            echo "<script>alert('???????????????????????????????????????');</script>";
            header("refresh:0;url=index.php");
            return;
        }

        $sql = "INSERT INTO members(user,pw,created_at)VALUES(?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user,md5($pw),$now]);
    
        echo "<script>alert('?????????????????????????????????');</script>";
        header("refresh:0;url=index.php");
    }
