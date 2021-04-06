<?php
    print_r($_FILES);
    echo "<br>";
    print_r($_FILES["pic"]);
    echo "<br>";
    print_r($_FILES["pic"]["name"]);

    extract($_FILES["pic"]);
    // echo "<br>";
    // echo $type;
    if($error == 0){
        move_uploaded_file($tmp_name,"images/".$name);
    }