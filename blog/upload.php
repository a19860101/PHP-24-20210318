<?php
    extract($_FILES["cover"]);
    $ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));

    if($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif" ){
        header("location:post-create.php?error=1");
        return;
    }
    $img = md5(uniqid()).".".$ext;

    if(!is_dir("images")){
        mkdir("images");
    }

    $target = "images/".$img;

    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo "上傳成功";
            header("Refresh:1;url=post-create.php");
        }else{
            echo "上傳失敗";
        }
    }
