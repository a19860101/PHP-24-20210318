<?php
    // print_r($_FILES);
    // echo "<br>";
    // print_r($_FILES["pic"]);
    // echo "<br>";
    // print_r($_FILES["pic"]["name"]);

    extract($_FILES["pic"]);

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

    echo $img;

    // echo "<br>";
    // echo $type;
    if(!is_dir("images")){
        mkdir("images");
    }

    if($error == 0){
        if(move_uploaded_file($tmp_name,"images/".$img)){
            echo "上傳成功";
            header("Refresh:1;url=index.php");
        }else{
            echo "上傳失敗";
        }
    }
    /*
        只有圖片可以上傳
        檔名要亂數
        如果資料夾不存在
    
    */