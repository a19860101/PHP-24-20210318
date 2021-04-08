<?php
    function upload($files){
        require_once("pdo.php");
        // print_r($_FILES);
        // echo "<br>";
        // print_r($_FILES["pic"]);
        // echo "<br>";
        // print_r($_FILES["pic"]["name"]);
    
        extract($files);
    
        $ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));
        // $ext = pathinfo($name,PATHINFO_EXTENSION);
        $filename = pathinfo($name,PATHINFO_FILENAME);
        $basename = pathinfo($name,PATHINFO_BASENAME);
        $dirname = pathinfo($name,PATHINFO_DIRNAME);
    
        // echo $ext;
        // echo "<br>";
        // echo $filename;
        // echo "<br>";
        // echo $basename;
        // echo "<br>";
        // echo $dirname;
        // echo "<br>";
    
        if($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif" ){
            header("location:index.php?error=1");
            return;
        }
        $img = md5(uniqid()).".".$ext;
    
        if(!is_dir("images")){
            mkdir("images");
        }
    
        $target = "images/".$img;
    
        $sql = "INSERT INTO imgs(img,created_at)VALUES(?,?)";
        $stmt = $pdo->prepare($sql);
    
        if($error == 0){
            if(move_uploaded_file($tmp_name,$target)){
                echo "上傳成功";
                $stmt->execute([$img,$now]);
                header("Refresh:1;url=index.php");
            }else{
                echo "上傳失敗";
            }
        }
    }